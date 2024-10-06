<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Http\Requests\StoreBlogRequest;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
       $blogs = Blog::paginate(10);
       return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        $categories = Category::where(['status'=>'active'])->get();
       return view('admin.blog.create', compact('categories'));
    }

    public function show($slug)
    {
       $blog = Blog::where(['slug'=>$slug])->with('category')->first();
       if($blog){
            $recentBlogs = Blog::latest()->take(3)->get();
            return view('frontend.blog.details', compact('blog','recentBlogs'));
       }
       else{
        abort(404);
       }
       
    }

    public function store(StoreBlogRequest $request)
    {
       
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->category_id = $request->category;
        $blog->slug = $request->title;
        $blog->description = $request->description;
        $blog->meta_title = $request->meta_title;  
        $blog->meta_description = $request->meta_description;
        $blog->meta_key = $request->meta_key;  
        
        // Handle the image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $destinationPath = public_path('images/blog');
            $image->move($destinationPath, $imageName);
            $blog->image = $imageName; 
        }
    
        $blog->status = $request->status ?? 'active';
        $blog->save();
    
        return redirect()->route('blog.index')->with('success', 'Blog created successfully!');
    }


    public function edit(Blog $blog)
    {
        $categories = Category::where(['status'=>'active'])->get();
        return view('admin.blog.edit', compact('categories','blog'));
    }

    public function update(StoreBlogRequest $request, Blog $blog)
    {
       $blog->title = $request->title;
       $blog->status = $request->status;
       $blog->description = $request->description;
       $blog->slug = $request->title; 
       $blog->category_id = $request->category ?? '0';
       $blog->meta_title = $request->meta_title;  
       $blog->meta_description = $request->meta_description;
       $blog->meta_key = $request->meta_key;  
        
        if ($request->hasFile('image')) {
            // Remove old image if it exists
            if ($blog->image) {
                $oldImagePath = public_path('images/blog/' .$blog->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('images/blog');
            $image->move($destinationPath, $imageName);
           $blog->image = $imageName;
        }
        
       $blog->save();

        return redirect()->route('blog.index')->with('success', 'Category updated successfully!');
    }

    public function destroy(Category $category)
    {
        if ($category->image) {
            $oldImagePath = public_path('images/blog/'.$category->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }
        $category->delete();
        return redirect()->route('blog.index')->with('success', 'Category deleted successfully!');
    }
}
