<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Category;
use App\Models\News;
use App\Models\Product;
use Facebook\Facebook;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use TCG\Voyager\Facades\Voyager;

class HomeController extends Controller
{
    public function index(){

//        return Voyager::image( Product::find(1)->image ) ;
        $mainCategories = Category::with('children')->where('parent_id','=',null)->get();
        $products = [];
        if($mainCategories->first()) {
            $cat = $mainCategories->first();

            $ids=$cat->products()->pluck('id');
            $ids=$ids->merge($cat->allProducts()->pluck('products.id'));
            $products = Product::whereIn('id',$ids)->paginate(6);
        }
        $news = News::orderBy('id', 'desc')->take(3)->get();

        $feeds = $this->getFacebookFeeds();
//        foreach ($feeds as $feed){
//            return $feed->full_picture;
//        }
        return view('home',compact('mainCategories','products','news','feeds'));
    }

    public function getFacebookFeeds(){
        $appID = Voyager::setting('app_id');
        $appSecret = Voyager::setting('app_secret');

        $fb = new \Facebook\Facebook([
            'app_id' => $appID,
            'app_secret' => $appSecret,
            'default_graph_version' => 'v2.8',
            'default_access_token' => $appID . '|' . $appSecret, // optional
        ]);
        try {
            // Requires the "read_stream" permission
            $response = $fb->get('/'.Voyager::setting('facebook_page_id').'/feed?fields=id,story,message,full_picture&limit=5');
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
        $feedEdge = json_decode($feedEdge);
        return $feedEdge;
    }

    public function getProductModal(Request $request,$id){
        $product = Product::find($id);
        if ($request->ajax()) {
            return Response::json(view('partials.product', compact('product'))->render());
        }
        return view('partials.product', compact('product'));
    }

    public function getCategoryProducts(Request $request,$id){
        $cat = Category::find($id);
//        $products='';

        if($cat->parent !=null){
            $products = $cat->products()->paginate(6);
        }else {
            $ids=$cat->products()->pluck('id');
            $ids=$ids->merge($cat->allProducts()->pluck('products.id'));
            $products = Product::whereIn('id',$ids)->paginate(6);
        }
        if ($request->ajax()) {
            return Response::json(view('partials.products', compact('products'))->render());
        }
        return view('partials.products', compact('products'));
    }

    public function getSubCategories(Request $request,$id){
        $subCategories = Category::find($id)->children;
        if ($request->ajax()) {
            return Response::json(view('partials.categories', compact('id','subCategories'))->render());
        }
        return view('partials.categories', compact('id','subCategories'));
    }


    public function postContactUs(Request $request){

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
                'message'    => "Successfully Sent",
                'alert-type' => 'success',
            ]);
    }


}
