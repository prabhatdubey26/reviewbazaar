<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Category;
use App\Models\Company;
use App\Models\Blog;



class HomeController extends Controller
{
    public function index()
    {
       $blogs = Blog::latest()->where(['status'=> 'active'])->take(4)->get();
       $companies = Company::where(['status'=> 'active'])->latest()->get();
       return view('frontend.index', compact('companies','blogs'));
    }

    public function blog()
    {   
       $blogs = Blog::latest()->where(['status'=> 'active'])->take(6)->get();
       $categories = Category::latest()->where(['status'=> 'active'])->take(6)->get();
       $recentBlogs = Blog::latest()->where(['status'=> 'active'])->take(3)->get();
       return view('frontend.blog.index', compact('blogs','categories','recentBlogs'));
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
