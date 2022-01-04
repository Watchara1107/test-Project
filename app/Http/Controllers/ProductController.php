<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function searchProduct(Request $request){
        $name = $request->search;
        $product = Product::where('name',"LIKE","%{$name}%")->paginate(6);
        return view("searchproduct")
        ->with("product",$product)
        ->with("category",Category::all()->sortBy('name'));
    }
}
