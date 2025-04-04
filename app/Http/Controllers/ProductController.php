<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(){
        $this -> middleware('auth');
    }
    public function index(){
        $products = Product::paginate(3);
        return view('admin.products.index', compact('products'));
    }

    public function create(){
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request){
        $product = new Product;

        $product -> name = $request -> name;
        $product -> quantity = $request -> quantity;
        $product -> price = $request -> price;
        $product -> category_id = $request -> category;
        $product -> description = $request -> description;

        $product -> save();
        return redirect()->back();
    }

    public function edit($id){
        $product = Product::find($id);
        $categories = Category::all();
        //$category_name = Category::where('id', $product->category_id)->first();
        $category_name = Category::find( $product->category_id);
        return view('admin.products.edit', compact('product','categories','category_name' ));
    }

    public function update(Request $request,$id){
        $product =  Product::find($id);

        $product -> name = $request -> name;
        $product -> quantity = $request -> quantity;
        $product -> price = $request -> price;
        $product -> category_id = $request -> category;
        $product -> description = $request -> description;

        $product -> save();
        return redirect('products');
    }

    public function destroy($id){
        Product::find($id)->delete();
        return redirect()->back();
    }
}
