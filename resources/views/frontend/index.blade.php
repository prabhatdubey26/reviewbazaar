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
          <form action="" class="fromsa">
            <div class="p-4 bg-white rounded rounded-pill shadow-sm my-4 py-2">
              <div class="d-flex align-items-center justify-content-center">
                <input type="text" placeholder="Location" `="" class="form-control border-0 bg-white">
                <input type="text" placeholder="Searching Company" class="form-control border-0 bg-white">
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
{{-- <section class="py-4 category-wrappers">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div id="owl-carousel" class="owl-carousel owl-theme">
                  @foreach($categories as $category)
                      <div class="item">
                          <a href="{{ url('categories', $category->slug) }}"> <!-- Update with your route -->
                              <div class="category">
                                  <div class="icons-list">
                                    @if($category->image && file_exists(public_path('images/category/' . $category->image)))
                                        <img src="{{ asset('images/category/' . $category->image) }}" height="50px"  alt="">
                                  
                                        @else
                                    <i class="flaticon-bank"></i>
                                        
                                    @endif
                                      <!-- You can use a dynamic icon here if needed -->
                                  </div>
                                  <h5 class="mb-0">{{ $category->name }}</h5> <!-- Display the category name -->
                              </div>
                          </a>
                      </div>
                  @endforeach
              </div>
          </div>
      </div>
  </div>
</section> --}}

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
              <h2>Best in Travel Insurance Company</h2>
              <p class="mb-0">Explore our Job Portal's to streamline your job search.</p>
           </div>
           <div class="d-none d-md-block">
              <a class="btn btn-primary rounded-pill btn-lg" href="#">See more</a>
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
        <!-- <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div> -->
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