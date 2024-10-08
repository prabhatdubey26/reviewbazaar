<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Category;
use App\Models\Company;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



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
       $newCompanies = Company::where('status', 'active')->latest()->take(8)->get();
       return view('frontend.index', compact('companies','blogs','newCompanies'));
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

   public function updateProfile(Request $request)
   {
      $user = Auth::user();
      $request->validate([
         'name' => 'required|string|max:255',
         'phone' => 'nullable|string|max:15',
         'email' => 'required|email|max:255',
         'business' => 'nullable|string|max:255',
         'address' => 'nullable|string|max:255',
         'profile' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
      ]);

      $user->name = $request->name;
      $user->phone = $request->phone;
      $user->email = $request->email;
      $user->business = $request->business;
      $user->address = $request->address;

      if ($request->hasFile('profile')) {
         if ($user->profile_picture) {
             $oldImagePath = public_path('images/profile/' . $user->profile_picture);
             if (file_exists($oldImagePath)) {
                 unlink($oldImagePath);
             }
         }
         $image = $request->file('profile');
         $imageName = time() . '.' . $image->getClientOriginalExtension();
         $destinationPath = public_path('images/profile');
         $image->move($destinationPath, $imageName);
         $user->profile = $imageName; 
     }

      $user->save();

      return redirect()->back()->with('success', 'Profile updated successfully!');
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
