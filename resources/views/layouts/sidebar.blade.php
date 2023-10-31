
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
@if(Auth::user()->user_type == 1)

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin/dashboard')}}">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-2">Nurul-Yateem <sup></sup></div>
  </a>
  
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
  

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('admin/dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Admin Dashboard</span></a>
  </li>
  


  <li class="nav-item">
    <a class="nav-link" href="{{ route('admin/guidian') }}">
      <i class="fas fa-fw fa-folder"></i>
      <span>Guidian List</span></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link"  href="{{ route('admin/sponsor') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Sponsors Lists</span></a>
  </li>

    
  <li class="nav-item">
    <a class="nav-link">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Orphans  Lists</span></a>
  </li>
  
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
  

    <li class="nav-item">
      <a class="nav-link">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Admin Roles</span></a>
    </li>
    

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <li class="nav-item">
      <a class="nav-link" href="">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>News</span></a>
    </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  <li class="nav-item">
    <a class="nav-link" href="{{route('profile')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Profile</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{route('settings')}}">
      <i class="fas fa-fw fa-wrench"></i>
      <span>Settings</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('logout')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Logout</span></a>
  </li>

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  
@elseif(Auth::user()->user_type == 2)

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('sponsor/dashboard')}}">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-2">Nurul-Yateem <sup></sup></div>
  </a>



    <!-- Divider -->
    <hr class="sidebar-divider my-0">
  

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('sponsor/dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span> Dashboard</span></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link"  href="{{ route('sponsor') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Orphan Lists</span></a>
  </li>

  
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  <li class="nav-item">
    <a class="nav-link" href="{{route('profile')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Profile</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{route('settings')}}">
      <i class="fas fa-fw fa-wrench"></i>
      <span>Settings</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('logout')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Logout</span></a>
  </li>

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  
@elseif(Auth::user()->user_type == 3)

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('guidian/dashboard')}}">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-2">Nurul-Yateem <sup></sup></div>
  </a>
  

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
  
  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('guidian/dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span> Dashboard</span></a>
  </li>


  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  <li class="nav-item">
    <a class="nav-link" href="{{route('guidian/profile')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Profile</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('settings')}}">
      <i class="fas fa-fw fa-wrench"></i>
      <span>Settings</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('logout')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Logout</span></a>
  </li>

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  
@endif



  
  
</ul>