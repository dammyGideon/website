
@extends('layouts.app')

@section('content')
@include('inc.nav');


		<!-- End Navbar Area -->
	<!-- Start Page Title Area -->
    <div class="page-title-area item-bg-1">
        <div class="container">
            <div class="page-title-content">
                <h2>Our Team</h2>
                <ul>
                    <li>
                        <a href="/">
                            Home
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </li>
                    <li>Team</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->


    <!-- Start Contact Box Area -->
    <section class="contact-box pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                <div class="card">

                 <div class="body">

                     @foreach ($team as $teams)
                     <div class="card">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-md-2">
                                    <img class="img-fluid mb-3"
                                         src="team/{{ $teams->image }}"
                                         alt="User profile picture">
                                </div>
                                <div class="col-md-8">
                                    <h3 class="">{{ $teams->name }}</h3>
                                    <p class="">{{ $teams->position}}</p>
                                </div>

                                <div class="col-md-2">
                                    <br/>
                                    <div class=""  style="font-size:30px;">
                                        <a href="{{ $teams->linkedIn }}"><i class='fa fa-linkedin-square'></i></a>
                                    </div>

                                    <button  data-toggle="modal" data-target="#modal-details">
                                        view
                                    </button>



                                </div>


                             </div>
                        </div>
                     </div>
                    @endforeach


                 </div>
                </div>


            </div>
        </div>
    </section>
    <!-- End Contact Box Area -->




    <div class="modal fade" id="modal-details">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Team details</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                {{ $teams->personal_details }}

            </div>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->



@include('inc.footer');
@endsection
