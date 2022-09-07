@extends('layouts.app')

@section('content')
@include('inc.nav');


<!-- Start Page Title Area -->
<div class="page-title-area item-bg-1">
    <div class="container">
        <div class="page-title-content">
            <h2>Data Outsourcing</h2>
            <ul>
                <li>
                    <a href="./">
                        Home
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </li>
                <li>Data Outsourcing</li>
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


                    <h2>Data Outsourcing</h2>

                        <p style="text-align: justify;">We have clients who rely on our efficiency. Thus, allows them to share their data with us, and we help them tap into digital technology to take care of their data quality management, data analysis, & decision making.</p>


                    </div>
                </div>
            </div>
            <!-- style="background-color: #f0f1f8" -->
{{--            <div class="col-lg-4 col-md-12">--}}
{{--                <aside class="widget-area" id="secondary">--}}
{{--                    <section class="widget widget-peru-posts-thumb">--}}
{{--                        <h3 class="widget-title">Request for this service</h3>--}}

{{--                        <a href="https://wa.me/2348131180549?text=My%20name%20is%20" class="default-btn">Chat with our representative</a>--}}
{{--                    </section>--}}


{{--                </aside>--}}
{{--            </div>--}}
        </div>
    </div>
</section>
<!-- End Blog Details Area -->


@include('inc.footer');
@endsection
