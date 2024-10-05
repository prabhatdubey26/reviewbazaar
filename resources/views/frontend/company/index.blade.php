@extends('frontend.inc.layout')

@section('content')

<section class="hero-banner-inner">
    <div class="container">
      <div class="row align-items-cneter justify-content-center pt-5">
        <div class="col-md-7">
            <div class="heading-wrapper">
              <div class="text-center text-white">
                <h1 class="fw-semibold px-4 px-lg-0 fs-4 text-uppercase text-white">Company Details</h1>
                <p>Compare the best companies in this category</p>
              </div> 
             </div>
             <div class="navbars pt-4">
              <ul>
                <li><a href="/">Home</a></li>
                <li><a href="#">Company Details</a></li>
              </ul>
             </div>
        </div> 
      </div>
    </div>
  </section>
  <section class="py-6 bg-light list-wrapper detailsList">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-9">
          <div class="list-wraps bg-white p-4">
              <div class="d-lg-flex mb-3 border-bottom rounded-3 pb-4">
                  <div class="list-style1">
                    @if($company->logo && file_exists(public_path('logos/' . $company->logo)))
                    <img class="img-fluid" src="{{ asset('logos/' . $company->logo) }}" alt="{{ $company->website_url }}">
                    @else
                    <img class="img-fluid" src="{{ asset('assets/images/company/1.png')}}" alt="{{ $company->website_url }}">
                    @endif
                  </div>
                  <div class="list-style1 ps-lg-5 d-lg-flex align-items-start justify-content-between w-100">
                      <div class="box-styles">
                          <p><a class="text-decoration-none fs-5 text-dark" href="#">{{$company->name}}</a></p>
                          <ul class="mb-2">
                              <li><a href="#"><i class="flaticon-rate  me-1"></i> Rating score 4.9</a></li>
                              <li><a href="#"><i class="flaticon-visibility me-1"></i> 27,497 reviews</a></li>
                          </ul>
                      </div>
                      <a class="btn btn-light" href="#"><span class="btn-title">{{ $company->website_url }}</span></a>
                  </div>
              </div>
  
              <div class="rounded-3 border-bottom p-md-4">
                      <div class="d-flex justify-content-between">
                          <div class="d-flex align-items-center">
                              <div class="user-icons">
                                  BM
                              </div>
                              <div class="ps-3">
                                @if(Auth::user())
                                  <h6 class="mb-0"><a class="text-decoration-none" href="{{ url('review', $company->slug) }}">Write a review</a></h6>
                                @else
                                <h6 class="mb-0"><a class="text-decoration-none" href="{{ url('login') }}">Write a review</a></h6>
                                @endif
                                </div>
                          </div>
                          <div id="full-stars-example-two">
                              <div class="rating-group">
                                  <input disabled checked class="rating__input rating__input--none" name="rating3" id="rating3-none" value="0" type="radio">
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
                      </div>
                  </div>
              <div class="bg-white p-md-4 rounded-3">
                  <div class="rounded-3 border-bottom pb-4">
                      <div class="d-flex justify-content-between">
                          <div class="d-flex align-items-center">
                              <div class="user-icons">
                                  BM
                              </div>
                              <div class="ps-3">
                                  <h6 class="mb-0">Bronislava Mynbaeva</h6>
                                  <small>1 Review</small>
                              </div>
                          </div>
                          <div>
                              <small class="mb-0">12 hours ago</small>
                          </div>
                      </div>
                  </div>
                  <div class="pt-4">
                      <h6>I communicated with two agents</h6>
                      <p class="mb-0">I communicated with two agents, Jason and Shana. Jason was on chat; clearly and professionally he explained the company's policy and answered our general questions. When we asked more detailed questions, he recommended to talk over the phone with Shana, and it was a good advice. Shana spent some time to go over the insurance policy, explaining its benefits and limitations. Eventually, she helped us to purchase the policy that most fits our requirements and conditions. Thank you both, Jason and Shana!</p>
                  </div>
                 
              </div> 
          </div> 
           
        </div>
        <div class="col-md-3">
          {{-- <div class="bg-white p-4 rounded-3">
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
          <div class="bg-white p-4 rounded-3 ">
            <h5 class="mb-4">{{ $company->website_url }}</h5>
            @if($company->logo && file_exists(public_path('logos/' . $company->logo)))
            <img class="img-fluid rounded-3 border p-2 bg-light" src="{{ asset('logos/' . $company->logo) }}" alt="{{ $company->website_url }}">
            @else
            <img class="img-fluid rounded-3 border p-2 bg-light" src="{{ asset('assets/images/company/1.png')}}" alt="{{ $company->website_url }}">
            @endif
            <div class="pt-3">
                <h6>Contact</h6>
                <p>
                    <svg viewBox="0 0 16 16" fill="inherit" class="icon_icon__ECGRl icon_appearance-subtle__9l3Sf" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.882 1.258a7 7 0 1 0 1.385 12.933l.466.884A8 8 0 1 1 16 8.01c0 2.437-1.16 3.793-2.558 3.982a2.341 2.341 0 0 1-2.53-1.532 4 4 0 1 1-.162-5.097v-.854h1v5c0 1.055.79 1.596 1.558 1.492.727-.098 1.692-.855 1.692-2.992a7 7 0 0 0-5.118-6.75Zm.868 6.75a3 3 0 1 0-6 0 3 3 0 0 0 6 0Z"></path>
                    </svg> 
                    {{ $company->email }} 
                </p>
                <p>
                    <svg viewBox="0 0 16 16" fill="inherit" class="icon_icon__ECGRl icon_appearance-subtle__9l3Sf" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px">
                        <g clip-path="url(#a)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="m4.622.933.04.057.003.006L6.37 3.604l.002.003a1.7 1.7 0 0 1-.442 2.29l-.036.029c-.392.325-.627.519-.652.85-.026.364.206 1.09 1.562 2.445 1.356 1.357 2.073 1.58 2.426 1.55.318-.027.503-.252.816-.632l.057-.069a1.7 1.7 0 0 1 2.29-.442l.003.002 2.608 1.705.006.004c.204.141.454.37.649.645.188.267.376.655.31 1.09-.031.213-.147.495-.305.774a4.534 4.534 0 0 1-.715.941C14.323 15.422 13.377 16 12.1 16c-1.236 0-2.569-.483-3.877-1.246-1.315-.768-2.642-1.84-3.877-3.075C3.112 10.444 2.033 9.118 1.26 7.8.49 6.49 0 5.15 0 3.9c0-1.274.52-2.215 1.144-2.845C1.751.442 2.478.098 2.954.03c.507-.072.896.088 1.182.327.224.187.387.43.486.576Zm-1.127.191a.46.46 0 0 0-.4-.104c-.223.032-.758.25-1.24.738C1.393 2.227 1 2.924 1 3.9c0 1.001.398 2.161 1.122 3.394.72 1.226 1.74 2.486 2.932 3.678 1.19 1.19 2.45 2.204 3.673 2.918 1.23.718 2.384 1.11 3.373 1.11.949 0 1.652-.422 2.138-.914.245-.247.43-.508.556-.73.134-.237.181-.393.186-.43.01-.065-.014-.19-.139-.366a1.737 1.737 0 0 0-.396-.396l-2.59-1.693a.7.7 0 0 0-.946.19l-.011.017-.013.016-.08.098c-.261.33-.723.91-1.491.975-.841.07-1.85-.47-3.218-1.838-1.369-1.37-1.912-2.381-1.85-3.225.056-.783.638-1.25.97-1.517l.09-.072.016-.013.016-.011a.7.7 0 0 0 .191-.946l-1.694-2.59-.051-.076c-.104-.152-.182-.265-.29-.355Z"></path>
                        </g>
                        <defs>
                            <clipPath id="a">
                                <path d="M0 0h16v16H0z"></path>
                            </clipPath>
                        </defs>
                    </svg>
                    {{ $company->phone }} 
                </p>
                <p>
                    <svg viewBox="0 0 16 16" fill="inherit" class="icon_icon__ECGRl icon_appearance-subtle__9l3Sf" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.404 1.904A6.5 6.5 0 0 1 14.5 6.5v.01c0 .194 0 .396-.029.627l-.004.03-.023.095c-.267 2.493-1.844 4.601-3.293 6.056a18.723 18.723 0 0 1-2.634 2.19 11.015 11.015 0 0 1-.234.154l-.013.01-.004.002h-.002L8 15.25l-.261.426h-.002l-.004-.003-.014-.009a13.842 13.842 0 0 1-.233-.152 18.388 18.388 0 0 1-2.64-2.178c-1.46-1.46-3.05-3.587-3.318-6.132l-.003-.026v-.068c-.025-.2-.025-.414-.025-.591V6.5a6.5 6.5 0 0 1 1.904-4.596ZM8 15.25l-.261.427.263.16.262-.162L8 15.25Zm-.002-.598a17.736 17.736 0 0 0 2.444-2.04c1.4-1.405 2.79-3.322 3.01-5.488l.004-.035.026-.105c.018-.153.018-.293.018-.484a5.5 5.5 0 0 0-11 0c0 .21.001.371.02.504l.005.035v.084c.24 2.195 1.632 4.109 3.029 5.505a17.389 17.389 0 0 0 2.444 2.024Z"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5ZM4.5 6.5a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0Z"></path>
                    </svg>
                    {{ $company->country }} 
                </p>
                
            </div>
             <div class="pt-3">
             <h6>
                @foreach($company->category_names as $category)
                <a href="#" class="btn btn-light btn-sm rounded-pill me-2">{{ $category }}</a>
            @endforeach
             </h6>
             <p>{{ $company->about }} </p>
             </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @endsection