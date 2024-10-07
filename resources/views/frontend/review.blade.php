@extends('frontend.inc.layout')

@section('content')

<section class="hero-banner-inner">
    <div class="container">
        <div class="row align-items-cneter justify-content-center pt-5">
            <div class="col-md-7">
                <div class="heading-wrapper">
                    <div class="text-center text-white">
                        <h1 class="fw-semibold px-4 px-lg-0 fs-4 text-uppercase text-white">Best in Travel Insurance Company</h1>
                        <p>Compare the best companies in this category</p>
                    </div> 
                </div>
                <div class="navbars pt-4">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">{{ $company->name ?? '' }}</a></li>
                        <li>Review</li>
                    </ul>
                </div>
            </div> 
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row aligin-items-center justify-content-center">
            <div class="col-md-5">
                <div class="p-4 bg-light rounded-2">
                    
                    <!-- Display Success Message -->
                    @if(session('success'))
                        <div class="alert alert-success">
                            <span class="text-success">  {{ session('success') }} </span>
                        </div>
                    @endif

                    <h4 class="text-uppercase">Customer Review Form</h4>
                    <p>We value your feedback. Please take a moment to review your experience with us.</p>
                    <form class="row" action="{{ route('review.store') }}" method="POST">
                        @csrf
                            <input type="hidden" name="company_id" value="{{$company->id}}">
                            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">

                        <!-- Name -->
                        <div class="mb-3 col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', auth()->user()->name) }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', auth()->user()->email) }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Phone -->
                        <div class="mb-3 col-md-12">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}">
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Rating -->
                        <div class="mb-3 col-md-12">
                            <h5 class="text-uppercase">Quality of Services</h5>
                            <p class="opacity-50 mb-0">Rate your overall experience with us</p>
                            <div id="full-stars-example-two">
                                <div class="rating-group">
                                    <input disabled="" checked="" class="rating__input rating__input--none" name="review" id="rating-none" value="0" type="radio">
                                    <label aria-label="1 star" class="rating__label" for="rating-1"><i class="rating__icon rating__icon--star flaticon-star"></i></label>
                                    <input class="rating__input" name="review" id="rating-1" value="1" type="radio">
                                    <label aria-label="2 stars" class="rating__label" for="rating-2"><i class="rating__icon rating__icon--star flaticon-star"></i></label>
                                    <input class="rating__input" name="review" id="rating-2" value="2" type="radio">
                                    <label aria-label="3 stars" class="rating__label" for="rating-3"><i class="rating__icon rating__icon--star flaticon-star"></i></label>
                                    <input class="rating__input" name="review" id="rating-3" value="3" type="radio">
                                    <label aria-label="4 stars" class="rating__label" for="rating-4"><i class="rating__icon rating__icon--star flaticon-star"></i></label>
                                    <input class="rating__input" name="review" id="rating-4" value="4" type="radio">
                                    <label aria-label="5 stars" class="rating__label" for="rating-5"><i class="rating__icon rating__icon--star flaticon-star"></i></label>
                                    <input class="rating__input @error('rating') is-invalid @enderror" name="review" id="rating-5" value="5" type="radio">
                                </div>
                            </div>
                            @error('review')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Comments -->
                        <div class="col-md-12">
                            <div class="form-floating">
                                <textarea class="form-control @error('comment') is-invalid @enderror" name="comment" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">{{ old('comment') }}</textarea>
                                <label for="floatingTextarea2">Comments</label>
                            </div>
                            @error('comment')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Terms & Conditions -->
                        <div class="col-md-12">
                            <div class="mb-3 form-check mt-4">
                                <input type="checkbox" class="form-check-input @error('agreement') is-invalid @enderror" id="exampleCheck1" name="agreement">
                                <label class="form-check-label" for="exampleCheck1">I agree that my review can be published on the website.</label>
                            </div>
                            @error('agreement')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <button type="submit" class="btn btn-primary">Submit Review</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
