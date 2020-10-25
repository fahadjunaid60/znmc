<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use DB;
use validator;

class BrandController extends Controller
{

    public function index()
    {

        $brands = DB::table('brands')->join('categories', 'categories.id', '=', 'brands.category_id')
        ->select([DB::raw("categories.name  AS category, brands.name as name,  brands.id AS id, brands.created_at AS created_at")])
        ->get();
        return view('pages.brand.index', compact('brands'));
    }


    public function create()
    {
        $categories = Category::select(['id','name'])->get();
        return view('pages.brand.create',compact('categories'));
    }

    public function store(Request $request)
    {

        $brand = new Brand();
        $brand->name = $request->input('name');
        $brand->description = $request->input('description');
        $brand->category_id = $request->input('category');
        //upload file
        $destination_path = 'public/images/brand';
        $image = $request->file('image');
        $image_name = $image->getClientOriginalName();
        $path = $request->file('image')->storeAs($destination_path, $image_name);
        $brand->image = $image_name;
        $brand->save();



        if($request->input('stay') == "on"){
            return redirect()->back()->with(['success' => 'Brand successfully created']);
        }
        else
        {
            return redirect()->to('/products')->with(['success' => 'Brand successfully created']);
        }
    }
}
