<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;

class HomeController extends Controller
{
    public function index(){

//        return Voyager::image( Product::find(1)->image ) ;
        $categories = Category::with('children')->where('parent_id','=',null)->get();
        $products = Product::all();

        return view('home',compact('categories','products'));
    }
}
