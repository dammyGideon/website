<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>


    </ul>

  </nav>
  <!-- /.navbar -->


   <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('assets/img/dgicon.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Datagenius</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="pb-3 mt-3 mb-3 user-panel d-flex">
        <div class="image">
          <img src="/profile/{{Auth::user()->avatar}}" style="background: floralwhite" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->first_name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{ asset('/superAdmin_dashboard') }}" class="nav-link" style="background: #48887b;">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users/Admin
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ asset('user_list') }}" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('admin_list') }}" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Admins</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{ asset('current_project') }}" class="nav-link">
              <i class="nav-icon fa fa-folder-open" aria-hidden="true"></i>
              <p>Current Project</p>
            </a>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-satellite-dish"></i>
              <p>
               Services Entry
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ asset('service_create') }}" class="nav-link">
                    <i class="nav-icon fas fa-satellite-dish"></i>
                    <p>Services</p>
                  </a>
                </li>

                <li class="nav-item">
                    <a href="{{ asset('service_category') }}" class="nav-link">
                      <i class="nav-icon fas fa-satellite-dish"></i>
                      <p>Service Category</p>
                    </a>
                  </li>


              </ul>


          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                ProjectsPerUser
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ asset('project_per_user') }}" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>view Project</p>
                </a>
              </li>

            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-blog"></i>
              <p>
                Blog
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ asset('/category') }}" class="nav-link">
                  <i class="fas fa-user nav-icon"></i>
                  <p>Categories</p>

                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('/all_post') }}" class="nav-link">
                  <i class="fas fa-eye nav-icon"></i>
                  <p>All Post</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Team
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ asset('team_reg') }}" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Team</p>
                </a>
              </li>

            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ asset('/profile') }}" class="nav-link">
                  <i class="fas fa-user nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('/change_password') }}" class="nav-link">
                  <i class="fas fa-eye nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ asset('/header') }}" class="nav-link">
                  <i class="fas fa-eye nav-icon"></i>
                  <p>Header Settings</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ asset('/footer') }}" class="nav-link">
                  <i class="fas fa-eye nav-icon"></i>
                  <p>footer Settings</p>
                </a>
              </li>

            </ul>
          </li>




          <li class="nav-item">

                <a class="nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                      <i class="fas fa-sign-out-alt nav-icon"></i>
                      <p>Logout</p>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


  {{-- logout --}}

