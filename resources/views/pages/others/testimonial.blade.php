
@extends('layouts.app')

@section('content')
@include('inc.nav');


<div class="container">
    <div class="page-title-content">
        <h2>Testimonial</h2>
        <ul>
            <li>
                <a href="./">
                    Home
                    <i class="fa fa-chevron-right"></i>
                </a>
            </li>
            <li>Testimonial</li>
        </ul>
    </div>
</div>
</div>
<!-- End Page Title Area -->

<!-- Start Client Area -->
<section class="client-area client-page pt-100 pb-70">
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="client-details">
                <!-- <img src="assets/img/client-img/1.jpg" alt=""> -->
                @php
                    $reviews =App\Models\review::get();

                    foreach($reviews as $review ){

                    }
                @endphp
                <h3>{{$review->name}}</h3>
                <!-- <span>Chairman and founder</span> -->
                <i class="flaticon-quote"></i>
                <p>{{$review->message}}</p>
                <ul>
                    <?php
                    $stars=$review->rate;
                    for($i=0; $i<Str::length($stars); $i++){
                        for($j=0; $j<$stars[$i]; $j++){
                            echo'
                               <li><i class="fa fa-star"></i></li>
                               ';
                        }
                    }
                    ?>
                </ul>

            </div>
        </div>

    </div>
</div>
</section>
<!-- End Client Area -->


@include('inc.footer');
@endsection
