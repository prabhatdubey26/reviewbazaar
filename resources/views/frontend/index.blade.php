@extends('frontend.inc.layout')

@section('content')
<section class="hero-banner">
  <div class="banner-img">
    <img src="{{ asset('assets/images/banner.jpg')}}" alt="Review Bazzar" class="img-fluid">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heading-wrapper">
          <h1 class="display-5 fw-semibold text-white text-uppercase px-4 px-lg-0">Welcome To The Biggest<span class="d-md-block"> Business Directory</span></h1>
         <form action="" class="fromsa">
          <div class="p-1 bg-white rounded rounded-pill shadow-sm my-4 py-2">
            <div class="input-group">
              <input type="search" placeholder="Searching Company or Categories" aria-describedby="button-addon1" class="form-control border-0 bg-white">
              <div class="input-group-append">
                <button id="button-addon1" type="submit" class="btn btn-link text-primary"><img src="{{ asset('assets/images/icons/search-interface-symbol.png')}}" width="20px" alt=""></button>
              </div>
            </div>
          </div>
        </form>
        </div>
      </div> 
    </div>
  </div>
</section>
<section class="py-4 category-wrappers">
  <div class="container">
    <div class="row">
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

<section class="copmany-wrapper py-6">
  <div class="container">
      <div class="d-flex align-items-center justify-content-between">
            <div class="title-wrap">
              <h2>Best in Travel Insurance Company</h2>
              <p class="mb-0">Explore our Job Portal's to streamline your job search.</p>
           </div>
           <div class="d-none d-md-block">
              <a class="btn btn-primary rounded-pill btn-lg" href="#">See more</a>
           </div>
       </div>
    <div class="row g-4 pt-5">
      <div class="col-xl-3 col-md-6">
          <a href="#" class="text-decoration-none">
            <div class="list-box">
                 <div class="list-company"> 
                      <img src="{{ asset('assets/images/company/1.png')}}" width="70px" alt="">
                      <div>
                        <span class="ps-3 text-dark">Spinfluence</span>
                        <span class="ps-3 small text-primary">www.mexipass.com</span>
                      </div>
                  </div>
                  <p class="text-primary">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  <div id="full-stars-example-two">
                      <div class="rating-group">
                    <input disabled checked class="rating__input rating__input--none" name="rating3" id="rating3-none" value="0" type="radio">
                    <label aria-label="1 star" class="rating__label" for="rating3-1"><i class="rating__icon rating__icon--star flaticon-star"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-1" value="1" type="radio">
                    <label aria-label="2 stars" class="rating__label" for="rating3-2"><i class="rating__icon rating__icon--star flaticon-star"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-2" value="2" type="radio">
                    <label aria-label="3 stars" class="rating__label" for="rating3-3"><i class="rating__icon rating__icon--star flaticon-star"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-3" value="3" type="radio">
                    <label aria-label="4 stars" class="rating__label" for="rating3-4"><i class="rating__icon rating__icon--star flaticon-star"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-4" value="4" type="radio">
                    <label aria-label="5 stars" class="rating__label" for="rating3-5"><i class="rating__icon rating__icon--star flaticon-star"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-5" value="5" type="radio">
                   </div>
                </div>
            </div>
          </a>
      </div>
      <div class="col-xl-3 col-md-6">
          <a href="#" class="text-decoration-none">
            <div class="list-box">
                 <div class="list-company"> 
                      <img src="{{ asset('assets/images/company/1.png')}}" width="70px" alt="">
                      <div>
                        <span class="ps-3 text-dark">Spinfluence</span>
                        <span class="ps-3 small text-primary">www.mexipass.com</span>
                      </div>
                  </div>
                  <p class="text-primary">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  <div id="full-stars-example-two">
                <div class="rating-group">
                    <input disabled checked class="rating__input rating__input--none" name="rating3" id="rating3-none" value="0" type="radio">
                    <label aria-label="1 star" class="rating__label" for="rating3-1"><i class="rating__icon rating__icon--star flaticon-star"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-1" value="1" type="radio">
                    <label aria-label="2 stars" class="rating__label" for="rating3-2"><i class="rating__icon rating__icon--star flaticon-star"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-2" value="2" type="radio">
                    <label aria-label="3 stars" class="rating__label" for="rating3-3"><i class="rating__icon rating__icon--star flaticon-star"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-3" value="3" type="radio">
                    <label aria-label="4 stars" class="rating__label" for="rating3-4"><i class="rating__icon rating__icon--star flaticon-star"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-4" value="4" type="radio">
                    <label aria-label="5 stars" class="rating__label" for="rating3-5"><i class="rating__icon rating__icon--star flaticon-star"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-5" value="5" type="radio">
                   </div>
                </div>
            </div>
          </a>
      </div>
      <div class="col-xl-3 col-md-6">
          <a href="#" class="text-decoration-none">
            <div class="list-box">
                 <div class="list-company"> 
                      <img src="{{ asset('assets/images/company/1.png')}}" width="70px" alt="">
                      <div>
                        <span class="ps-3 text-dark">Spinfluence</span>
                        <span class="ps-3 small text-primary">www.mexipass.com</span>
                      </div>
                  </div>
                  <p class="text-primary">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  <div id="full-stars-example-two">
                <div class="rating-group">
                    <input disabled checked class="rating__input rating__input--none" name="rating3" id="rating3-none" value="0" type="radio">
                    <label aria-label="1 star" class="rating__label" for="rating3-1"><i class="rating__icon rating__icon--star flaticon-star"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-1" value="1" type="radio">
                    <label aria-label="2 stars" class="rating__label" for="rating3-2"><i class="rating__icon rating__icon--star flaticon-star"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-2" value="2" type="radio">
                    <label aria-label="3 stars" class="rating__label" for="rating3-3"><i class="rating__icon rating__icon--star flaticon-star"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-3" value="3" type="radio">
                    <label aria-label="4 stars" class="rating__label" for="rating3-4"><i class="rating__icon rating__icon--star flaticon-star"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-4" value="4" type="radio">
                    <label aria-label="5 stars" class="rating__label" for="rating3-5"><i class="rating__icon rating__icon--star flaticon-star"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-5" value="5" type="radio">
                   </div>
                </div>
            </div>
          </a>
      </div>
      <div class="col-xl-3 col-md-6">
          <a href="#" class="text-decoration-none">
            <div class="list-box">
                 <div class="list-company"> 
                      <img src="{{ asset('assets/images/company/1.png')}}" width="70px" alt="">
                      <div>
                        <span class="ps-3 text-dark">Spinfluence</span>
                        <span class="ps-3 small text-primary">www.mexipass.com</span>
                      </div>
                  </div>
                  <p class="text-primary">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  <div id="full-stars-example-two">
                <div class="rating-group">
                    <input disabled checked class="rating__input rating__input--none" name="rating3" id="rating3-none" value="0" type="radio">
                    <label aria-label="1 star" class="rating__label" for="rating3-1"><i class="rating__icon rating__icon--star flaticon-star"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-1" value="1" type="radio">
                    <label aria-label="2 stars" class="rating__label" for="rating3-2"><i class="rating__icon rating__icon--star flaticon-star"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-2" value="2" type="radio">
                    <label aria-label="3 stars" class="rating__label" for="rating3-3"><i class="rating__icon rating__icon--star flaticon-star"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-3" value="3" type="radio">
                    <label aria-label="4 stars" class="rating__label" for="rating3-4"><i class="rating__icon rating__icon--star flaticon-star"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-4" value="4" type="radio">
                    <label aria-label="5 stars" class="rating__label" for="rating3-5"><i class="rating__icon rating__icon--star flaticon-star"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-5" value="5" type="radio">
                   </div>
                </div>
            </div>
          </a>
      </div>
      <!-- <div class="col-md-3">
          <a href="#" class="text-decoration-none">
            <div class="list-box">
                 <div class="list-company"> 
                      <img src="{{ asset('assets/images/company/1.png')}}" width="70px" alt="">
                      <div>
                        <span class="ps-3 text-dark">Spinfluence</span>
                        <span class="ps-3 small text-primary">www.mexipass.com</span>
                      </div>
                  </div>
                  <p class="text-primary">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  <div id="full-stars-example-two">
                <div class="rating-group">
                    <input disabled checked class="rating__input rating__input--none" name="rating3" id="rating3-none" value="0" type="radio">
                    <label aria-label="1 star" class="rating__label" for="rating3-1"><i class="rating__icon rating__icon--star icon-star-full"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-1" value="1" type="radio">
                    <label aria-label="2 stars" class="rating__label" for="rating3-2"><i class="rating__icon rating__icon--star icon-star-full"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-2" value="2" type="radio">
                    <label aria-label="3 stars" class="rating__label" for="rating3-3"><i class="rating__icon rating__icon--star icon-star-full"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-3" value="3" type="radio">
                    <label aria-label="4 stars" class="rating__label" for="rating3-4"><i class="rating__icon rating__icon--star icon-star-full"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-4" value="4" type="radio">
                    <label aria-label="5 stars" class="rating__label" for="rating3-5"><i class="rating__icon rating__icon--star icon-star-full"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-5" value="5" type="radio">
                   </div>
                </div>
            </div>
          </a>
      </div>
      <div class="col-md-3">
          <a href="#" class="text-decoration-none">
            <div class="list-box">
                 <div class="list-company"> 
                      <img src="{{ asset('assets/images/company/1.png')}}" width="70px" alt="">
                      <div>
                        <span class="ps-3 text-dark">Spinfluence</span>
                        <span class="ps-3 small text-primary">www.mexipass.com</span>
                      </div>
                  </div>
                  <p class="text-primary">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  <div id="full-stars-example-two">
                <div class="rating-group">
                    <input disabled checked class="rating__input rating__input--none" name="rating3" id="rating3-none" value="0" type="radio">
                    <label aria-label="1 star" class="rating__label" for="rating3-1"><i class="rating__icon rating__icon--star icon-star-full"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-1" value="1" type="radio">
                    <label aria-label="2 stars" class="rating__label" for="rating3-2"><i class="rating__icon rating__icon--star icon-star-full"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-2" value="2" type="radio">
                    <label aria-label="3 stars" class="rating__label" for="rating3-3"><i class="rating__icon rating__icon--star icon-star-full"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-3" value="3" type="radio">
                    <label aria-label="4 stars" class="rating__label" for="rating3-4"><i class="rating__icon rating__icon--star icon-star-full"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-4" value="4" type="radio">
                    <label aria-label="5 stars" class="rating__label" for="rating3-5"><i class="rating__icon rating__icon--star icon-star-full"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-5" value="5" type="radio">
                   </div>
                </div>
            </div>
          </a>
      </div>
      <div class="col-md-3">
          <a href="#" class="text-decoration-none">
            <div class="list-box">
                 <div class="list-company"> 
                      <img src="{{ asset('assets/images/company/1.png')}}" width="70px" alt="">
                      <div>
                        <span class="ps-3 text-dark">Spinfluence</span>
                        <span class="ps-3 small text-primary">www.mexipass.com</span>
                      </div>
                  </div>
                  <p class="text-primary">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  <div id="full-stars-example-two">
                <div class="rating-group">
                    <input disabled checked class="rating__input rating__input--none" name="rating3" id="rating3-none" value="0" type="radio">
                    <label aria-label="1 star" class="rating__label" for="rating3-1"><i class="rating__icon rating__icon--star icon-star-full"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-1" value="1" type="radio">
                    <label aria-label="2 stars" class="rating__label" for="rating3-2"><i class="rating__icon rating__icon--star icon-star-full"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-2" value="2" type="radio">
                    <label aria-label="3 stars" class="rating__label" for="rating3-3"><i class="rating__icon rating__icon--star icon-star-full"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-3" value="3" type="radio">
                    <label aria-label="4 stars" class="rating__label" for="rating3-4"><i class="rating__icon rating__icon--star icon-star-full"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-4" value="4" type="radio">
                    <label aria-label="5 stars" class="rating__label" for="rating3-5"><i class="rating__icon rating__icon--star icon-star-full"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-5" value="5" type="radio">
                   </div>
                </div>
            </div>
          </a>
      </div>
      <div class="col-md-3">
          <a href="#" class="text-decoration-none">
            <div class="list-box">
                 <div class="list-company"> 
                      <img src="{{ asset('assets/images/company/1.png')}}" width="70px" alt="">
                      <div>
                        <span class="ps-3 text-dark">Spinfluence</span>
                        <span class="ps-3 small text-primary">www.mexipass.com</span>
                      </div>
                  </div>
                  <p class="text-primary">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  <div id="full-stars-example-two">
                <div class="rating-group">
                    <input disabled checked class="rating__input rating__input--none" name="rating3" id="rating3-none" value="0" type="radio">
                    <label aria-label="1 star" class="rating__label" for="rating3-1"><i class="rating__icon rating__icon--star icon-star-full"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-1" value="1" type="radio">
                    <label aria-label="2 stars" class="rating__label" for="rating3-2"><i class="rating__icon rating__icon--star icon-star-full"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-2" value="2" type="radio">
                    <label aria-label="3 stars" class="rating__label" for="rating3-3"><i class="rating__icon rating__icon--star icon-star-full"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-3" value="3" type="radio">
                    <label aria-label="4 stars" class="rating__label" for="rating3-4"><i class="rating__icon rating__icon--star icon-star-full"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-4" value="4" type="radio">
                    <label aria-label="5 stars" class="rating__label" for="rating3-5"><i class="rating__icon rating__icon--star icon-star-full"></i></label>
                    <input class="rating__input" name="rating3" id="rating3-5" value="5" type="radio">
                   </div>
                </div>
            </div>
          </a>
      </div> -->
    </div>
  </div>
