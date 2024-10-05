@extends('frontend.inc.layout')

@section('content')

<section class="hero-banner-inner">
    <div class="container">
      <div class="row align-items-cneter justify-content-center pt-5">
        <div class="col-md-7">
            <div class="heading-wrapper">
              <div class="text-center text-white">
                <h1 class="fw-semibold px-4 px-lg-0 fs-4 text-uppercase text-white">Sub Category</h1>
                <p>Compare the best companies in this category</p>
              </div> 
             </div>
             <div class="navbars pt-4">
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Automotive</a></li>
                <li>Auto Body Repair</li>
              </ul>
             </div>
        </div> 
      </div>
    </div>
  </section>
  <section class="py-6 bg-white list-wrapper category-wrappers sub-category">
    <div class="container"> 
      <div class="d-flex align-items-center justify-content-between bg-light p-2 rounded-2">
          <a class="text-decoration-none text-dark" href="#">1-{{count($subCategories)}} of {{ $subCategories->total() }} results</a>
          <form action="" class="">
              <div class="p-1 rounded rounded-pill shadow-sm">
              <div class="input-group">
                  <input type="search" name="name" placeholder="Search" aria-describedby="button-addon1" class="form-control border-0 bg-whites" value="{{ request()->query('name') }}">
                  <div class="input-group-append">
                  <button id="button-addon1" type="submit" class="btn btn-link text-primary"><img src="{{ asset('assets/images/icons/search-interface-symbol.png')}}" width="20px" alt=""></button>
                  </div>
              </div>
              </div>
          </form>
      </div>
     <div class="row mt-4">
       
       <div class="col-md-12">
       <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 g-3">
        @if($subCategories->isEmpty())
                <div class="no-companies bg-white p-4 rounded-3 text-center mb-3">
                    <p class="fs-5 text-dark">No subcategory found.</p>
                </div>
        @else
        @foreach($subCategories as $subcategory)
        <div class="col">
            <div class="item-list align-items-center d-flex flex-column justify-content-between">
               <div class="icons-list mb-2">
                    <a href="{{ url('categories', $subcategory->slug) }}">
                        @if($subcategory->image && file_exists(public_path('images/category/' . $subcategory->image)))
                        <img src="{{ asset('images/category/' . $subcategory->image) }}" alt="">
                  
                        @else
                        <img src="{{ asset('assets/images/icons/automotive.png')}}" alt="">
                        
                    @endif
                    </a>
                </div>
               <a class="text-decoration-none text-dark " href="{{ url('categories', $subcategory->slug) }}">{{ $subcategory->name }}</a>
            </div>
        </div>
        @endforeach
        @endif
      </div>
      <div class="d-flex justify-content-center mt-4">
        {{ $subCategories->links('pagination::bootstrap-4') }}
      </div>
     </div>
   </div>
  </div></section>

@endsection