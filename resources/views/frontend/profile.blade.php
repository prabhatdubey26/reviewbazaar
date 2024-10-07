@extends('frontend.inc.layout')

@section('content')
<section class="hero-banner-inner">
    <div class="container">
      <div class="row align-items-cneter justify-content-center pt-5">
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
        <form>
          <div class="row">
              <div class="col-md-4">
                  <div class="profile bg-light p-4 rounded-3 text-center">
                      <img src="{{ asset('assets/images/user.jpg')}}" class="img-fluid p-1 bg-black rounded-1" width="180px"  alt="">
                      <div class="pt-4">
                          <h5 class="mb-3 d-flex align-items-center justify-content-center">
                              <span><img src="{{ asset('assets/images/user.jpg')}}" width="20px" alt="user"></span>
                              <span class="ms-2">{{ $user->name }}</span>
                           </h5>
                          <h6 class="opacity-50 d-flex align-items-center justify-content-center small">
                              <span>Business:</span>
                              <span class="ms-2">{{ $user->business }}</span>
                          </h6>
                      </div>
                  </div>
              </div>
              <div class="col-md-8">
                <div class="bg-light p-4">
                <table class="table">
                  <thead>
                   
                  </thead>
                  <tbody>
                    <tr>
                        <th scope="col">Full Name</th>
                        <td scope="col">
                            <input class="form-control" type="name" name="name" value="{{ $user->name }}">
                        </td>
                        </tr>
                    <tr>
                        <th scope="col">Phone</th>
                        <td scope="col">
                          <input class="form-control" type="text" name="phone" value="{{ $user->phone }}">
                        </td>
                    </tr>
                    <tr>
                    <th scope="col">Email</th>
                    <td scope="col">
                        <input class="form-control" type="email" name="email" value="{{ $user->email }}">
                    </td>
                    </tr>
                    <tr>
                    <th scope="col">Business</th>
                    <td scope="col">
                        <input class="form-control" type="business" name="business" value="{{ $user->business }}">
                    </td>
                    </tr>
                    <tr>
                    <th scope="col">Address</th>
                    <td scope="col">
                        <input class="form-control" type="address" name="address" value="{{ $user->address }}">
                    </td>
                    </tr>
                    <tr>
                      <td colspan="2"> 
                       <div class="input-group">
                        <input type="file" class="form-control" id="inputGroupFile02" name="profile">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
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