@extends('layouts.app')

@section('content')
@include('inc.nav');


	<!-- Start Page Title Area -->
    <div class="page-title-area item-bg-1">
        <div class="container">
            <div class="page-title-content">
                <h2>Consultation</h2>
                <ul>
                    <li>
                        <a href="./">
                            Home
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </li>
                    <li>Consultation</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

        <!-- Start Blog Details Area -->
    <section class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details-desc">

                        <div class="article-content">


                        <h2>Consultation</h2>

                            <p style="text-align: justify;">“When the going gets tough, only the tough get going”, the going however gets easy when assisted by someone with proven experience in such or similar situation.  Are you stuck in the middle of your research and need the guidance of an expert in your field? Whether you are working on Energy, Agriculture, Business, Health, Education, Finance, Security, etc., which ever field you’re working on, our seasoned research experts are readily available to help you through. Congratulations in advance!</p>


                        </div>
                    </div>
                </div>
                <!-- style="background-color: #f0f1f8" -->
{{--                <div class="col-lg-4 col-md-12">--}}
{{--                    <aside class="widget-area" id="secondary">--}}
{{--                        <section class="widget widget-peru-posts-thumb">--}}
{{--                            <h3 class="widget-title">Request for this service</h3>--}}
{{--                                                            <p>Complete this brief form and we will reach out to you shortly.</p>--}}
{{--                                                                    <p class="text-warning">You need to <a href="login?redirect=http://datagenius.com.ng/research_consultation">login</a> first to see the form.</p>--}}



{{--                        </section>--}}


{{--                    </aside>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
    <!-- End Blog Details Area -->


@include('inc.footer');
@endsection
