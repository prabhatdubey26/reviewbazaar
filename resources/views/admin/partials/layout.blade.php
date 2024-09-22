
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ReviewBazaar Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset("backend/assets/vendors/feather/feather.css")}}">
    <link rel="stylesheet" href="{{ asset("backend/assets/vendors/mdi/css/materialdesignicons.min.css")}}">
    <link rel="stylesheet" href="{{ asset("backend/assets/vendors/ti-icons/css/themify-icons.css")}}">
    <link rel="stylesheet" href="{{ asset("backend/assets/vendors/font-awesome/css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{ asset("backend/assets/vendors/typicons/typicons.css")}}">
    <link rel="stylesheet" href="{{ asset("backend/assets/vendors/simple-line-icons/css/simple-line-icons.css")}}">
    <link rel="stylesheet" href="{{ asset("backend/assets/vendors/css/vendor.bundle.base.css")}}">
    <link rel="stylesheet" href="{{ asset("backend/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css")}}">
    <!-- endinject -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset("backend/assets/css/style.css")}}" >
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset("assets/images/logo.png") }}" />
  </head>
  <body>
    <div class="container-scroller">
      @include('admin.partials.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        @include('admin.partials.sidebar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            @yield('content')
          </div>
           @include('admin.partials.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- plugins:js -->
    <script src="{{ asset("backend/assets/vendors/js/vendor.bundle.base.js")}}"></script>
    <script src="{{ asset("backend/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js")}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset("backend/assets/js/off-canvas.js")}}"></script>
    <script src="{{ asset("backend/assets/js/template.js")}}"></script>
    <script src="{{ asset("backend/assets/js/settings.js")}}"></script>
    <script src="{{ asset("backend/assets/js/hoverable-collapse.js")}}"></script>
    <script src="{{ asset("backend/assets/js/todolist.js")}}"></script>
    <!-- endinject -->
  </body>
</html>