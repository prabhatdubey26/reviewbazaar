<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use App\Models\Company;


class CategoryController extends Controller
{
    public function index()
    {
       $categories = Category::latest()->with('parent')->paginate(10);
       return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
      $categories = Category::where(['is_parent'=>0])->get();
       return view('admin.categories.create', compact('categories'));
    }

    public function show($slug)
    {
       $category = Category::where(['slug'=>$slug])->with('companies')->first();
       if($category){
            $companies = Company::whereRaw("FIND_IN_SET(?, category)", [$category->id])->paginate(20);
            $realtedCategories = Category::where(['is_parent'=>$category->is_parent])->where('id', '!=', $category->id)->get();
            return view('frontend.category.details', compact('category', 'companies','realtedCategories'));
       }
       else{
        abort(404);
       }
       
    }

    public function store(StoreCategoryRequest $request)
    {
       
        $category = new Category();
        $category->name = $request->name;
        $category->slug = $request->name;
        
        // Handle the image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName(); 
            $destinationPath = public_path('images/category');
            $image->move($destinationPath, $imageName);
            $category->image = $imageName; 
        }
    
        $category->is_parent = $request->category ?? '0';
        $category->status = $request->status ?? 'active';
        $category->save();
    
        return redirect()->route('categories.index')->with('success', 'Category created successfully!');
    }


    public function edit(Category $category)
    {
        $categories = Category::where(['is_parent'=>0])->get();
        return view('admin.categories.edit', compact('category','categories'));
    }

    // Update method
    public function update(StoreCategoryRequest $request, Category $category)
{
    $category->name = $request->name;
    $category->status = $request->status;
    $category->slug = $request->name; // Ensure to use a proper slug function
    $category->is_parent = $request->category ?? '0';
    
    if ($request->hasFile('image')) {
        // Remove old image if it exists
        if ($category->image) {
            $oldImagePath = public_path('images/category/' . $category->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }

        // Store new image
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $destinationPath = public_path('images/category');
        $image->move($destinationPath, $imageName);
        $category->image = $imageName;
    }
    
    $category->save();

    return redirect()->route('categories.index')->with('success', 'Category updated successfully!');
}


    // Destroy method
    public function destroy(Category $category)
    {
        if ($category->image) {
            $oldImagePath = public_path('images/category/'.$category->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath); // Remove the image
            }
        }
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully!');
    }
}
