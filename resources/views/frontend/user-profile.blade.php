@extends('frontend.inc.layout')
@section('title', 'Uaer Profile')
@section('content')
<section class="bg-primary py-5">
    <div class="container">
      <div class="row align-items-cneter justify-content-center">
        <div class="col-md-7">
            <div class="heading-wrapper">
              <div class="text-center text-white">
                <div class="profile position-relative m-auto" style="max-width:20%">
                    @if($user->profile && file_exists(public_path('images/profile/' . $user->profile)))
                    <img src="{{ asset('images/profile/' . $user->profile) }}" class="rounded-1 border-2 border-light" width="100%" height="120px" style="object-fit: cover;"  alt="">
                    @else
                        <img src="{{ asset('assets/images/user.jpg') }}" class="rounded-1 border-2 border-light" width="100%" height="120px" style="object-fit: cover;"  alt="">
                    @endif
                   <div class="position-absolute top-0 end-0">
                        <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/images/settings.png" class="bg-primary p-1 rounded-2" width="25px" alt="">
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{ url('profile') }}">Edit</a></li>
                        </ul>
                    </div>
                </div>
               
                <div class="pt-4">
                  <h1 class="fw-semibold px-4 px-lg-0 fs-4 text-uppercase text-white">{{ $user->name }}</h1>
                  <ul class="list-unstyled">
                    <li><a class="text-white text-decoration-none" href="#">{{ $user->email }}</a></li>
                    <li><a class="text-white text-decoration-none" href="#">{{ $user->phone }}</a></li>
                  </ul>
                </div>
              </div> 
            </div>
        </div> 
      </div>
    </div>
  </section>
  
<section class="py-5">
      <div class="container">
          <div class="row">
              <div class="col-md-4">
                  <div class="profile bg-light rounded-3 position-relative p-0">
                    @if($user->profile && file_exists(public_path('images/profile/' . $user->profile)))
                    <img src="{{ asset('images/profile/' . $user->profile) }}" class="img-fluid rounded-2" width="100%" />
                    @else
                        <img src="{{ asset('assets/images/user.jpg') }}" class="img-fluid rounded-2" width="100%" />
                    @endif
                      <div class="position-absolute top-0 end-0">
                        <a href="#" data-bs-toggle="dropdown" aria-expanded="false"><img src="assets/images/settings.png" class="bg-primary p-1 rounded-2" width="25px" alt=""></a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{ url('profile') }}">Edit</a></li>
                        </ul>
                      </div>
                      <div class="p-3">
                          <h6 class="mb-0">
                            @foreach($companies as $company)
                            <p class="mb-1">
                              Business Category :-
                              @foreach($company->category_names as $category)
                              {{ $category }} @if (!$loop->last), @endif
                          @endforeach
                                
                            </p>
                            <p>({{$company->name}})</p>
                            @endforeach
                           <div><p class="opacity-50 d-flex align-items-cneter mb-0"><span class="pe-2"><i class="flaticon-pin fs-4"></i></span> 
                            <span>{{  $user->address }}</span>
                        </p></div>
                          </h6>
                      </div>
                  </div>
              </div>
              </div>
          </div>
      </div>
  </section>
  
@endsection
