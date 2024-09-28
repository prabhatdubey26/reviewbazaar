<header class="bg-light header" id="myHeader">
  <nav class="navbar navbar-expand-lg bg-light py-0">
  <div class="container">
    <a class="navbar-brand" href="/"><img src="{{ asset('assets/images/logo.png')}}" width="220px" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0 navigation">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="#">Write a review</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <div class="dropdown-menu px-3 rounded-0">
            <div class="row">
              @foreach($categories->chunk(4) as $chunk) <!-- Display in 4 columns -->
              <div class="col-sm-3">
                  <div class="text ps-3">
                      <ul>
                          @foreach($chunk as $category)
                              <li><a href="{{ url('categories', $category->slug) }}">{{ $category->name }}</a></li> <!-- Assuming the category has a 'name' attribute -->
                          @endforeach
                      </ul>
                  </div>
              </div>
          @endforeach
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('blog') }}">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact us</a>
        </li>
      </ul>
      <div class="d-flex ps-5">
        @if(Auth::user())
        <a href="#" class="mx-1" ><img src="{{ asset('assets/images/icons/user.png')}}" width="20px"></a>
        <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
        <a href="{{ url('logout') }}" class="mx-1" >
          Logout
        </a>
        @else
        <a href="#"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><img src="{{ asset('assets/images/icons/user.png')}}" width="20px"></a>
        @endif
     </div>
    </div>
  </div>
</nav>
</header>