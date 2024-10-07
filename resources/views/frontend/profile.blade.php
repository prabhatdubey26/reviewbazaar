@extends('frontend.inc.layout')

@section('content')
<section class="hero-banner-inner">
    <div class="container">
        <div class="row align-items-center justify-content-center pt-5">
            <div class="col-md-7">
                <div class="heading-wrapper">
                    <div class="text-center text-white">
                        <h1 class="fw-semibold px-4 px-lg-0 fs-4 text-uppercase text-white">User Profile</h1>
                        <p>Compare the best companies in this category</p>
                    </div> 
                </div>
                <div class="navbars pt-4">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">User Profile</a></li>
                    </ul>
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
