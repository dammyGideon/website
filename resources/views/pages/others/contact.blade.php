
@extends('layouts.app')

@section('content')
@include('inc.nav');


		<!-- End Navbar Area -->
	<!-- Start Page Title Area -->
    <div class="page-title-area item-bg-1">
        <div class="container">
            <div class="page-title-content">
                <h2>Contact Us</h2>
                <ul>
                    <li>
                        <a href="./">
                            Home
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->


    <!-- Start Contact Box Area -->
    <section class="contact-box pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-box">
                        <i class="fa fa-map-marker"></i>
                        <div class="content-title">
                            <h3>Office Address</h3>
                            <p>Engr. Adigun Shopping Complex, Road F, Tinubu Layout, Monatan, Ibadan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-box">
                        <i class="fa fa-envelope"></i>
                        <div class="content-title">
                            <h3>Email</h3>
                            <a href="#">datagenius.consultancy@gmail.com </a>
                            <a href="#">info@datagenius.com.ng</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="single-contact-box">
                        <i class="fa fa-phone"></i>
                        <div class="content-title">
                            <h3>Phone</h3>
                            <a href="+2348131180549">+2348131180549</a>
                            <a href="+2348076040842">+2348076040842</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Box Area -->

    <!-- Start Contact Area -->
    <section class="contact-area pb-100">
        <div class="container">
            <div class="section-title">
                <h3>Drop us a message for any query</h3>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                    @endif
                     <p></p>
                    <div class="contact-form">
                        <form action="{{ asset('/contact_message') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Your Name">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                        <input type="email" name="email" id="email" class="form-control"  placeholder="Your Email">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        @error('phone_number')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                        <input type="text" name="phone_number" id="phone_number"  class="form-control" placeholder="Your Phone">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        @error('comments')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                        <textarea name="comments" class="form-control" id="comments" cols="30" rows="5" placeholder="Your Message"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <button type="submit" name="contact_us" class="default-btn btn-two">
                                        <span class="label">Send Message</span>
                                        <i class='bx bx-plus'></i>
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div id="google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3956.470784903912!2d3.953002114389909!3d7.413032394651532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sEngr.%20Adigun%20Shopping%20Complex%2C%20Road%20F%2C%20Tinubu%20Layout%2C%20Monatan%2C%20Ibadan.!5e0!3m2!1sen!2sng!4v1582146368344!5m2!1sen!2sng" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->







@include('inc.footer');
@endsection
