<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::select(['id','name','description','created_at'])->get();
        return view('pages.category', compact('categories'));
    }
}
