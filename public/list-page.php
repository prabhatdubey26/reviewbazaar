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
<section class="py-6 bg-light list-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md">
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
          <h5 class="mb-4">Related categories</h5>
           <ul class="categories">
              <li><a href="#"><span>Accident Insurance Company</span> <span>38</span></a></li>
              <li><a href="#"><span>Auto Insurance Agency</span> <span>48</span></a></li>
              <li><a href="#"><span>Business Insurance Company</span> <span>88</span></a></li> 
              <li><a href="#"><span>Caravan and Insurance</span> <span>382</span></a></li> 
              <li><a href="#"><span>Commercial Insurance Company</span> <span>238</span></a></li> 
              <li><a href="#"><span>Cycle Insurance Company</span> <span>138</span></a></li> 
              <li><a href="#"><span>Dental Insurance Agency</span> <span>438</span></a></li> 
              <li><a href="#"><span>Disability Insurance Company</span> <span>138</span></a></li>
              <li><a href="#"><span>Funeral Insurance Company</span> <span>58</span></a></li>
              <li><a href="#"><span>Gadget Insurance Company</span> <span>95</span></a></li> 
           </ul>
        </div>
      </div>
      <div class="col-md-9">
        <div class="d-flex align-items-center justify-content-between pb-4">
          <a class="text-decoration-none text-dark" href="#">1-20 of 63 results</a>
          <form action="" class="fromsa">
              <div class="p-1 bg-white rounded rounded-pill shadow-sm">
                <div class="input-group">
                  <input type="search" placeholder="Searching Company or Categories" aria-describedby="button-addon1" class="form-control border-0 bg-white">
                  <div class="input-group-append">
                    <button id="button-addon1" type="submit" class="btn btn-link text-primary"><img src="assets/images/icons/search-interface-symbol.png" width="20px" alt=""></button>
                  </div>
                </div>
              </div>
            </form>
        </div>
       <div class="list-wraps bg-white p-4 rounded-3 d-flex mb-3">
          <div class="list-style1">
              <img class="rounded-circle" src="assets/images/user.jpg" alt="">
          </div>
        <div class="list-style1 ps-5 d-flex align-items-center justify-content-between w-100">
            <div class="box-styles">
                <p><a class="text-decoration-none fs-5 text-dark" href="detail.php">Darlene Robertson</a></p>
                <ul class="mb-2">
                  <li><a href="#"><i class="flaticon-rate  me-1"></i> Rating score 4.9</a></li>
                  <li><a href="#"><i class="flaticon-visibility me-1"></i> 27,497 reviews</a></li>
                </ul>
                <p>Plantation, United States</p>
                <div class="btn-group">
                    <a href="#" class="btn btn-light btn-sm rounded-pill me-2">Travel Agency</a>
                    <a href="#" class="btn btn-light btn-sm rounded-pill me-2">Financial</a>
                    <a href="#" class="btn btn-light btn-sm rounded-pill me-2">Consultant</a>
                    <a href="#" class="btn btn-light btn-sm rounded-pill me-2">Insurance</a>
                  </div>
              </div>
             <a class="btn btn-light" href="detail.php"><span class="btn-title">View Profile</span></a>
        </div>
       </div>
       <div class="list-wraps bg-white p-4 rounded-3 d-flex mb-3">
          <div class="list-style1">
              <img class="rounded-circle" src="assets/images/user.jpg" alt="">
          </div>
        <div class="list-style1 ps-5 d-flex align-items-center justify-content-between w-100">
            <div class="box-styles">
               <p><a class="text-decoration-none fs-5 text-dark" href="detail.php">Darlene Robertson</a></p>
                <ul class="mb-2">
                  <li><a href="#"><i class="flaticon-rate  me-1"></i> Rating score 4.9</a></li>
                  <li><a href="#"><i class="flaticon-visibility me-1"></i> 27,497 reviews</a></li>
                </ul>
                <p>Plantation, United States</p>
                <div class="btn-group">
                    <a href="#" class="btn btn-light btn-sm rounded-pill me-2">Travel Agency</a>
                    <a href="#" class="btn btn-light btn-sm rounded-pill me-2">Financial</a>
                    <a href="#" class="btn btn-light btn-sm rounded-pill me-2">Consultant</a>
                    <a href="#" class="btn btn-light btn-sm rounded-pill me-2">Insurance</a>
                  </div>
              </div>
             <a class="btn btn-light" href="detail.php"><span class="btn-title">View Profile</span></a>
        </div>
       </div>
       <div class="list-wraps bg-white p-4 rounded-3 d-flex mb-3">
          <div class="list-style1">
              <img class="rounded-circle" src="assets/images/user.jpg" alt="">
          </div>
        <div class="list-style1 ps-5 d-flex align-items-center justify-content-between w-100">
            <div class="box-styles">
               <p><a class="text-decoration-none fs-5 text-dark" href="detail.php">Darlene Robertson</a></p>
                <ul class="mb-2">
                  <li><a href="#"><i class="flaticon-rate  me-1"></i> Rating score 4.9</a></li>
                  <li><a href="#"><i class="flaticon-visibility me-1"></i> 27,497 reviews</a></li>
                </ul>
                <p>Plantation, United States</p>
                <div class="btn-group">
                    <a href="#" class="btn btn-light btn-sm rounded-pill me-2">Travel Agency</a>
                    <a href="#" class="btn btn-light btn-sm rounded-pill me-2">Financial</a>
                    <a href="#" class="btn btn-light btn-sm rounded-pill me-2">Consultant</a>
                    <a href="#" class="btn btn-light btn-sm rounded-pill me-2">Insurance</a>
                  </div>
              </div>
             <a class="btn btn-light" href="detail.php"><span class="btn-title">View Profile</span></a>
        </div>
       </div>
       <div class="list-wraps bg-white p-4 rounded-3 d-flex mb-3">
          <div class="list-style1">
              <img class="rounded-circle" src="assets/images/user.jpg" alt="">
          </div>
        <div class="list-style1 ps-5 d-flex align-items-center justify-content-between w-100">
            <div class="box-styles">
               <p><a class="text-decoration-none fs-5 text-dark" href="detail.php">Darlene Robertson</a></p>
                <ul class="mb-2">
                  <li><a href="#"><i class="flaticon-rate  me-1"></i> Rating score 4.9</a></li>
                  <li><a href="#"><i class="flaticon-visibility me-1"></i> 27,497 reviews</a></li>
                </ul>
                <p>Plantation, United States</p>
                <div class="btn-group">
                    <a href="#" class="btn btn-light btn-sm rounded-pill me-2">Travel Agency</a>
                    <a href="#" class="btn btn-light btn-sm rounded-pill me-2">Financial</a>
                    <a href="#" class="btn btn-light btn-sm rounded-pill me-2">Consultant</a>
                    <a href="#" class="btn btn-light btn-sm rounded-pill me-2">Insurance</a>
                  </div>
              </div>
             <a class="btn btn-light" href="detail.php"><span class="btn-title">View Profile</span></a>
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