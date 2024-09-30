<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png')}}">
    <title>Review Bazzar</title>
    <link rel="stylesheet" href="{{ asset('css/app.min.css')}}">
    <link rel="stylesheet" href="{{ asset('font/flaticon_alcebo.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.css')}}">
    <script async src="https://www.google.com/recaptcha/api.js"></script>
</head>
<body>
@include('frontend.inc.header')
@include('frontend.inc.userlogin')
@yield('content')
@include('frontend.inc.footer')
</body>
<script src="{{ asset('js/jquery-3.7.1.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('js/owl.carousel.js')}}"></script>
<script src="{{ asset('js/app.js')}}"></script>
<script>
$('#owl-carousel').owlCarousel({
    autoplay: true,
    rewind: false, 
    margin: 18,
    loop: true,
    responsiveClass: true,
    autoHeight: true,
    autoplayTimeout: 3000,
    smartSpeed: 800,
    nav: true,
    responsive: {
    0: {
      items: 2
    },

    600: {
      items: 4
    },

    1024: {
      items: 6
    },

    1366: {
      items: 7
    }
  }
});
</script>
<script>
  $(".navigation li").hover(function() {
  var isHovered = $(this).is(":hover");
  if (isHovered) {
    $(this).children("ul").stop().slideDown(300);
  } else {
    $(this).children("ul").stop().slideUp(300);
  }
});

</script>
</html>