<div class="peru-nav">
    <div class="navbar-area fixed-top">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="{{ asset('/') }}" class="logo">
                <img src="{{asset('assets/img/dglogo2.png')}}" style="height: 50px;" alt="Peru Logo">
            </a>
        </div>

        <!-- Menu For Desktop Device -->
        <div class="main-nav peru-nav-style">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="./">
                        <img src="{{asset('assets/img/dglogo2.png')}}" style="height: 90px; width: 90px" alt="peru Logo">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="./" class="nav-link">Home</a>

                            </li>

                            <li class="nav-item">
                                <a href="{{asset('/services') }}" class="nav-link dropdown-toggle">Services</a>
                                <ul class="dropdown-menu dropdown-style">
                                    <li class="nav-item">
                                        <a href="{{ asset('/datacollection') }}" class="nav-link">Data Collection</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ asset('data-analysis')}}" class="nav-link">Data Analytics</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ asset('business-analytics')}}" class="nav-link">Business Analytics</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ asset('report-writing')}}" class="nav-link">Report Writing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ asset('data-outsourcing') }}" class="nav-link">Data Outsourcing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ asset('training') }}" class="nav-link">Training</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ asset('research-consultation') }}" class="nav-link">Consultation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ asset('market_survey') }}" class="nav-link">Market/Field Survey</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="{{ asset('about') }}" class="nav-link">About</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('blog.index') }}" class="nav-link">Blog</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ asset('contact') }}" class="nav-link">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">More</a>
                                <ul class="dropdown-menu dropdown-style">
                                    <li class="nav-item">
                                        <a href="{{ asset('library') }}" class="nav-link">Archive</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ asset('career') }}" class="nav-link">Career</a>
                                     </li>
                                </ul>
                            </li>

                    

                            <li class="nav-item">
                                @auth
                                @if (Auth()->user()->role_id ==1)
                                <a href="{{ asset('/superAdmin_dashboard') }}" class="nav-link">Account</a>
                                @elseif (Auth()->user()->role_id ==2)
                                <a href="{{ asset('/superAdmin_dashboard') }}" class="nav-link">Account</a>
                                @else
                                <a href="{{ asset('/superAdmin_dashboard') }}" class="nav-link">Account</a>
                                @endif

                                <li class="nav-item">
                                    <a class="d-lg-show" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                                @else
                                <a href="#" class="nav-link dropdown-toggle">Account</a>
                                <ul class="dropdown-menu dropdown-style">
                                    <li class="nav-item">
                                        <a href="{{ route('register') }}" class="nav-link">Register</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('login') }}" class="nav-link">Login</a>
                                    </li>
                                </ul>
                                @endauth
                            </li>
                        </ul>

                        <div class="others-option">
                            <a href="tel:+800-987-65-43" class="contact-number">
                                <i class="fa fa-phone"></i>
                                +2348131180549
                            </a>

                                <a class="default-btn" style="color: whitesmoke" data-toggle="modal" data-target="#modal-default">
                                    GET A QUOTE
                                </a>


                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->




<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Service Details</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{ asset('/service_details') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Fullname</label>
                <input type="text" name="full_name" class="form-control" required/>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" required/>
            </div>

            <div class="form-group">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control" required/>
            </div>

            <div class="form-group">
                <label>Fill Details here</label>
                <textarea id="compose-textarea" name="service" rows="4" cols="20" maxlength="200" class="form-control" required>
                </textarea>
            </div>


            <div class="form-group">
                <label>Uploads</label>
                <input type="file" name="file" class="form-control"/>
            </div>


            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn" style="background:#48887b; color:whitesmoke">Save changes</button>
              </div>
          </form>
        </div>

      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->



