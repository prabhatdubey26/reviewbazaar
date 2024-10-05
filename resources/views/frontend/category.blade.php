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
                <h1 class="fw-semibold px-4 px-lg-0 fs-4 text-uppercase text-white">All Category</h1>
                <p>Compare the best companies in this category</p>
              </div> 
             </div>
             <div class="navbars pt-4">
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Category</a></li>
                <li>Company List</li>
              </ul>
             </div>
        </div> 
      </div>
    </div>
  </section>
  
  <section class="py-5 category-wrappers bg-white">
    <div class="container">
      <div class="row row-cols-2 row-cols-sm-4 row-cols-md-6 g-3">
        @foreach($categories as $category)
        <div class="col">
            <div class="item-list align-items-center d-flex flex-column justify-content-between">
               <div class="icons-list">
                    <a href="category-list.php">
                        @if($category->image && file_exists(public_path('images/category/' . $category->image)))
                                        <img src="{{ asset('images/category/' . $category->image) }}" alt="">
                                  
                                        @else
                                        <img src="{{ asset('assets/images/icons/automotive.png')}}" alt="">
                                        
                                    @endif
                        
                    </a>
                </div>
               <a class="text-decoration-none text-dark" href="{{ url('sub-category/'. $category->slug) }}">{{$category->name??''}}</a>
            </div>
        </div>
        @endforeach
        
      </div>
      <div class="row d-none">
  
        <div class="col-md-12">
        <div id="owl-carousel" class="owl-carousel owl-theme">
          <div class="item">
             <a href="list-page.php">
              <div class="category">
                <div class="icons-list">
                    <i class="flaticon-bank"></i>
                </div>
                <h5 class="mb-0"> Travel Insurance Company</h5>
              </div>
            </a>
          </div>
          <div class="item">
           <a href="list-page.php">
              <div class="category">
                 <div class="icons-list">
                   <i class="flaticon-graduating-student"></i>
                </div>
                <h5 class="mb-0">Travel Insurance Company</h5>
              </div>
            </a>
          </div>
          <div class="item">
            <a href="list-page.php">
              <div class="category">
                <div class="icons-list">
                    <i class="flaticon-bank"></i>
                </div>
                <h5 class="mb-0">Travel Insurance Company</h5>
              </div>
            </a>
          </div>
          <div class="item">
            <a href="list-page.php">
              <div class="category">
                <div class="icons-list">
                    <i class="flaticon-bank"></i>
                </div>
                <h5 class="mb-0">Travel Insurance Company</h5>
              </div>
            </a>
          </div>
          <div class="item">
            <a href="list-page.php">
              <div class="category">
                <div class="icons-list">
                    <i class="flaticon-bank"></i>
                </div>
                <h5 class="mb-0">Travel Insurance Company</h5>
              </div>
            </a>
          </div>
          <div class="item">
            <a href="#">
              <div class="category">
                <div class="icons-list">
                    <i class="flaticon-bank"></i>
                </div>
                <h5 class="mb-0">Travel Insurance Company</h5>
              </div>
            </a>
          </div>
          <div class="item">
            <a href="#">
              <div class="category">
                 <div class="icons-list">
                    <i class="flaticon-bank"></i>
                </div>
                <h5 class="mb-0">Travel Insurance Company</h5>
              </div>
            </a>
          </div>
          <div class="item">
            <a href="#">
              <div class="category">
                <div class="icons-list">
                    <i class="flaticon-bank"></i>
                </div>
                <h5 class="mb-0">Travel Insurance Company</h5>
              </div>
            </a>
          </div>
          <div class="item">
            <a href="#">
              <div class="category">
                 <div class="icons-list">
                    <i class="flaticon-bank"></i>
                 </div>
                <h5 class="mb-0">Travel Insurance Company</h5>
              </div>
            </a>
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>
@endsection