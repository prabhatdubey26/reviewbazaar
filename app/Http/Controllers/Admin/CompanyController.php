<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Category;


use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
       $companies = Company::latest()->paginate(10);
       return view('admin.company.index', compact('companies'));
    }

    public function create()
    {
        $categories = Category::get();
       return view('admin.company.create', compact('categories'));
    }
}