</section>
<section class="testimonial-wrapper py-5">
  <div class="container">
         <div class="text-center mb-5">
            <div class="title-wrap m-auto">
              <h2>What Our Candidates Say</h2>
              <p class="mb-0">Discover the voices of success! Our candidates speak for themselves about their<span class="d-md-block"> transformative experiences</span></p>
           </div>
        </div>
    <div class="row align-items-center">
      <div class="col-md-6">
        <div>
          <img src="{{ asset('assets/images/test-img.png')}}" class="img-fluid" alt="">
        </div>
      </div>
      <div class="col-md-6">
      <div id="carouselExampleIndicators" class="carousel slide overflow-hidden" data-bs-ride="carousel">
        <!-- <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div> -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="content-wrap">
              <div class="clients-wrapper mb-5">
                <p>This job portal is a game-changer! The detailed job listings and comprehensive profiles give a clear picture of what employers are looking for. The blog section with career advice is an excellent added bonus.</p>
                <p>The platform's commitment to user success is evident. The email alerts for application status updates keep you in the loop.</p>
              </div>
              <div class="user-img ms-5">
                <div class="d-flex align-items-center">
                  <img src="{{ asset('assets/images/user.jpg')}}" alt="">
                  <h5 class="ps-3">Jonathon Smith <span class="d-block"> Marketing Specialist</span></h5>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
          <div class="content-wrap">
              <div class="clients-wrapper mb-5">
                <p>This job portal is a game-changer! The detailed job listings and comprehensive profiles give a clear picture of what employers are looking for. The blog section with career advice is an excellent added bonus.</p>
                <p>The platform's commitment to user success is evident. The email alerts for application status updates keep you in the loop.</p>
              </div>
              <div class="user-img ms-5">
                <div class="d-flex align-items-center">
                  <img src="{{ asset('assets/images/user.jpg')}}" alt="">
                  <h5 class="ps-3">Jonathon Smith <span class="d-block"> Marketing Specialist</span></h5>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="content-wrap">
              <div class="clients-wrapper mb-5">
                <p>This job portal is a game-changer! The detailed job listings and comprehensive profiles give a clear picture of what employers are looking for. The blog section with career advice is an excellent added bonus.</p>
                <p>The platform's commitment to user success is evident. The email alerts for application status updates keep you in the loop.</p>
              </div>
              <div class="user-img ms-5">
                <div class="d-flex align-items-center">
                  <img src="{{ asset('assets/images/user.jpg')}}" alt="">
                  <h5 class="ps-3">Jonathon Smith <span class="d-block"> Marketing Specialist</span></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      </div>
    </div>
  </div>
