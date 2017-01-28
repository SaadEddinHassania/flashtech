<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
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

        return view('home',compact('mainCategories','products'));
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
        $products='';

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
