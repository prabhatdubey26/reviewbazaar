
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ReviewBazaar Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset("admin/assets/vendors/feather/feather.css")}}">
    <link rel="stylesheet" href="{{ asset("admin/assets/vendors/mdi/css/materialdesignicons.min.css")}}">
    <link rel="stylesheet" href="{{ asset("admin/assets/vendors/ti-icons/css/themify-icons.css")}}">
    <link rel="stylesheet" href="{{ asset("admin/assets/vendors/font-awesome/css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{ asset("admin/assets/vendors/typicons/typicons.css")}}">
    <link rel="stylesheet" href="{{ asset("admin/assets/vendors/simple-line-icons/css/simple-line-icons.css")}}">
    <link rel="stylesheet" href="{{ asset("admin/assets/vendors/css/vendor.bundle.base.css")}}">
    <link rel="stylesheet" href="{{ asset("admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css")}}">
    <!-- endinject -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset("admin/assets/css/style.css")}}" >
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
    <script src="{{ asset("admin/assets/vendors/js/vendor.bundle.base.js")}}"></script>
    <script src="{{ asset("admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js")}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset("admin/assets/js/off-canvas.js")}}"></script>
    <script src="{{ asset("admin/assets/js/template.js")}}"></script>
    <script src="{{ asset("admin/assets/js/settings.js")}}"></script>
    <script src="{{ asset("admin/assets/js/hoverable-collapse.js")}}"></script>
    <script src="{{ asset("admin/assets/js/todolist.js")}}"></script>
    <!-- endinject -->
  </body>
</html>