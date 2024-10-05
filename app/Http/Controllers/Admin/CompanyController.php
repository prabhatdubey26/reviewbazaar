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

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = time() . '.' . $logo->getClientOriginalExtension();
            $destinationPath = public_path('logos'); 
            $logo->move($destinationPath, $logoName); 
            $company->logo = $logoName;
        }

        if($request->website_url){
          $company->website_url =  preg_replace('#^https?://#', '', rtrim($request->website_url, '/'));
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

    public function show($url)
    {
       $company = Company::where(['website_url'=>$url])->with('reviews')->first();
       if($company){
            return view('frontend.company.index', compact('company'));
       }
       else{
        abort(404);
       }
       
    }

    public function update(StoreCompanyRequest $request, Company $company)
    {
        $company->fill($request->validated());

        if ($request->hasFile('logo')) {
            if ($company->logo) {
                $oldLogoPath = public_path('logos/' . $company->logo);
                if (file_exists($oldLogoPath)) {
                    unlink($oldLogoPath);
                }
            }

            $logo = $request->file('logo');
            $logoName = time() . '.' . $logo->getClientOriginalExtension();
            $destinationPath = public_path('logos'); 
            $logo->move($destinationPath, $logoName); 
            $company->logo = $logoName;
        }

        if($request->website_url){
            $company->website_url =  preg_replace('#^https?://#', '', rtrim($request->website_url, '/'));
        }

        if ($request->has('categories')) {
            $company->category = implode(',', $request->categories);
        }

        $company->save();
        return redirect()->route('company.index')->with('success', 'Company updated successfully.');
    }

     public function destroy(Company $company)
     {
         if ($company->logo) {
             $oldImagePath = public_path('logos/'.$company->logo);
             if (file_exists($oldImagePath)) {
                 unlink($oldImagePath); 
             }
         }
         $company->delete();
         return redirect()->route('company.index')->with('success', 'Company deleted successfully!');
     }

    
}
