@extends('frontend.inc.layout')

@section('content')
<section class="hero-banner-inner">
  
    <div class="container">
      <div class="row align-items-cneter justify-content-center pt-5">
        <div class="col-md-7">
            <div class="heading-wrapper">
              <div class="text-center text-white">
                <h1 class="fw-semibold px-4 px-lg-0 fs-4 text-uppercase text-white">Best in {{$category->name}} Company</h1>
                <p>Compare the best companies in this category</p>
              </div> 
              
             </div>
             <div class="navbars pt-4">
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Category</a></li>
                <li>Company List</li>
              </ul>
             </div>
        </div> 
      </div>
    </div>
  </section>
  <section class="py-6 bg-light list-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md">
          <div class="bg-white p-4 rounded-3">
           <form action='' metthod='POST'>
            <h5 class="mb-4">Location</h5>
              <select class="form-select" aria-label="Default select example">
                <option selected>United States</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
               <div class="mt-3">
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="City or Zip Code">
               </div>
           </form>
          </div>
          <div class="bg-white p-4 rounded-3 mt-4">
            <h5 class="mb-4">Related categories</h5>
             <ul class="categories">
                @foreach($relatedCategories as $category)
                <li><a href="{{ url('categories', $category->slug) }}"><span>{{ $category->name }}</span> <span>38</span></a></li>
                @endforeach
             </ul>
          </div>
        </div>
        <div class="col-md-9">
            <div class="d-flex align-items-center justify-content-between pb-4">
                <a class="text-decoration-none text-dark" href="#">1-20 of {{ $companies->total() }} results</a>
                <form action="{{ url('categories', $category->slug) }}" class="fromsa">
                    <div class="p-1 bg-white rounded rounded-pill shadow-sm">
                        <div class="input-group">
                            <input type="search" placeholder="Searching Company" aria-describedby="button-addon1" class="form-control border-0 bg-white" name="search">
                            <div class="input-group-append">
                                <button id="button-addon1" type="submit" class="btn btn-link text-primary">
                                    <img src="{{ asset('assets/images/icons/search-interface-symbol.png')}}" width="20px" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            @if($companies->isEmpty())
                <div class="no-companies bg-white p-4 rounded-3 text-center mb-3">
                    <p class="fs-5 text-dark">No companies found.</p>
                </div>
            @else
                @foreach($companies as $company)
                    <div class="list-wraps bg-white p-4 rounded-3 d-flex mb-3">
                        <div class="list-style1">
                          @if($company->logo && file_exists(public_path('logos/' . $company->logo)))
                          <img class="img-fluid rounded-3 border p-2 bg-light" src="{{ asset('logos/' . $company->logo) }}" alt="{{ $company->website_url }}">
                          @else
                          <img class="img-fluid rounded-3 border p-2 bg-light" src="{{ asset('assets/images/company/1.png')}}" alt="{{ $company->website_url }}">
                          @endif
                        </div>
                        <div class="list-style1 ps-5 d-flex align-items-center justify-content-between w-100">
                            <div class="box-styles">
                                <p><a class="text-decoration-none fs-5 text-dark" href="{{ url('company/'. $company->website_url) }}">{{ $company->name }}</a></p>
                                <ul class="mb-2">
                                    <li><a href="#"><i class="flaticon-rate me-1"></i> Rating score {{ $company->rating }}</a></li>
                                    <li><a href="#"><i class="flaticon-visibility me-1"></i> {{ $company->reviews_count }} reviews</a></li>
                                </ul>
                                <p>{{ $company->location }}</p>
                                <div class="btn-group">
                                 
                                    @foreach($company->category_names as $category)
                                        <a href="#" class="btn btn-light btn-sm rounded-pill me-2">{{ $category }}</a>
                                    @endforeach
                                </div>
                            </div>
                            <a class="btn btn-light" href="{{ url('company/'. $company->website_url) }}"><span class="btn-title">View Profile</span></a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        
      </div>
    </div>
  </section>
  
@endsection