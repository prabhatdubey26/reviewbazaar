@extends('frontend.inc.layout')

@section('content')
<section class="py-6">
    <div class="container">
        <div class="justify-content-center align-items-center d-flex">
            <div class="col-md-7">
                <div class="row login-page align-items-center d-flex justify-content-between g-0 bg-light">
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{ asset('assets/images/signup.jpg')}}" alt="">
                    </div>
                    <div class="p-5 rounded-3 col-md-6 h-100">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf 
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" >
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" >
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- <label for="g-recaptcha-response">Captcha</label> --}}
                            <div class="g-recaptcha mb-4" data-sitekey={{config('services.recaptcha.key')}}></div>
                            @error('g-recaptcha-response')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection