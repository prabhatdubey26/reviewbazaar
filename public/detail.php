<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
    <title>Review Bazzar</title>
    <link rel="stylesheet" href="css/app.min.css">
    <link rel="stylesheet" href="font/flaticon_alcebo.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
</head>
<body>
<?php
   require_once('inc/header1.php');
   require_once('inc/userlogin.php');
?>
<section class="hero-banner-inner">
  <!-- <div class="banner-img">
    <img src="assets/images/banner.jpg" alt="Review Bazzar" class="img-fluid">
  </div> -->
  <div class="container">
    <div class="row align-items-cneter justify-content-center pt-5">
      <div class="col-md-7">
          <div class="heading-wrapper">
            <div class="text-center text-white">
              <h1 class="fw-semibold px-4 px-lg-0 fs-4 text-uppercase text-white">Best in Travel Insurance Company</h1>
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
<section class="py-6 bg-light list-wrapper detailsList">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-9">
        <div class="list-wraps bg-white p-4">
            <div class="d-lg-flex mb-3 border-bottom rounded-3 pb-4">
                <div class="list-style1">
                    <img class="img-fluid" src="assets/images/compnay-logo.jpg" alt="aardy.com">
                </div>
                <div class="list-style1 ps-lg-5 d-lg-flex align-items-start justify-content-between w-100">
                    <div class="box-styles">
                        <p><a class="text-decoration-none fs-5 text-dark" href="#">Darlene Robertson</a></p>
                        <ul class="mb-2">
                            <li><a href="#"><i class="flaticon-rate  me-1"></i> Rating score 4.9</a></li>
                            <li><a href="#"><i class="flaticon-visibility me-1"></i> 27,497 reviews</a></li>
                        </ul>
                    </div>
                    <a class="btn btn-light" href="#"><span class="btn-title">aardy.com</span></a>
                </div>
            </div>

            <div class="rounded-3 border-bottom p-md-4">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <div class="user-icons">
                                BM
                            </div>
                            <div class="ps-3">
                                <h6 class="mb-0"><a class="text-decoration-none" href="#">Write a review</a></h6>
                            </div>
                        </div>
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
                </div>
            <div class="bg-white p-md-4 rounded-3">
                <div class="rounded-3 border-bottom pb-4">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <div class="user-icons">
                                BM
                            </div>
                            <div class="ps-3">
                                <h6 class="mb-0">Bronislava Mynbaeva</h6>
                                <small>1 Review</small>
                            </div>
                        </div>
                        <div>
                            <small class="mb-0">12 hours ago</small>
                        </div>
                    </div>
                </div>
                <div class="pt-4">
                    <h6>I communicated with two agents</h6>
                    <p class="mb-0">I communicated with two agents, Jason and Shana. Jason was on chat; clearly and professionally he explained the company's policy and answered our general questions. When we asked more detailed questions, he recommended to talk over the phone with Shana, and it was a good advice. Shana spent some time to go over the insurance policy, explaining its benefits and limitations. Eventually, she helped us to purchase the policy that most fits our requirements and conditions. Thank you both, Jason and Shana!</p>
                </div>
               
            </div> 
        </div> 
         
      </div>
      <div class="col-md-3">
        <div class="bg-white p-4 rounded-3">
         <form action='' metthod='POST'>
          <h5 class="mb-4">Location</h5>
            <select class="form-select" aria-label="Default select example">
              <option selected>United States</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
             <div class="mt-3">
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="City or Zip Code">
             </div>
         </form>
        </div>
        <div class="bg-white p-4 rounded-3 mt-4">
          <h5 class="mb-4">Aardy.com</h5>
           <img class="img-fluid rounded-3 border p-2 bg-light" src="assets/images/Listing-image-7.png" alt="">
           <div class="pt-3">
           <h6>Insurance - Compare & Save, Quickly</h6>
           <p>Aardy.com brings world-class insurance to our customers, so that they can travel with confidence. Give us 2 minutes, and we will show you our marketplace of insurances available to you. We treat our partners and suppliers fairly, and look to build lifetime relationships. We nurture our staff, and treat them with love and compassion. We work hard in our community, pay our taxes, and support local businesses when possible. </p>
           </div>
        </div>
      </div>
    </div>
  </div>
</section>




<footer class="pt-md-6">
  <div class="container">
      <div class="row pb-4">
        <div class="col-md-3">
          <img src="assets/images/logo.png" width="180px" alt="">
          <p class="pt-3">Donec sollicitudin metus eu dictum consectetur. Morbi tempor nulla sit amet bibendum maxi mus. Vestibulum at enim at sapiend.</p>
        </div>
        <div class="col-md">
          <h5 class="pb-3">Community</h5>
          <ul>
            <li><a href="#">Bank </a></li>
            <li><a href="#">Travel Insurance Company </a></li>
            <li><a href="#">Car Dealer </a></li>
            <li><a href="#">Furniture Store </a></li>
            <li><a href="#">Jewelry Store </a></li>
            <li><a href="#">Clothing Store </a></li>
            <li><a href="#">Electronics & Technolog </a></li>
          </ul>
        </div>
        <div class="col-md">
        <h5 class="pb-3">Businesses</h5>
          <ul>
            <li><a href="#">Bank </a></li>
            <li><a href="#">Travel Insurance Company </a></li>
            <li><a href="#">Car Dealer </a></li>
            <li><a href="#">Furniture Store </a></li>
            <li><a href="#">Jewelry Store </a></li>
            <li><a href="#">Clothing Store </a></li>
            <li><a href="#">Electronics & Technolog </a></li>
          </ul>
        </div>
        <div class="col-md">
        <h5 class="pb-3">About us</h5>
          <ul>
            <li><a href="#">Bank </a></li>
            <li><a href="#">Travel Insurance Company </a></li>
            <li><a href="#">Car Dealer </a></li>
            <li><a href="#">Furniture Store </a></li>
            <li><a href="#">Jewelry Store </a></li>
            <li><a href="#">Clothing Store </a></li>
            <li><a href="#">Electronics & Technolog </a></li>
          </ul>
        </div>
        <div class="col-md">
        <h5 class="pb-3">Follow us on</h5>
          <ul class="follow-us">
            <li><a href="#"><i class="flaticon-facebook"></i></a></li>
            <li><a href="#"><i class="flaticon-twitter"></i></a></li>
            <li><a href="#"><i class="flaticon-photo"></i></a></li>
            <li><a href="#"><i class="flaticon-logo"></i></a></li>
            <li><a href="#"><i class="flaticon-youtube"></i></a></li>
          </ul>
        </div>
      </div>
  </div>
  <div class="border-top pt-4 legal">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <ul>
             <li><a href="#">Legal </a></li>
             <li><a href="#">Privacy Policy </a></li>
             <li><a href="#">Terms & Conditions </a></li>
             <li><a href="#">Guidelines for Reviewers </a></li>
             <li><a href="#">System status </a></li>
             <li><a href="#">Modern Slavery Statement </a></li>
            </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="border-top pt-4 legal">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <ul>
               <li><a href="#">© 2024 Review Bazzar. All rights reserved. </a></li>
            </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
</body>
<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<!-- <script src="js/owl.carousel.js"></script> -->
<script src="js/app.js"></script>
<script>

</script>
</html>