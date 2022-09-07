@extends('layouts.app')

@section('content')
@include('inc.nav');


<!-- Start Page Title Area -->
<div class="page-title-area item-bg-1">
    <div class="container">
        <div class="page-title-content">
            <h2>Data Collection</h2>
            <ul>
                <li>
                    <a href="./">
                        Home
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </li>
                <li>Data Collection</li>
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


                            <h2>Data Collection</h2>

                            <p style="text-align: justify;">Our team of experts can help you collect the necessary data needed to accomplish your research objectives.</p>

                            <p style="text-align: justify;">The sources include internal or external; primary, secondary or third-party sources.</p>
                        </div>
                    </div>
                </div>

               
            </div>
        </div>
    </section>
    <!-- End Blog Details Area -->






@include('inc.footer');
@endsection
