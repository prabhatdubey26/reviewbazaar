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
                <li><a href="/">Home</a></li>
                <li><a href="{{ url('sub-category',$category->parent->slug) }}">{{ $category->parent->name ??'' }}</a></li>
                <li>{{ $category->name }}</li>
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
         {{--  <div class="bg-white p-4 rounded-3">
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
          </div> --}}
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
                <form action="" class="fromsa">
                    <div class="p-1 bg-white rounded rounded-pill shadow-sm">
                        <div class="input-group">
                            <input type="search" placeholder="Searching Company" aria-describedby="button-addon1" class="form-control border-0 bg-white" name="search" value="{{request()->query('search')}}">
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
                                <div class="d-flex align-items-center mb-2">
                                  <div id="full-stars-example-two">
                                     <div class="rating-group">
                                        <input disabled="" checked="" class="rating__input rating__input--none" name="rating3" id="rating3-none" value="0" type="radio">
                                        <label aria-label="1 star" class="rating__label" for="rating3-1"><i class="rating__icon rating__icon--star flaticon-star"></i></label>
                                        <input class="rating__input" name="rating3" id="rating3-1" value="1" type="radio">
                                        <label aria-label="2 stars" class="rating__label" for="rating3-2"><i class="rating__icon rating__icon--star flaticon-star"></i></label>
                                        <input class="rating__input" name="rating3" id="rating3-2" value="2" type="radio">
                                        <label aria-label="3 stars" class="rating__label" for="rating3-3"><i class="rating__icon rating__icon--star flaticon-star"></i></label>
                                        <input class="rating__input" name="rating3" id="rating3-3" value="3" type="radio">
                                        <label aria-label="4 stars" class="rating__label" for="rating3-4"><i class="rating__icon rating__icon--star flaticon-star"></i></label>
                                        <input class="rating__input" name="rating3" id="rating3-4" value="4" type="radio">
                                        <label aria-label="5 stars" class="rating__label" for="rating3-5"><i class="rating__icon rating__icon--star flaticon-star"></i></label>
                                        <input class="rating__input" name="rating3" id="rating3-5" value="5" type="radio">
                                      </div>
                                    </div>
                                  <ul class="ms-4 mb-0 d-flex">
                                    <li><a href="#"><i class="flaticon-visibility me-1"></i><span class="ps-2"> 27,497 reviews</span></a></li>
                                    <li><a href="#"><i class="flaticon-telephone fs-6"></i> <span class="ps-2">{{ $company->phone }}</span></a></li>
                                  </ul>
                                 </div>
                                 <p><i class="flaticon-pin"></i> {{$company->city}}, {{$company->country}}</p>
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
            <div class="d-flex justify-content-center mt-4">
              {{ $companies->links('pagination::bootstrap-4') }}
            </div>
        </div>
        
      </div>
    </div>
  </section>
  
@endsection