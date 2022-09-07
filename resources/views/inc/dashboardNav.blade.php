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
    <a href="#" class="brand-link">
      <img src="{{ asset('assets/img/dgicon.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Datagenius</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
            <a href="{{ asset('home') }}" class="nav-link" style="background: #48887b;">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{ asset('/dashboard-service') }}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Services category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ asset('data_collection') }}" class="nav-link">
                  <i class="fas fa-tasks nav-icon"></i>
                  <p>Data Collection</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('data_analysis') }}" class="nav-link">
                  <i class="fas fa-tasks nav-icon"></i>
                  <p>Data Analytics</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ asset('business_analytics') }}" class="nav-link">
                  <i class="fas fa-tasks nav-icon"></i>
                  <p>Business Analytics</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('report_writing') }}" class="nav-link">
                  <i class="fas fa-tasks nav-icon"></i>
                  <p>Report Writing</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('training') }}" class="nav-link">
                  <i class="fas fa-tasks nav-icon"></i>
                  <p>Training</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="consultation" class="nav-link">
                  <i class="fas fa-tasks nav-icon"></i>
                  <p>Consultation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('field_survey') }}" class="nav-link">
                  <i class="fas fa-tasks nav-icon"></i>
                  <p>Market/Field Survey</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ asset('data_outgoing') }}" class="nav-link">
                  <i class="fas fa-tasks nav-icon"></i>
                  <p>Data Outsourcing</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="{{ route('conversation.chat') }}" class="nav-link">
              <i class="nav-icon fas fa-comment-dots"></i>
              <p>Chat</p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{ route('payment') }}" class="nav-link">
              <i class="nav-icon fas fa-credit-card"></i>
              <p>Payment</p>
            </a>
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

