<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Category;
use App\Models\Company;
use App\Models\Blog;
use App\Models\User;



class HomeController extends Controller
{
    public function index()
    {
       $blogs = Blog::latest()->where(['status'=> 'active'])->take(4)->get();
       $companies = Company::where('status', 'active')
       ->withAvg('reviews', 'review')  // Calculate the average review score for each company
       ->having('reviews_avg_review', '>', 3)  // Only include companies with avg rating > 3
       ->orderBy('reviews_avg_review','desc')
       ->take(8) 
       ->get();

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

    public function profile()
    {
       $user = User::where('id', Auth()->user()->id)->first();
       return view('frontend.profile', compact('user'));
    }

    public function category()
    {
       return view('frontend.category');
    }

    public function subCategory(Request $request, $slug)
    {
      $category = Category::where('slug',$slug)->first();
      if(!$category) {
        abort(404);
      }
      $query = Category::where('is_parent', $category->id);
      
      if ($request->has('name')) {
         $query->where('name', 'like', '%' . $request->query('name') . '%');
      }
      $subCategories = $query->paginate(20);
      if ($subCategories->isEmpty()) {
         return redirect('categories/' . $category->slug);
      }
       return view('frontend.sub-category', compact('subCategories'));
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
