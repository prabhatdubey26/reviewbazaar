<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Review;
use App\Http\Requests\StoreReviewRequest;


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

    public function store(StoreReviewRequest $request)
    {
        $review = Review::create($request->all());
        $company = Company::where('id',$request->company_id)->first();
        $companyUrl = 'company/'.$company->website_url;
        return redirect($companyUrl)->with('success', 'Review submitted successfully.');
    }
    
}