</section>
<section class="py-5 py-md-6 blog-wrapper">
  <div class="container">
      <div class="text-center mb-5">
            <div class="title-wrap m-auto">
              <h2>Upcoming activities close to you</h2>
              <p class="mb-0">Discover the voices of success! Our candidates speak for themselves about their<span class="d-md-block"> transformative experiences</span></p>
           </div>
        </div>
    <div class="row">
      <div class="col-md-3">
        <div class="card">
          <div class="blog-img">
          <img src="{{ asset('assets/images/Listing-image-6.png')}}" class="card-img-top" alt="...">
          <span>Aug 30, 2024</span>
          </div>
          <div class="card-body">
            <a class="fs-5 text-decoration-none title" href="#">The Best roller coaster ride in the world</a>
            <p class="card-text">Ut id mauris erat. Pellentesque ultrices, tortor ut congue auctor, ex dui por ta augue, vel accumsan...</p>
            <a href="#">Read more</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="blog-img">
          <img src="{{ asset('assets/images/Listing-image-7.png')}}" class="card-img-top" alt="...">
          <span>Aug 30, 2024</span>
          </div>
          <div class="card-body">
            <a class="fs-5 text-decoration-none title" href="#">The Best roller coaster ride in the world</a>
            <p class="card-text">Ut id mauris erat. Pellentesque ultrices, tortor ut congue auctor, ex dui por ta augue, vel accumsan...</p>
            <a href="#">Read more</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="blog-img">
          <img src="{{ asset('assets/images/Listing-image-8.png')}}" class="card-img-top" alt="...">
          <span>Aug 30, 2024</span>
          </div>
          <div class="card-body">
            <a class="fs-5 text-decoration-none title" href="#">The Best roller coaster ride in the world</a>
            <p class="card-text">Ut id mauris erat. Pellentesque ultrices, tortor ut congue auctor, ex dui por ta augue, vel accumsan...</p>
            <a href="#">Read more</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="blog-img">
          <img src="{{ asset('assets/images/Listing-image-6.png')}}" class="card-img-top" alt="...">
          <span>Aug 30, 2024</span>
          </div>
          <div class="card-body">
            <a class="fs-5 text-decoration-none title" href="#">The Best roller coaster ride in the world</a>
            <p class="card-text">Ut id mauris erat. Pellentesque ultrices, tortor ut congue auctor, ex dui por ta augue, vel accumsan...</p>
            <a href="#">Read more</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection