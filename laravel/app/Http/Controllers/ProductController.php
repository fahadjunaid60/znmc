<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Validator;
use DB;
use Image;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $products = DB::table('products')
         ->join('categories', 'products.category_id', '=', 'categories.id')
         ->join('brands', 'products.brand_id','=','brands.id')
         ->select([DB::raw("categories.name  AS category, brands.name as brand,  products.id AS id, products.created_at AS created_at, products.description as description, products.name as name")])
        ->get();

        return view('pages.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::select(['id','name'])->get();
        $categories = Category::select(['id','name'])->get();
        return view('pages.product.create', compact('brands', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Validator::make($request->all(), [
            'productName' => 'required|unique:products,name,' . $request->input('name'),
            'description' => 'required',
            'file' => 'mimes:jpeg,bmp,png,gif,jpg'
        ])->validate();

        $product = new Product();
        $product->category_id = $request->input('category');
        $product->brand_id = $request->input('brand');
        $product->name = $request->input('productName');
        $product->description = $request->input('description');
        //upload file
        $destination_path = 'public/images/products';
        $image = $request->file('file');
        $image_name = $image->getClientOriginalName();
        $path = $request->file('file')->storeAs($destination_path, $image_name);
        $product->image = $image_name;
        //$filename = time() . '.' . $request->file('file')->extension();
        //$product->image = $request->file('file')->storeAs('/public/uploads/product_images', $filename);
        //Image::make($request->file('file')->getRealPath())->resize(600, 600);

        $product->save();
        if($request->input('stay') == "on"){
            return redirect()->back()->with(['success' => 'Product successfully created']);
        }
        else
        {
            return redirect()->to('/products')->with(['success' => 'Product successfully created']);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brands = Brand::select(['id','name'])->get();
        $categories = Category::select(['id','name'])->get();
        $product = Product::where('id',$id)->get()->first();
        return view('pages.product.edit', compact('brands', 'categories','id','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        if($request->file('image'))
        {
            $destination_path = 'public/images/products';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);
            $request["image"] = $image_name;
        }


        Product::where('id', $id)->update([
            'category_id' => $request->input('category_id'),
            'brand_id'    => $request->input('brand_id'),
            'name'        =>$request->input('name'),
            'description' =>$request->input('description'),
            'image'        => $request->input('image')
        ]);

        if($request->input('stay') == "on"){
            return redirect()->back()->with(['success' => 'Product successfully updated']);
        }
        else
        {
            return redirect()->to('/products')->with(['success' => 'Product successfully updated']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->back()->with(['success' => 'Product successfully deleted']);
    }
}
