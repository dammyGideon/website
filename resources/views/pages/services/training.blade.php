@extends('layouts.app')

@section('content')
@include('inc.nav');


	<!-- Start Page Title Area -->
    <div class="page-title-area item-bg-1">
        <div class="container">
            <div class="page-title-content">
                <h2>Training</h2>
                <ul>
                    <li>
                        <a href="./">
                            Home
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </li>
                    <li>Training</li>
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


                        <h2>Training</h2>

                            <p style="text-align: justify;">Want to become a pro in data analytics? Be it for a change in career, academic research purposes or to simply provide data-driven business solutions, Datagenius is your go-to place. We will take you from whatever stage you are to and beyond the highest height of the field, you have dreamt of through inclusive hands-on training experience and engagement with real projects.</p>


                        </div>
                    </div>
                </div>
                <!-- style="background-color: #f0f1f8" -->
{{--                <div class="col-lg-4 col-md-12">--}}
{{--                    <aside class="widget-area" id="secondary">--}}
{{--                        <section class="widget widget-peru-posts-thumb">--}}
{{--                            <h3 class="widget-title">Request for this service</h3>--}}

{{--                            <a href="https://wa.me/2348131180549?text=My%20Training%20Request%0A%0AName%3A%0A%0AEmail%3A%0A%0ADescription%3A" class="default-btn">Chat with our representative</a>--}}
{{--                        </section>--}}


{{--                    </aside>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
    <!-- End Blog Details Area -->



@include('inc.footer');
@endsection
