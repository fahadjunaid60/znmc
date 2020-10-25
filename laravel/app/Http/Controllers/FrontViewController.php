<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;

class FrontViewController extends Controller
{

    public function index()
    {
         $categories = Category::select(['id','name','description','img'])->get();
          return view('welcome', compact('categories'));
    }

    public function allProducts()
    {

        $categories = Category::select(['id','name'])->get();
        $brands = Brand::select(['id','name'])->get();
        $products = Product::select(['name','description','image'])
        ->where('category_id', 1)
        ->where('brand_id', 1)
        ->get();
        return view('all-products', compact('categories','brands','products'));
    }
}
