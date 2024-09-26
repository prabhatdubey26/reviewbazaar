<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Category;
use App\Models\Company;



class HomeController extends Controller
{
    public function index()
    {
       $categories = Category::latest()->get();
       $companies = Company::latest()->get();

       return view('frontend.index', compact('companies'));
    }

    public function signup()
    {
       return view('frontend.signup');
    }

    public function login()
    {
       return view('frontend.login');
    }

    public function page($slug)
    {
       $page = Page::where(['slug'=>$slug, 'status'=>'active'])->first();
       if(!empty($page)){
         return view('frontend.page', compact('page'));
       }
       abort(404);
    }

}
