<?php

namespace  App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StorePageRequest;
use App\Models\Page;

class PageController extends Controller
{
    public function index()
    {
       $pages = Page::latest()->paginate(10);
       return view('admin.pages.index', compact('pages'));
    }

    public function create()
    {
       return view('admin.pages.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'description' => 'nullable|string',
            'status' => 'in:active,inactive',
        ]);
    
        $page = new Page();
        $page->title = $validatedData['title'];
        $page->slug = $validatedData['title'];
        
        // Handle the image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName(); 
            $destinationPath = public_path('images/pages');
            $image->move($destinationPath, $imageName);
            $page->image = $imageName; 
        }
    
        $page->description = $validatedData['description'];
        $page->status = $validatedData['status'] ?? 'active';
        $page->save();
    
        return redirect()->route('pages.index')->with('success', 'Page created successfully!');
    }
   
   
    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    // Update method
    public function update(StorePageRequest $request, Page $page)
    {
        $page->title = $request->title;
        $page->description = $request->description;
        $page->status = $request->status;
        $page->slug = $request->title;
        if ($request->hasFile('image')) {
            if ($page->image) {
                $oldImagePath = public_path($page->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath); // Remove the old image
                }
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $destinationPath = public_path('images');
            $image->move($destinationPath, $imageName);
            $page->image =  $imageName;
        }
       
        $page->save();
        return redirect()->route('pages.index')->with('success', 'Page updated successfully!');
    }

    // Destroy method
    public function destroy(Page $page)
    {
        if ($page->image) {
            $oldImagePath = public_path('images/pages/'.$page->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath); // Remove the image
            }
        }
        $page->delete();
        return redirect()->route('pages.index')->with('success', 'Page deleted successfully!');
    }
}

