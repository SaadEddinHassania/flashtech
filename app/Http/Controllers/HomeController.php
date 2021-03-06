<?php

namespace App\Http\Controllers;

use App;
use App\Models\Message;
use App\Models\Category;
use App\Models\News;
use App\Models\Product;
use App\Project;
use Facebook\Facebook;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use TCG\Voyager\Facades\Voyager;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $mainCategories = Category::with('children')->where('parent_id', '=', null)->get();

        $projects = App\Project::orderBy('updated_at')->paginate(5);
        $projects->setPath($request->segment(1).'/projects');

        $news = News::orderBy('id', 'desc')->take(3)->get();

        $feeds = $this->getFacebookFeeds();
        $subCategories = Category::where('parent_id',!null)->get();
        $id = 0;
        $viewSub = view('partials.categories',compact('id','subCategories'));
        $products = Product::paginate(9);
        $products->setPath($request->segment(1).'/category_products/'.$id);
        $viewProducts = view('partials.products',compact('products'));
        return view('home', compact('mainCategories', 'news', 'viewSub','viewProducts','feeds','projects'));
    }

    public function getFacebookFeeds()
    {
        $appID = Voyager::setting('app_id');
        $appSecret = Voyager::setting('app_secret');

        $fb = new \Facebook\Facebook([
            'app_id' => $appID,
            'app_secret' => $appSecret,
            'default_graph_version' => 'v2.8',
            'default_access_token' => $appID . '|' . $appSecret, // optional
            // 'default_access_token' => 'EAAZAVDMaDq3YBALgczsuFlan5RZAH9JV4UKoxafZALMt4xWHZAWvw9zoZCdljIxWwAITTD6BQ1YCjvi9hVEqj7P6uIqUm9a8PSfq8qr1on5gWZBZB8hVQchI9mhbjNxWZCtTchxeZAcOLMLGKINZCTZC0oshc6slAHhdGBsFACtuXl7ZBgZDZD', // optional
        ]);
        try {
            // Requires the "read_stream" permission
            $response = $fb->get('/' . Voyager::setting('facebook_page_id') . '/posts?fields=id,story,message,picture,type&limit=8');
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }

        $feedEdge = $response->getGraphEdge();
        $feedEdge = collect(json_decode($feedEdge));
        return $feedEdge->where('message',!null)->take(5);
    }

    public function getProductModal(Request $request, $id)
    {
        $product = Product::find($id);
        if ($request->ajax()) {
            return Response::json(view('partials.product', compact('product'))->render());
        }
        return view('partials.product', compact('product'));
    }

    public function getCategoryProducts(Request $request, $id)
    {
        if($id == 0) {
            $products = Product::orderBy('updated_at','desc')->paginate(9);
        }else {
            $cat = Category::find($id);

            if ($cat->parent != null) {
                $products = $cat->products()->paginate(9);
            } else {
                $ids = $cat->products()->pluck('id');
                $ids = $ids->merge($cat->allProducts()->pluck('products.id'));
                $products = Product::whereIn('id', $ids)->paginate(9);
            }
        }

        $products->setPath($request->segment(1).'/category_products/'.$id);

        if ($request->ajax()) {
            return Response::json(view('partials.products', compact('products'))->render());
        }
        return view('partials.products', compact('products'));
    }

    public function getSubCategories(Request $request, $id)
    {
        if($id == 0){
            $subCategories = Category::where('parent_id',!null)->get();
        }else {
            $subCategories = Category::find($id)->children;
        }

        if ($request->ajax()) {
            return Response::json(view('partials.categories', compact('id', 'subCategories'))->render());
        }
        return view('partials.categories', compact('id', 'subCategories'));
    }

    public function getProject(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        return view('partials.project', compact('project'));
    }

    public function getProjects(Request $request)
    {
        $projects = App\Project::orderBy('updated_at')->paginate(5);

        $projects->setPath($request->segment(1).'/projects');

        if ($request->ajax()) {
            return Response::json(view('partials.projects', compact('projects'))->render());
        }
        return view('partials.projects', compact('projects'));
    }

    public function postContactUs(Request $request)
    {

        $validator = \Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect('/#contact')
                ->withErrors($validator)
                ->withInput();
        }

        Message::create($request->all());

        return redirect()
            ->route("home")
            ->with([
                'message' => "Successfully Sent",
                'alert-type' => 'success',
            ]);
    }


}
