<body class="hold-transition sidebar-mini">
  <div class="wrapper">
  
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="{{asset('images/carol.jpg')}}" alt="" height="260" width="260">
    </div>
  
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark justify-content-start">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item d-sm-inline">
        <a href="" class="nav-link">Prince Sanguan</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  
  
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a class="brand-link" style="cursor: default;">
        <span class="brand-text font-weight-light">Hi! Prince Sanguan</span>
      </a>
  
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex"> 
          <div class="info">
            <a style="cursor: default;">Hello Prince!</strong></a>
          </div>
        </div>
  
       <!-- Sidebar Menu -->
       <nav class="mt-2">
        <ul
          class="nav nav-pills nav-sidebar flex-column"
          data-widget="treeview"
          role="menu"
          data-accordion="false"
        >
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
  
           <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link {{ Route::is('dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Add Project
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>