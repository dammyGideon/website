@extends('layouts.app')

@section('content')
@include('inc.nav');

	<!-- Start Page Title Area -->
    <div class="page-title-area item-bg-1">
        <div class="container">
            <div class="page-title-content">
                <h2>Methodology Assistance/Data Analysis</h2>
                <ul>
                    <li>
                        <a href="./">
                            Home
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </li>
                    <li>Data Analytics</li>
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


                        <h2>Data Analytics</h2>

                            <p style="text-align: justify;">We understand the language of data and how best it can be told. We take your data through a complete process without leaving a step behind to achieve your research objectives. From wrangling to mining, to the creation of beautiful visualization and running of inferential analysis to derive meaningful insights and even far more complex statistical analytics, for whatever you need to make of your data you can count on us. (Quantitative and qualitative analyses).</p>

                        </div>
                    </div>
                </div>
                <!-- style="background-color: #f0f1f8" -->
{{--                <div class="col-lg-4 col-md-12">--}}
{{--                    <aside class="widget-area" id="secondary">--}}
{{--                        <section class="widget widget-peru-posts-thumb">--}}
{{--                            <h3 class="widget-title">Request for this service</h3>--}}
{{--                                                            <p>Complete this brief form and we will reach out to you shortly.</p>--}}
{{--                                                                    <p class="text-warning">You need to <a href="login?redirect=http://datagenius.com.ng/data_analysis">login</a> first to see the form.</p>--}}


{{--                        </section>--}}


{{--                    </aside>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
    <!-- End Blog Details Area -->


@include('inc.footer');
@endsection
