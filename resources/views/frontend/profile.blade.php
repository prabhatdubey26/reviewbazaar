@extends('frontend.inc.layout')
@section('title', 'Edit Profile')
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
        @if(session('success'))
            <div class="alert alert-success">
                <span class="text-success">  {{ session('success') }} </span>
            </div>
        @endif

        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="profile bg-light p-4 rounded-3 text-center">
                        @if($user->profile && file_exists(public_path('images/profile/' . $user->profile)))
                        <img src="{{ asset('images/profile/' . $user->profile) }}" class="img-fluid p-1 bg-black rounded-1" width="180px" alt="">
                        @else
                            <img src="{{ asset('assets/images/user.jpg') }}" class="img-fluid p-1 bg-black rounded-1" width="180px" alt="">
                        @endif
                        <div class="pt-4">
                            <h5 class="mb-3 d-flex align-items-center justify-content-center">
                                <span class="ms-2">{{ $user->name }}</span>
                            </h5>
                            <h6 class="opacity-50 d-flex align-items-center justify-content-center small">
                                <span>Business:</span>
                                <span class="ms-2">{{ $user->business ?? 'N/A' }}</span>
                            </h6>
                            @foreach($companies as $company)
                            <p class="mb-1">
                              Business Category :-
                              @foreach($company->category_names as $category)
                              {{ $category }} @if (!$loop->last), @endif
                          @endforeach
                                
                            </p>
                            <p>({{$company->name}})</p>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="bg-light p-4">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="col">Full Name</th>
                                    <td scope="col">
                                        <input class="form-control" type="text" name="name" value="{{ old('name', $user->name) }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col">Phone</th>
                                    <td scope="col">
                                        <input class="form-control" type="text" name="phone" value="{{ old('phone', $user->phone) }}">
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col">Email</th>
                                    <td scope="col">
                                        <input class="form-control" @readonly(true) type="email" name="email" value="{{ old('email', $user->email) }}">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col">Business</th>
                                    <td scope="col">
                                        <input class="form-control" type="text" name="business" value="{{ old('business', $user->business) }}">
                                        @error('business')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col">Address</th>
                                    <td scope="col">
                                        <input class="form-control" type="text" name="address" value="{{ old('address', $user->address) }}">
                                        @error('address')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col">About us</th>
                                    <td scope="col">
                                        <textarea class="form-control" name="about">
                                        {{ old('about', $user->about) }}
                                        </textarea>
                                        @error('about')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> 
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="inputGroupFile02" name="profile">
                                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                        </div>
                                        @error('profile')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> 
                                        <div class="input-group">
                                            <button type="submit" class="btn btn-primary">Update</button> 
                                        </div>
                                    </td>
                                </tr>
                            </tbody> 
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
