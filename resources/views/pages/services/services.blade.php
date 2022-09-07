@extends('layouts.app')

@section('content')
@include('inc.nav');


<!-- Start Page Title Area -->
<div class="page-title-area item-bg-1">
    <div class="container">
        <div class="page-title-content">
            <h2>Services</h2>
            <ul>
                <li>
                    <a href="./">
                        Home
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </li>
                <li>Services</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Box Area -->
<section class="box-area m-0 pt-100 pb-70" style="background-color: #f0f1f8">
    <div class="container">
        <div class="section-title">
            <h2>Services</h2>
        </div>
    <div class="container">

        <div class="row">
            @php
                $services=Illuminate\Support\Facades\DB::table('services')->get();
            @endphp

            @foreach ($services as $service )

            @php
                 $services_cats=Illuminate\Support\Facades\DB::table('service_categories')
                 ->where('id',$service->id)->pluck('category');

            @endphp
            <div class="col-lg-4 col-md-6">
                <div class="single-box single-box-2 bg-4">
                    <i class="flaticon-strategy"></i>
                    @foreach ($services_cats as $services_cat )
                         <h3>{{ $services_cat }}</h3>
                    @endforeach
                    <p>{{ $service->short_description }} </p>
                    <a class="default-btn" href="datacollection">Read More</a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- End Box Area -->




<section class="client-area ptb-100">
    <div class="container">
        <div class="section-title">
            <!-- <span>Press Coverage</span> -->
            <h2>What Our Clients Say</h2>
        </div>
        @php
            $review=Illuminate\Support\Facades\DB::table('reviews')->get();
        @endphp
        <div class="row align-items-center client-bg">
            <div class="col-lg-12 p-0">
                <div class="client-details-wrap owl-carousel owl-theme">
                    @foreach ($review as $reviews)
                    <div class="client-details">
                        <h3>{{ $reviews->name }}</h3>
                        <i class="flaticon-quote"></i>
                        <small>Research Writing in Environmental Sustainability</small>
                        <p class="text-center">{{ $reviews->message }}</p>
                        <p class="text-center"><a href="{{ $reviews->linkedIn }}" target="_blank"><i class="fa fa-linkedin"></i></a></p>
                        <ul>
                            <?php
                                $review=$reviews->rate;
                                for($i=0; $i<Str::length($review); $i++){
                                    for($j=0; $j<$review[$i]; $j++){
                                        echo'
                                        <li><i class="fa fa-star"></i></li>';
                                    }
                                }
                            ?>
                        </ul>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-12 p-0" style="margin-bottom: 20px">
                <div class="pagenavigation-area">
                    <a href="testimonial" class="default-btn">All Reviews</a>
                        &nbsp;&nbsp;&nbsp;
                    <a href="{{ asset('/review') }}" class="default-btn">Add Review</a>
                </div>
            </div>
        </div>

    </div>
</section>		<!-- End Client Area -->



<!-- Start Client Area -->
<section class="client-area ptb-100">
    <div class="container">
        <div class="section-title">

        </div>

        <div class="row align-items-center client-bg">
            <div class="col-lg-12 p-0">
                <div class="client-img">
                    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                   <div class="elfsight-app-7ae43463-1881-4d66-adee-1d07d6aa22c7"></div>
                </div>
            </div>
        </div>



    </div>
</section>
<!-- End Client Area -->






@include('inc.footer');
@endsection
