
@extends('layouts.app')

@section('content')
@include('inc.nav');

<div class="page-title-area item-bg-1">
    <div class="container">
        <div class="page-title-content">
            <h2>About Us</h2>
            <ul>
                <li>
                    <a href="./">
                        Home
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->


<!-- End Team Area -->

<!-- Start About Us Area -->
<section class="about-us-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-title">
                    <h2>Who We Are</h2>
                    <!-- <h2>We're more than academic consultants</h2> -->
                    <p style="text-align: justify;"><span style="color: green"> Datagenius Consulting </span> is a private data analytic firm committed to offering data-related solutions to individuals, businesses, and institutions across the globe. We understand the dynamic nature of data, the importance data plays in the day-to-day decision-making process of individuals, businesses, Non-government organizations, and institutions, and the complex process involved in collecting, storing, manipulating, and making meaningful insights of this data. Hence, our resolution to simplify these complex processes by putting together a team of experienced and certified data analysts to provide cutting-edge and top-notch digital data analytics solutions to diverse individuals and corporate organizations in a systematic manner. </p>


                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-us-img">
                    <img src="{{ asset('assets/img/about.jpg') }}" alt="About Us">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Us Area -->



<!-- Start Box Area -->
<section class="box-area pt-50 m-0 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="single-box single-box-2 bg-4">
                    <i class="flaticon-statistics"></i>
                    <h3>Vision</h3>
                    <p>Our vision is to be a go-to place for every individual, business, and institution worldwide for all data-related needs.. <br></p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-box single-box-2 bg-5">
                    <i class="flaticon-creativity"></i>
                    <h3>Mission</h3>
                    <p style="text-align: justify;">To make empirical research seamless for all researchers across the globe by lending support through our wealth of experience in complex data analytical procedures.</p>
                    <p style="text-align: justify;">To provide a balance in the field academic research, whereby researchers with little or no knowledge of statistics can publish papers with up-to-date analytical techniques as much as those who major in statistics/econometrics would.</p><br>
                    <p style="text-align: justify;">To optimize performances of Micro, Small and Medium Enterprises across the globe through the provision of cutting edge and data-driven business solutions..</p><br>
                    <p style="text-align: justify;">To deliver speed, authentic, reliable data through our consistent commitment to excellence for quality results.</p><br>
                    <p style="text-align: justify;">To own the largest data repository in Africa thereby addressing the long-existing challenge of data paucity  in Africa</p>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="about-us-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-title">
                    <h2>Our Value/Philosophy</h2>
                    <!-- <h2>We're more than academic consultants</h2> -->
                    <p style="text-align: justify;">We believe in upholding the core values that resonate with our vision and mission. </p>


                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-title">
                    <h2>Core Values</h2>
                    <p style="text-align: justify;"><b>Reliability</b>. We believe in efficient and timely data that is reliable and dependable for in-depth research and usage across every field  </p> <br>
                    <p style="text-align: justify;"><b>Innovation</b>. We consistently stay up to date with innovation and trends through our detailed driven data that cuts edge across all walks of life  </p> <br>
                    <p style="text-align: justify;"><b>Analytical</b>. We are analytical in our approach to data science that enhances the right application and interpretation.  </p> <br>
                    <p style="text-align: justify;"><b>Integrity</b>. We are devoted to truthfulness and transparency in our research and monitoring and evaluation of data  </p> <br>
                    <p style="text-align: justify;"><b>Excellence</b>. We deliver quality and cutting edge services  </p> <br>
                    <p style="text-align: justify;"><b>Accountability</b>. We take responsibility for our processes. We acknowledge our sources and other external influences  </p> <br>
                    <p style="text-align: justify;"><b>Relationship</b>. We believe in creating a lasting long-term positive impression with anyone that come in contact with us  </p> <br>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-us-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-title">
                    <h2>Industries</h2>
                    <!-- <h2>We're more than academic consultants</h2> -->
                    <p style="text-align: justify;">Our data services cut across different walks of life. Our brand is modelled in a way that enhances systemic data provision in a structured manner beyond academics. </p> <br>
                    <ul>
                        <li>Education</li>
                        <ul>
                            <li>Academic</li>
                            <li>Non Academic</li>
                        </ul>
                        <li>Banking and Finance</li>
                        <li>Manufacturing</li>
                        <li>Transport</li>
                        <li>E-commerce</li>
                        <li>Energy/Oil and Gas</li>
                        <li>Health</li>
                        <li>Fashion</li>
                        <li>Agriculture</li>
                    </ul>


                </div>
            </div>
         
        </div>
    </div>
</section>



@include('inc.footer');
@endsection
