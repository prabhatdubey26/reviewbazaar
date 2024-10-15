@extends('frontend.inc.layout')

@section('content')
<section class="hero-banner position-relative">
  <div class="banner-img">
    <img src="{{ asset('assets/images/banner.jpg')}}" class="img-fluid" alt="">
  </div>
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-8">
        <div class="heading-wrapper text-center">
          <h1 class="fs-2 fw-semibold text-uppercase px-4 px-lg-0 text-white">Welcome To The Biggest<span class="d-md-block"> Business Directory</span></h1>
          <form action="{{ route('company.review') }}" class="fromsa">
            <div class="p-4 bg-white rounded rounded-pill shadow-sm my-4 py-2">
              <div class="d-flex align-items-center justify-content-center">
                <input type="text" placeholder="Location" `="" class="form-control border-0 bg-white" name="location">
                <input type="text" placeholder="Searching Company" class="form-control border-0 bg-white" name="name">
                <div class="input-group-append btn btn-primary h-100 rounded-pill">
                  <button id="button-addon1" type="submit" class="btn btn-link text-primary"><img src="{{ asset('assets/images/search.png')}}" width="20px" alt=""></button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div> 
    </div>
  </div>
</section>
<section class="py-5 category-wrappers bg-white">
  <div class="container">
    <div class="row row-cols-2 row-cols-sm-4 row-cols-md-6 g-3">
      @foreach($categories as $category)
      <div class="col">
          <div class="item-list align-items-center d-flex flex-column justify-content-between">
             <div class="icons-list">
                  <a href="{{ url('sub-category/'. $category->slug) }}">
                    @if($category->image && file_exists(public_path('images/category/' . $category->image)))
                    <img src="{{ asset('images/category/' . $category->image) }}" alt="">
              
                    @else
                    <img src="{{ asset('assets/images/icons/automotive.png')}}" alt="">
                    
                @endif
                  </a>
              </div>
             <a class="text-decoration-none text-dark" href="{{ url('sub-category/'. $category->slug) }}">{{$category->name??''}}</a>
          </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<section class="copmany-wrapper py-6 bg-light">
  <div class="container">
      <div class="d-flex align-items-center justify-content-between pb-5">
          <div class="title-wrap">
            <h2>Latest Business Reviews</h2>
            <p class="mb-0">Explore our Job Portal's to streamline your job search.</p>
          </div>
          <div class="d-none d-md-block">
            <a class="btn btn-primary rounded-pill btn-lg" href="{{ route('review-list') }}">See more</a>
          </div>
      </div>
    <div class="row reviews-warp">
     @foreach($reviews as $review)
      <div class="col-md-3">
        <div class="p-3 rounded-3 bg-white border">
            <div class="d-flex align-items-start">
                <div class="user-iconss bg-primary p-2 rounded-circle text-white" style="width:40px; height:40px">
                  {{ $review->user->getInitials() }}
                </div>
                <div class="ps-3">
                    <h6 class="mb-1">{{ $review->user->name }}</h6>
                    <div id="full-stars-example-two">
                      <div class="rating-group pb-2">
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= $review->review)
                                <i class="fas fa-star" style="color: orange;"></i> <!-- Filled star -->
                            @else
                                <i class="far fa-star" style="color: lightgray;"></i> <!-- Empty star -->
                            @endif
                        @endfor
                    </div>
                    </div>
                    <a class="small" href="#">{{ $review->company->website_url }}</a>
                </div>
            </div>
            <div class="pt-2">
                <p class="mb-0">{!! \Illuminate\Support\Str::limit(strip_tags($review->comment), 75, '...') !!}</p>
            </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<section class="py-5">
  <div class="container">
    <div class="text-center mb-5">
        <div class="title-wrap m-auto">
          <h2>Looking for a local business?</h2>
          <p class="mb-0">Discover the voices of success! Our candidates speak for themselves about their<span class="d-md-block"> transformative experiences</span></p>
        </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="p-4 bg-light rounded-3 shadow-sm text-center h-100">
          <div class="bg-primary rounded-3 d-flex align-items-center justify-content-center" style="width:60px; height:60px; margin: auto;"><img src="assets/images/options.png" width="35px" alt=""></div>
          <h4 class="pt-3">Multiple options</h4>
          <p class="mb-0">You will get multiple options to choose from for your classified searches. Also, you can see reviews and ratings by the people.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="p-4 bg-light rounded-3 shadow-sm text-center h-100">
          <div class="bg-primary rounded-3 d-flex align-items-center justify-content-center" style="width:60px; height:60px; margin: auto;"><img src="assets/images/easy-installation.png" width="35px" alt=""></div>
          <h4 class="pt-3">Easy to find</h4>
          <p class="mb-0">Just fill in your requirements and location and get the list of the best service providers near you suitable to your needs.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="p-4 bg-light rounded-3 shadow-sm text-center h-100">
          <div class="bg-primary rounded-3 d-flex align-items-center justify-content-center" style="width:60px; height:60px; margin: auto;"><img src="assets/images/integration.png" width="35px" alt=""></div>
          <h4 class="pt-3">It's very local</h4>
          <p class="mb-0">We make your search for a particular local service easy and convenient with our easy to find functions.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="p-4 bg-light rounded-3 shadow-sm text-center h-100">
          <div class="bg-primary rounded-3 d-flex align-items-center justify-content-center" style="width:60px; height:60px; margin: auto;"><img src="assets/images/customer-service.png" width="35px" alt=""></div>
          <h4 class="pt-3">24/7 support system</h4>
          <p class="mb-0">When you submit any query to us, we try our best to respond as soon as possible. We are active 24/7.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="list-wrapper py-5 bg-light">
  <div class="container">
         <div class="text-center mb-5">
            <div class="title-wrap m-auto">
              <h2>Feature Business</h2>
              <p class="mb-0">Discover the voices of success! Our candidates speak for themselves about their<span class="d-md-block"> transformative experiences</span></p>
           </div>
        </div>
    <div class="row align-items-center">
    @foreach($companies as $company)
    <div class="col-md-6">
              <div class="list-wraps bg-white p-3 rounded-3 d-flex mb-3 border">
                  <div class="list-style1 bg-light p-2 rounded-3">
                 @if($company->logo && file_exists(public_path('logos/' . $company->logo)))
                    <img class="img-fluid rounded-3" src="{{ asset('logos/' . $company->logo) }}" width="70px" alt="">
                    @else
                        <img class="img-fluid rounded-3" src="{{ asset('assets/images/company/1.png') }}" width="70px" alt="">
                    @endif
                                      </div>
                  <div class="list-style1 ps-4 d-flex align-items-center">
                      <div class="box-styles">
                          <p class="mb-1"><a class="text-decoration-none fs-5 text-dark" href="{{ url('company', $company->website_url) }}">{{ $company->name }}</a></p>
                          <div id="full-stars-example-two">
                            <div class="rating-group pb-2">
                              @for ($i = 1; $i <= 5; $i++)
                                  @if ($i <= $company->averageRating())
                                      <i class="fas fa-star" style="color: orange;"></i> <!-- Filled star -->
                                  @else
                                      <i class="far fa-star" style="color: lightgray;"></i> <!-- Empty star -->
                                  @endif
                              @endfor
                          </div>
                          <div class="d-flex align-items-center mb-2">
                              <ul class="mb-0 d-flex">
                                  <li><a href="#"><i class="flaticon-visibility me-1"></i><span class="ps-2">{{ $company->reviewCount() }}   reviews</span></a></li>
                                  <li><a href="#"><i class="flaticon-telephone fs-6"></i> <span class="ps-2">{{ $company->phone }}</span></a></li>
                              </ul>
                          </div>
                          <p><i class="flaticon-pin"></i> {{ $company->city ?? '' }}, {{ $company->country ?? ''}}</p>
                      </div>

                  </div>
              </div>
          </div>
    </div>
    @endforeach
  </div>
</section>
<section class="py-6 list-wrapper">
  <div class="container">
      <div class="text-center mb-5">
          <div class="title-wrap m-auto">
              <h2>New Businesses</h2>
              <p class="mb-0">Discover the voices of success! Our candidates speak for themselves about their<span class="d-md-block"> transformative experiences</span></p>
          </div>
      </div>
      <div class="row">
        @foreach($newCompanies as $company)
          <div class="col-md-6">
              <div class="list-wraps bg-light p-3 rounded-3 d-flex mb-3 border">
                  <div class="list-style1 bg-white p-2 rounded-3">
                    @if($company->logo && file_exists(public_path('logos/' . $company->logo)))
                    <img class="img-fluid rounded-3" src="{{ asset('logos/' . $company->logo) }}" width="70px" alt="">
                    @else
                        <img class="img-fluid rounded-3" src="{{ asset('assets/images/company/1.png') }}" width="70px" alt="">
                    @endif
                  </div>
                  <div class="list-style1 ps-4 d-flex align-items-center">
                      <div class="box-styles">
                          <p class="mb-1"><a class="text-decoration-none fs-5 text-dark" href="{{ url('company', $company->website_url) }}">{{ $company->name }}</a></p>
                          <div id="full-stars-example-two" class="mb-2">
                            <div class="rating-group">
                              @for ($i = 1; $i <= 5; $i++)
                                  @if ($i <= $company->averageRating())
                                      <i class="fas fa-star" style="color: orange;"></i> <!-- Filled star -->
                                  @else
                                      <i class="far fa-star" style="color: lightgray;"></i> <!-- Empty star -->
                                  @endif
                              @endfor
                          </div>
                          </div>
                          <div class="d-flex align-items-center mb-2">
                              <ul class="mb-0 d-flex">
                                  <li><a href="#"><i class="flaticon-visibility me-1"></i><span class="ps-2">{{ $company->reviewCount() }}  reviews</span></a></li>
                                  <li><a href="#"><i class="flaticon-telephone fs-6"></i> <span class="ps-2">{{ $company->phone }}</span></a></li>
                              </ul>
                          </div>
                          <p><i class="flaticon-pin"></i> {{ $company->city ?? '' }}, {{ $company->country ?? ''}}</p>
                      </div>

                  </div>
              </div>
          </div>
        @endforeach
      </div>
  </div>
</section>
<section class="py-5 py-md-6 blog-wrapper bg-light">
  <div class="container">
      <div class="text-center mb-5">
            <div class="title-wrap m-auto">
              <h2>Upcoming activities close to you</h2>
              <p class="mb-0">Discover the voices of success! Our candidates speak for themselves about their<span class="d-md-block"> transformative experiences</span></p>
           </div>
        </div>
    <div class="row">
      @foreach($blogs as $blog)
      <div class="col-md-3">
        <div class="card">
          <div class="blog-img">
          @if($blog->image && file_exists(public_path('images/blog/' . $blog->image)))
                <img class="card-img-top" src="{{ asset('images/blog/' . $blog->image) }}" alt="...">
          @else
                <img src="{{ asset('assets/images/Listing-image-6.png')}}" class="card-img-top" alt="...">
          @endif
          <span>{{ $blog->created_at->format('M d, Y') }}</span>
          </div>
          <div class="card-body">
            <a class="fs-5 text-decoration-none title" href="{{ url('blog/' . $blog->slug) }}">{{ $blog->title }}</a>
            <p class="card-text">{!! \Illuminate\Support\Str::limit(strip_tags($blog->description), 100, '...') !!}</p>
            <a href="{{ url('blog/' . $blog->slug) }}">Read more</a>
          </div>
        </div>
      </div>
     @endforeach
    </div>
  </div>
</section>
@endsection