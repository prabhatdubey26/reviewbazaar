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
<section class="copmany-wrapper py-6">
  <div class="container">
      <div class="d-flex align-items-center justify-content-between">
            <div class="title-wrap">
              <h2>Latest Business Reviews</h2>
              <p class="mb-0">Explore our Job Portal's to streamline your job search.</p>
           </div>
           <div class="d-none d-md-block">
              <a class="btn btn-primary rounded-pill btn-lg" href="{{ route('company.review') }}">See more</a>
           </div>
       </div>
    <div class="row g-4 pt-5">
      @foreach($companies as $company)
      <div class="col-xl-3 col-md-6">
          <a href="{{ url('company', $company->website_url) }}" class="text-decoration-none">
            <div class="list-box">
                 <div class="list-company"> 
                      @if($company->logo && file_exists(public_path('logos/' . $company->logo)))
                          <img src="{{ asset('logos/' . $company->logo) }}" width="70px" alt="">
                      @else
                          <img src="{{ asset('assets/images/company/1.png') }}" width="70px" alt="">
                      @endif
                      <div>
                        <span class="ps-3 text-dark">{{ $company->name }}</span>
                        <span class="ps-3 small text-primary">{{ $company->website_url }}</span>
                      </div>
                  </div>
                  <p class="text-primary">{{ $company->about }}</p>
                  <div id="full-stars-example-two">
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
            </div>
          </a>
      </div>
     @endforeach
    </div>
  </div>
</section>
<section class="testimonial-wrapper py-5">
  <div class="container">
         <div class="text-center mb-5">
            <div class="title-wrap m-auto">
              <h2>What Our Candidates Say</h2>
              <p class="mb-0">Discover the voices of success! Our candidates speak for themselves about their<span class="d-md-block"> transformative experiences</span></p>
           </div>
        </div>
    <div class="row align-items-center">
      <div class="col-md-6">
        <div>
          <img src="{{ asset('assets/images/test-img.png')}}" class="img-fluid" alt="">
        </div>
      </div>
      <div class="col-md-6">
      <div id="carouselExampleIndicators" class="carousel slide overflow-hidden" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="content-wrap">
              <div class="clients-wrapper mb-5">
                <p>This job portal is a game-changer! The detailed job listings and comprehensive profiles give a clear picture of what employers are looking for. The blog section with career advice is an excellent added bonus.</p>
                <p>The platform's commitment to user success is evident. The email alerts for application status updates keep you in the loop.</p>
              </div>
              <div class="user-img ms-5">
                <div class="d-flex align-items-center">
                  <img src="{{ asset('assets/images/user.jpg')}}" alt="">
                  <h5 class="ps-3">Jonathon Smith <span class="d-block"> Marketing Specialist</span></h5>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
          <div class="content-wrap">
              <div class="clients-wrapper mb-5">
                <p>This job portal is a game-changer! The detailed job listings and comprehensive profiles give a clear picture of what employers are looking for. The blog section with career advice is an excellent added bonus.</p>
                <p>The platform's commitment to user success is evident. The email alerts for application status updates keep you in the loop.</p>
              </div>
              <div class="user-img ms-5">
                <div class="d-flex align-items-center">
                  <img src="{{ asset('assets/images/user.jpg')}}" alt="">
                  <h5 class="ps-3">Jonathon Smith <span class="d-block"> Marketing Specialist</span></h5>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="content-wrap">
              <div class="clients-wrapper mb-5">
                <p>This job portal is a game-changer! The detailed job listings and comprehensive profiles give a clear picture of what employers are looking for. The blog section with career advice is an excellent added bonus.</p>
                <p>The platform's commitment to user success is evident. The email alerts for application status updates keep you in the loop.</p>
              </div>
              <div class="user-img ms-5">
                <div class="d-flex align-items-center">
                  <img src="{{ asset('assets/images/user.jpg')}}" alt="">
                  <h5 class="ps-3">Jonathon Smith <span class="d-block"> Marketing Specialist</span></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      </div>
    </div>
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
              <div class="list-wraps bg-light p-4 rounded-3 d-flex mb-3 border">
                  <div class="list-style1">
                    @if($company->logo && file_exists(public_path('logos/' . $company->logo)))
                    <img class="img-fluid rounded-3" src="{{ asset('logos/' . $company->logo) }}" width="70px" alt="">
                    @else
                        <img class="img-fluid rounded-3" src="{{ asset('assets/images/company/1.png') }}" width="70px" alt="">
                    @endif
                  </div>
                  <div class="list-style1 ps-4 d-flex align-items-center">
                      <div class="box-styles">
                          <p><a class="text-decoration-none fs-5 text-dark" href="{{ url('company', $company->website_url) }}">{{ $company->name }}</a></p>
                          <div id="full-stars-example-two">
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
<section class="py-5 py-md-6 blog-wrapper">
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