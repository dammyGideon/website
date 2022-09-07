@extends('layouts.app')

@section('content')
@include('inc.nav');


	<!-- Start Page Title Area -->
    <div class="page-title-area item-bg-1">
        <div class="container">
            <div class="page-title-content">
                <h2>Archive</h2>
                <ul>
                    <li>
                        <a href="./">
                            Home
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </li>
                    <li>Archive</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!--  Start Project Area -->
    <div class="project-area pt-100 pb-70">
        <div class="container">
           
            <!-- /.sorting-menu -->
            <div id="Container" class="row">
                <div class="single-portfolio-item col-lg-4 col-sm-6 1 5 mix">
                    <div class="portfolio-inner" style="margin-bottom: 0px">
                        <img class="portfolio-img image-fluid" src="{{ asset('assets/img/Computer_Mediated_Lannguage_Learning.jpeg') }}" alt="portfolio-img">
                        <div class="portfolio-hover">
                            <div class="hover-text">
                                <a href="doc?lib=76dcfbcd">
                                    <h4 style="color: black">The role of Computer Mediated Communication in Foreign Language Learning</h4>
                                    <!-- <span>business</span> -->
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="single-box single-box-2 bg-5 text-left">
                        <a href="doc?lib=76dcfbcd" style="color: black">The role of Computer Mediated Communication in Foreign Language Learning</a>
                    </div>
                </div>
                <div class="single-portfolio-item col-lg-4 col-sm-6 1 5 mix">
                    <div class="portfolio-inner" style="margin-bottom: 0px">
                        <img class="portfolio-img img-fluid" src="{{ asset('assets/img/Youth_and_Agriculture_entrepreneurship.jpg') }}" alt="portfolio-img">
                        <div class="portfolio-hover">
                            <div class="hover-text">
                                <a href="doc?lib=3d4cc005">
                                    <h4 style="color: black">Agricultural Entrepreneurship and Youth Perception</h4>
                                    <!-- <span>business</span> -->
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="single-box single-box-2 bg-5 text-left">
                        <a href="doc?lib=3d4cc005" style="color: black">Agricultural Entrepreneurship and Youth Perception</a>
                    </div>
                </div>
                                    <div class="single-portfolio-item col-lg-4 col-sm-6 1 5 mix">
                    <div class="portfolio-inner" style="margin-bottom: 0px">
                        <img class="portfolio-img img-fluid" src="{{ asset('assets/img/Human_right_and_development.jpeg') }}" alt="portfolio-img">
                        <div class="portfolio-hover">
                            <div class="hover-text">
                                <a href="doc?lib=41bcc01c">
                                    <h4 style="color: black">Human Rights and Economic Development in Nigeria</h4>
                                    <!-- <span>business</span> -->
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="single-box single-box-2 bg-5 text-left">
                        <a href="doc?lib=41bcc01c" style="color: black">Human Rights and Economic Development in Nigeria</a>
                    </div>
                </div>
                                </div>
        </div>
    </div>
    <!--  End Project Area -->



@include('inc.footer');
@endsection
