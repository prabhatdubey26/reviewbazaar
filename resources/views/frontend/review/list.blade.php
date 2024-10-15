@extends('frontend.inc.layout')

@section('content')

<section class="hero-banner-inner">
        <div class="container">
        <div class="row align-items-cneter justify-content-center pt-5">
            <div class="col-md-7">
                <div class="heading-wrapper">
                <div class="text-center text-white">
                    <h1 class="fw-semibold px-4 px-lg-0 fs-4 text-uppercase text-white">All Reviews Company</h1>
                    <p>Check out here companies reviews.</p>
                </div> 
                
                </div>
                <div class="navbars pt-4">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Company Review</a></li>
                </ul>
                </div>
            </div> 
        </div>
        </div>
</section>
<section class="copmany-wrapper py-6">
    <div class="container">
        <div class="d-flex align-items-center justify-content-center">
            <div class="title-wrap">
              <h2>Latest Business Reviews</h2>
              <p class="mb-0">Explore our Job Portal's to streamline your job search.</p>
           </div>
       </div>
    <div class="row g-4 pt-5">
        @if($reviews->isEmpty())
        <div class="no-companies bg-white p-4 rounded-3 text-center mb-3">
            <p class="fs-5 text-dark">No reviews found.</p>
        </div>
        @else
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
                    <p class="mb-0">{{ $review->comment }}!</p>
                </div>
            </div>
          </div>
       @endforeach
       @endif
       <div class="d-flex justify-content-center mt-4">
        {{ $reviews->links('pagination::bootstrap-4') }}
      </div>
      </div>
    </div>
    </section>
@endsection