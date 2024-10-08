<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.dashboard') }}">
        <i class="mdi mdi-grid-large menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item nav-category">Masters</li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon mdi mdi-floor-plan"></i>
        <span class="menu-title">Masters</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link {{ request()->is('admin/pages*') ? 'active' : '' }}" href="{{ route('pages.index') }}">Pages</a></li>
          <li class="nav-item"> <a class="nav-link {{ request()->is('admin/categories*') ? 'active' : '' }}" href="{{ route('categories.index') }}">Category</a></li>
          <li class="nav-item"> <a class="nav-link {{ request()->is('admin/company*') ? 'active' : '' }}" href="{{ route('company.index') }}">Company</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('blog.index') }}">
        <i class="menu-icon fa fa-vcard-o"></i>
        <span class="menu-title">Blogs</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('users.index') }}">
        <i class="menu-icon fa fa-user"></i>
        <span class="menu-title">Users</span>
      </a>
    </li>
  </ul>
</nav>