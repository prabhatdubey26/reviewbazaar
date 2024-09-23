<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Category;
use App\Http\Requests\StoreCompanyRequest;


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

    public function store(StoreCompanyRequest $request)
    {
        $company = new Company($request->validated());

        // Handle the logo upload
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = time() . '_' . $logo->getClientOriginalName();
            $destinationPath = public_path('logos'); 
            $logo->move($destinationPath, $logoName); 
            $company->logo = $logoName;
        }

        if ($request->has('categories')) {
            $company->category = implode(',', $request->categories);
        }

        $company->save();
        return redirect()->route('company.index')->with('success', 'Company created successfully.');
    }

    public function edit(Company $company)
    {
        
        $categories = Category::get();
        return view('admin.company.edit', compact('company', 'categories'));
    }

    public function update(StoreCompanyRequest $request, Company $company)
{
    // Update company properties with validated request data
    $company->fill($request->validated());

    // Handle the logo upload
    if ($request->hasFile('logo')) {
        // Optionally delete the old logo if you want to manage storage
        if ($company->logo) {
            $oldLogoPath = public_path('logos/' . $company->logo);
            if (file_exists($oldLogoPath)) {
                unlink($oldLogoPath);
            }
        }

        $logo = $request->file('logo');
        $logoName = time() . '_' . $logo->getClientOriginalName();
        $destinationPath = public_path('logos'); 
        $logo->move($destinationPath, $logoName); 
        $company->logo = $logoName;
    }

    // Update categories
    if ($request->has('categories')) {
        $company->category = implode(',', $request->categories);
    }

    $company->save();
    return redirect()->route('company.index')->with('success', 'Company updated successfully.');
}


     // Destroy method
     public function destroy(Company $company)
     {
         if ($company->logo) {
             $oldImagePath = public_path('logos/'.$company->logo);
             if (file_exists($oldImagePath)) {
                 unlink($oldImagePath); // Remove the logo
             }
         }
         $company->delete();
         return redirect()->route('company.index')->with('success', 'Company deleted successfully!');
     }

    
}
