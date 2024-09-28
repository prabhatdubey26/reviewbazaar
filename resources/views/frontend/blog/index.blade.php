@extends('frontend.inc.layout')
@section('content')
<section class="hero-banner-inner">
    <!-- <div class="banner-img">
      <img src="assets/images/banner.jpg" alt="Review Bazzar" class="img-fluid">
    </div> -->
    <div class="container">
      <div class="row align-items-cneter justify-content-center pt-5">
        <div class="col-md-7">
            <div class="heading-wrapper">
              <div class="text-center text-white">
                <h1 class="fw-semibold px-4 px-lg-0 fs-4 text-uppercase text-white">Blog - Review Bazzar</h1>
                <p>Check out our trading blog here.</p>
              </div> 
              
             </div>
             <div class="navbars pt-4">
              <ul>
                <li><a href="/">Home</a></li>
                <li><a href="#">Blog</a></li>
              </ul>
             </div>
        </div> 
      </div>
    </div>
  </section>
  <section class="py-6 bg-light list-wrapper blog-wrapper">
    <div class="container">
      <div class="row">
       
        <div class="col-md-9">
        <div class="row g-4">
        @foreach($blogs as $blog)
        <div class="col-md-4">
          <div class="card">
            <div class="blog-img">
                @if($blog->image && file_exists(public_path('images/blog/' . $blog->image)))
                <img class="card-img-top" src="{{ asset('images/blog/' . $blog->image) }}" alt="{{$blog->title}}" >
                @else
                <img class="card-img-top" src="{{ asset('assets/images/2.jpg')}}" alt="{{$blog->title}}">
                @endif
            <span>{{ $blog->created_at->format('F j, Y') }}</span>

            </div>
            <div class="card-body">
                <a class="fs-5 text-decoration-none title" href="{{ url('blog/' . $blog->slug) }}">{{ $blog->title }}</a>
                <p class="card-text">
                    {!! \Illuminate\Support\Str::limit(strip_tags($blog->description), 100, '...') !!}
                </p>
                <a href="{{ url('blog/' . $blog->slug) }}">Read more</a>|
            </div>
          </div>
        </div>
        @endforeach
      </div>
        </div>
        <div class="col-md">
          <div class="bg-white p-4 rounded-3">
            <h5 class="mb-4">Categories</h5>
             <ul class="categories">
                @foreach($categories as $category)
                <li><a href="{{ url('categories', $category->slug) }}">{{ $category->name }}</a></li>
                @endforeach
             </ul>
          </div>
          <div class="recent-post p-4 bg-white rounded-4 mt-4">
             <h5 class="mb-4">Recent Posts</h5>
             @foreach($recentBlogs as $blog)
             <div class="d-flex">
                @if($blog->image && file_exists(public_path('images/blog/' . $blog->image)))
                <img class="card-img-top rounded-3" width="60px" src="{{ asset('images/blog/' . $blog->image) }}" alt="{{$blog->title}}" >
                @else
                <img src="assets/images/Listing-image-6.png" class="card-img-top rounded-3" width="60px" alt="{{$blog->title}}" >
                @endif
                <a class="fs-6 text-decoration-none title ps-3 text-dark" href="{{ url('blog/' . $blog->slug) }}">{{ $blog->title }}</a>
             </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  
@endsection