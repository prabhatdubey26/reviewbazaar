<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
       $categories = Category::latest()->paginate(10);
       return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
       return view('admin.categories.create');
    }
}
