<?php

namespace App\Http\Controllers;

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
        $products = $mainCategories->first()->children[0]->products()->paginate(6);
        $news = News::orderBy('id', 'desc')->take(3)->get();

        $feeds = $this->getFacebookFeeds();
        return view('home',compact('mainCategories','products','news','feeds'));
    }

    public function getFacebookFeeds(){
        $fb = new Facebook([
            'app_id' => '1811543022426737',
            'app_secret' => '8eecda49d368724121d3683a63780fb1',
            'default_graph_version' => 'v2.8',
            'default_access_token' => 'EAAZAvlrpY2nEBALejeQFXnx0Uiex6sXPVbZADaTIry5i5M9bi1KN1jXMxWBu0senLHKVlN7hhNA3QP1s7RCMvZC9ttUE2mLCI9dUwIJJH7Gm9Ryhfgee1GGzsrR7xjC172K9NnmJXAlDqdAVtLvcAHBIEPgFZA6aZAOtM3vUGle9cG8Q9SkAB', // optional
        ]);
        try {
            // Requires the "read_stream" permission
            $response = $fb->get('/me/feed?fields=message,full_picture,id&limit=5');
        } catch(\Facebook\Exceptions\FacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(\Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }

        $feedEdge = $response->getGraphEdge();

        return json_decode($feedEdge);
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

}
