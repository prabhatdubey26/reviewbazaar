<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use App\Models\Company;
use App\Models\Blog;
use DB;


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

    public function show(Request $request, $slug)
{
    $category = Category::where('slug', $slug)->with('companies')->first();

    if ($category) {
        $companies = Company::whereRaw("FIND_IN_SET(?, category)", [$category->id]);

        if ($request->query('search')) {
            $companies->where('name', 'like', '%' . $request->query('search') . '%');
        }
        $companies = $companies->paginate(20);
        
        $relatedCategories = Category::where('is_parent', $category->is_parent)
            ->where('id', '!=', $category->id)
            ->get();

        return view('frontend.category.details', compact('category', 'companies', 'relatedCategories'));
    } else {
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
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $destinationPath = public_path('images/category');
            $image->move($destinationPath, $imageName);
            $category->image = $imageName; 
        }
    
        // $category->is_parent = $request->category ?? 0;
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
        $category->slug = $request->name; 
        // $category->is_parent = $request->category ?? 0;
        
        if ($request->hasFile('image')) {
            if ($category->image) {
                $oldImagePath = public_path('images/category/' . $category->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            // Store new image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('images/category');
            $image->move($destinationPath, $imageName);
            $category->image = $imageName;
        }
        
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Category updated successfully!');
    }


    public function destroy(Category $category)
    {
        DB::transaction(function() use ($category) {
            $companies = Company::whereRaw("FIND_IN_SET(?, category)", [$category->id])->get();
    
            foreach ($companies as $company) {

                $categoryIds = explode(',', $company->category);
                $updatedCategoryIds = array_filter($categoryIds, function($id) use ($category) {
                    return trim($id) != $category->id; 
                });
    
                $newCategoryIds = implode(',', $updatedCategoryIds);
    
                $company->update(['category' => $newCategoryIds]);
            }
    
            if ($category->image) {
                $oldImagePath = public_path('images/category/' . $category->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath); 
                }
            }
    
            Blog::where('category_id', $category->id)->delete();
    
            $category->delete();
        });
    
        // Redirect back with a success message
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully!');
    }
    
}
