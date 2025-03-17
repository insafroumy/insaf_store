<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(Request $request){
        //$products =  Product::take(3)->get();
        $products =  Product::all();
        $categories = Category::all();
        $produ =  Product::when($request->category, function($query , $id){
            return $query->where('category_id', $id);
        })->get();

        return view('home.index', compact('products','categories','produ'));
    }
}
