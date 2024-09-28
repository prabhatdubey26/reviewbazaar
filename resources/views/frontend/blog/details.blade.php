@extends('frontend.inc.layout')

@section('content')
<section class="post-details py-5">
    <div class="container">
      <div class="row align-items-center justify-content-center">
          <div class="col-md-8 text-center">
              <h1>{{ $blog->title }}</h1>
              <nav aria-label="breadcrumb" class="d-flex align-items-center justify-content-center pt-3">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a class="text-decoration-none small text-dark" href="#">{{ $blog->created_at->format('F j, Y') }}</a></li>
                      <li class="breadcrumb-item active"><a class="text-decoration-none small text-dark" href="#">{{ $blog->category->name }}</a></li>
                  </ol>
              </nav>
          </div>
      </div>
    </div>
    @if($blog->image && file_exists(public_path('images/blog/' . $blog->image)))
    <img  class="img-fluid" src="{{ asset('images/blog/' . $blog->image) }}" alt="image" width="100%">
    @else
    <img class="img-fluid" src="{{ asset('assets/images/2.jpg')}}" alt="">
    @endif
    <div class="container py-5">
      <div class="row align-items-center justify-content-center">
          <div class="col-md-9">
            {!! html_entity_decode($blog->description) !!}
          </div> 
      </div>
    </div>
  </section>
  
@endsection