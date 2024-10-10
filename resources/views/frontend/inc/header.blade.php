<header class="bg-light header" id="myHeader">
<nav class="navbar navbar-expand-lg bg-white py-2">
  <div class="container">
    <a class="navbar-brand" href="/"><img src="{{ asset('assets/images/logo.png')}}" width="220px" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 navigation">
        <li class="nav-item">
          <a class="nav-link text-uppercase" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase" href="{{ route('category') }}">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase" href="{{ route('blog') }}">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link position-relative text-uppercase" href="{{ route('company.review') }}">Company Review
            <span class="position-absolute top-25 start-100 translate-middle badge rounded-pill bg-danger">
           WR
          </span>
          </a>
        </li>
      </ul>
      <div class="d-flex ps-5">
        @if(Auth::user())
            <div class="dropdown">
                <a href="#" style="text-decoration: none" class="mx-1" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->getInitials() }}
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                    <li><a class="dropdown-item" href="{{ url('profile') }}">View Profile</a></li>
                    <li>
                        <a class="dropdown-item" href="{{ url('logout') }}">Logout</a>
                    </li>
                </ul>
            </div>
        @else
            <a href="#" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <img src="{{ asset('assets/images/icons/user.png')}}" width="20px">
            </a>
        @endif
    </div>    
    </div>
  </div>
</nav>
</header>