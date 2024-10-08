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
       <div class="d-flex justify-content-center mt-4">
        {{ $companies->links('pagination::bootstrap-4') }}
      </div>
      </div>
    </div>
    </section>
@endsection