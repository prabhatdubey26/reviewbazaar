<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Review;


class ReviewController extends Controller
{

    public function review($slug)
    {
      $company = Company::where(['website_url'=>$slug, 'status'=>'active'])->first();
      if(!empty($company)){
         return view('frontend.review', compact('company'));
      }
      abort(404);
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'company_id' => 'required|integer',
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:20',
            'review' => 'nullable|string|max:1000',
            'comment' => 'nullable|string|max:1000',
        ]);
    
        // Create the review using mass-assignment
        $review = Review::create($validated);
    
        // Return a response or redirect
        return redirect()->back()->with('success', 'Review submitted successfully.');
    }
    
}
