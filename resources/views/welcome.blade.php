@extends('layouts.app')

@section('content')
@include('inc.nav');

<!-- Start Hero Slider Area -->
<section class="hero-slider-area">
    <div class="hero-slider owl-carousel owl-theme">
        <div class="hero-slider-item slider-item-bg-2">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="hero-slider-text">
                            <span>Research and More</span>
                            <h2 class="text-white">We take your data privacy seriously because we know it is your most valuable asset</span></h2>
                            <p>We help you get success</p>
                            <div class="banner-button">
                                <a class="default-btn" href="services">
                                    Let's Start
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider-item slider-item-bg-1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="hero-slider-text">
                            <span>Research and More</span>
                            <h2 class="text-white">Research is only true, if every process involved in it is true<span></span></h2>
                            <p>We help you get success</p>
                            <div class="banner-button">
                                <a class="default-btn" href="services">
                                    Let's Start
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape shape-1">
        <img src="{{ asset('assets/img/shape/1.png')}}" alt="Shape">
    </div>
    <div class="shape shape-3">
        <img src="{{ asset('assets/img/shape/3.png')}}" alt="Shape">
    </div>
    <div class="shape shape-4">
        <img src="{{ asset('assets/img/shape/4.png') }}" alt="Shape">
    </div>
    <div class="shape shape-5">
        <img src="{{ asset('assets/img/shape/5.png') }}" alt="Shape">
    </div>
    <div class="shape shape-6">
        <img src="{{ asset('assets/img/shape/6.png') }}" alt="Shape">
    </div>
    <div class="shape shape-7">
        <img src="{{ asset('assets/img/shape/7.png') }}" alt="Shape">
    </div>
    <div class="shape shape-8">
        <img src="{{ asset('assets/img/shape/1.png') }}" alt="Shape">
    </div>
</section>
<!-- End Hero Slider Area -->

<!-- Start Box Area -->
<section class="box-area m-0 pt-100 pb-70" style="background-color: #f0f1f8">
    <div class="container">
        <div class="section-title">
            <span>What We do</span>
            <!-- <h2>Services</h2> -->
            <!-- <span>We proffer data solutions from collection to processing, analysis and interpretation of results evident for every research area or field. These include:</span> -->
        </div>
    <div class="container">

        <div class="row">
            @php
             $services=Illuminate\Support\Facades\DB::table('services')->take(3)->get();

            @endphp
            @foreach ($services as $service)
            @php
                $service_category=Illuminate\Support\Facades\DB::table('service_categories')->where('id',$service->category_id)->pluck('category');
                foreach ($service_category as $service_name) {
                    # code...
                }
            @endphp
            <div class="col-lg-4 col-md-6">
                <div class="single-box single-box-2 bg-4">
                    <i class="flaticon-strategy"></i>
                    <h3 style="color: #012068; margin-bottom: 12px;">{{ $service_name }}</h3>
                    <p>{{ $service->short_description }} </p>
                    <a class="default-btn" href="datacollection">Read More</a>
                </div>
            </div>

            @endforeach

            <div class="col-lg-12 col-md-12" align="center">
                <a class="default-btn" href="services">View More</a>
            </div>


        </div>
    </div>
</section>
<!-- End Box Area -->

<!-- Start archive -->
<section class="box-area m-0 pt-100 pb-70" style="background-color: #f0f1f8">
    <div class="container">
        <div class="section-title">
            <!-- <span>What We do</span> -->
            <h2>Current Projects</h2>
            <!-- <span>We proffer data solutions from collection to processing, analysis and interpretation of results evident for every research area or field. These include:</span> -->
        </div>
    <div class="container">
            @php
                $current_project=Illuminate\Support\Facades\DB::table('current_projects')->take(3)->get();
            @endphp
        <div id="Container" class="row">
            @foreach ($current_project as $project )
            @php
                $upload=$project->project_image;
            @endphp
            <div class="single-portfolio-item col-lg-4 col-sm-6 1 5 mix">
                <div class="portfolio-inner" style="margin-bottom: 0px;max-height: 204px;min-height: 204px;overflow: hidden;">
                    <img class="portfolio-img" src="{{ asset('project/'.$upload) }}" alt="portfolio-img">
                    <div class="portfolio-hover">
                        <div class="hover-text">
                            <a href="doc?lib=76dcfbcd">
                                <h4 style="color: black;">
                                  {{ $project->short_description }}
                                </h4>
                                <!-- <span>business</span> -->
                            </a>
                        </div>
                    </div>
                </div>
                <div class="single-box single-box-2 bg-5 text-left">
                    <a href="doc?lib=76dcfbcd" style="color: black;font-weight: 900;text-decoration: none;">
                        {{ $project->short_description }}
                    </a>
                </div>
            </div>
            @endforeach




        </div>
    </div>
</section>
<!-- End archive -->


	<!-- Start tools -->
    <section class="best-services-area ptb-100">
        <div class="container">
            <div class="section-title">
                <!-- <span>What We do</span> -->
                <h2 style="color: #012068;
                font-weight: 700;">Familiar Tools and Languages</h2>
            </div>
            <div>
                <div>
                    <div class="row">
                        <ul class="nav nav-pills d-sm-flex d-block text-center justify-content-between pt-15" id="pills-tab" role="tablist">
                         <div class="col-md-2">
                                <li>
                                    <i class="flaticon-steering-wheel"></i>
                                        <a class="nav-link active" id="pills-1-tab" data-toggle="pill" href="#pills-1" role="tab" aria-controls="pills-1" aria-selected="true">
                                                    <i class="fa fa-file-excel-o"></i>
                                                MS Excel
                                        </a>
                                    </li>
                         </div>

                         <div class="col-md-2">
                            <li>
                               <a class="nav-link" id="pills-2-tab" data-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-2" aria-selected="false">
                                <i class="flaticon-hand"></i>
                                            IBM SPSS
                                    </a>
                                </li>
                        </div>


                        <div class="col-md-2">
                            <li>
                                <i class="flaticon-tracking"></i>
                                <a class="nav-link" id="pills-3-tab" data-toggle="pill" href="#pills-3" role="tab" aria-controls="pills-3" aria-selected="false">
                                    <i class="flaticon-strategy"></i>
                                    STATA
                                </a>
                            </li>
                        </div>

                        <div class="col-md-2">
                            <li>
                                <a class="nav-link" id="pills-4-tab" data-toggle="pill" href="#pills-4" role="tab" aria-controls="pills-4" aria-selected="false">
                                    <i class="flaticon-consultant"></i>
                                    EVIEWS
                                </a>
                            </li>
                        </div>

                        <div class="col-md-2">
                            <li>
                                <i class="flaticon-van"></i>
                                <a class="nav-link" id="pills-5-tab" data-toggle="pill" href="#pills-5" role="tab" aria-controls="pills-5" aria-selected="false">
                                    <i class="flaticon-interview"></i>
                                    MS Power BI
                                </a>
                            </li>
                        </div>

                        

                        <div class="col-md-2">
                            <li>
                                <i class="flaticon-van"></i>
                                <a class="nav-link" id="pills-5-tab" data-toggle="pill" href="#pills-5" role="tab" aria-controls="pills-5" aria-selected="false">
                                    <i class="flaticon-interview"></i>
                                    R
                                </a>
                            </li>
                        </div>

                        <div class="col-md-2">
                            <li>
                                <i class="flaticon-van"></i>
                                <a class="nav-link" id="pills-5-tab" data-toggle="pill" href="#pills-5" role="tab" aria-controls="pills-5" aria-selected="false">
                                    <i class="flaticon-interview"></i>
                                    SQL
                                </a>
                            </li>
                        </div>

                        <div class="col-md-2">
                            <li>
                                <i class="flaticon-van"></i>
                                <a class="nav-link" id="pills-5-tab" data-toggle="pill" href="#pills-5" role="tab" aria-controls="pills-5" aria-selected="false">
                                    <i class="flaticon-interview"></i>
                                    Python
                                </a>
                            </li>
                        </div>
                        <div class="col-md-2">
                            <li>
                                <i class="flaticon-van"></i>
                                <a class="nav-link" id="pills-5-tab" data-toggle="pill" href="#pills-5" role="tab" aria-controls="pills-5" aria-selected="false">
                                    <i class="flaticon-interview"></i>
                                    Hadoop
                                </a>
                            </li>
                        </div>

                        <div class="col-md-2">
                            <li>
                                <i class="flaticon-van"></i>
                                <a class="nav-link" id="pills-5-tab" data-toggle="pill" href="#pills-5" role="tab" aria-controls="pills-5" aria-selected="false">
                                    <i class="flaticon-interview"></i>
                                    Spark
                                </a>
                            </li>
                        </div>


                        <div class="col-md-2">
                            <li>
                                <i class="flaticon-van"></i>
                                <a class="nav-link" id="pills-5-tab" data-toggle="pill" href="#pills-5" role="tab" aria-controls="pills-5" aria-selected="false">
                                    <i class="flaticon-interview"></i>
                                    JAVA
                                </a>
                            </li>
                        </div>
                        <div class="col-md-2"></div>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End tools -->

    <!-- Start Processing Area -->
		<section class="processing-areac ptb-100">
			<div class="container">
				<div class="section-title">
					<span>Steps For Processing</span>
					<h2>Take Some Easy Steps For Processing</h2>
				</div>
				<div class="row">
					<div class="col-lg-3 col-sm-6 icon-color">
						<div class="single-processing">
							<span>1</span>
							<div class="processing-icon">
								<i class="fa fa-files-o"></i>
							</div>
							<h3>Browse Services</h3>
							<p>Browse through services on our service page</p>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 icon-color">
						<div class="single-processing">
							<span>2</span>
							<div class="processing-icon">
								<i class="flaticon-interview"></i>
							</div>
							<h3>Make Request</h3>
							<p>Fill your required service form </p>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 icon-color">
						<div class="single-processing">
							<span>3</span>
							<div class="processing-icon">
								<i class="flaticon-money"></i>
							</div>
							<h3>Make Payment</h3>
							<p>Make your payment with different options</p>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 icon-color">
						<div class="single-processing">
							<span>4</span>
							<div class="processing-icon">
								<i class="flaticon-target"></i>
							</div>
							<h3>Get your job</h3>
							<p>Your work will be delivered to you via your dashboard</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Processing Area -->

        <!-- Start Partner Area -->
		<div class="partner-area pt-100 pb-100">
			<div class="container">
				<div class="partner-wrap owl-carousel owl-theme">
					<div class="single-logo">
						<a href="#">
							<img src="{{ asset('assets/img/logo-black.png') }}" alt="Mozisha">
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- End Partner Area -->

		<!-- Start Client Area -->
		<section class="client-area ptb-100">
			<div class="container">
				<div class="section-title">
					<!-- <span>Press Coverage</span> -->
					<h2>What Our Clients Say</h2>
				</div>
				<div class="row align-items-center client-bg">
					<div class="col-lg-12 p-0">
						<div class="client-details-wrap owl-carousel owl-theme">
                            @foreach ($review as $reviews)
							<div class="client-details">

                                <img src="{{ asset('images/'.$reviews->upload) }}" alt=""
                                style="width: 100px; height: 100px;">
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


        	<!-- Google Review -->
		<section class="client-area ptb-100">
			<div class="container">
				<div class="section-title">

				</div>
				<div class="row align-items-center client-bg">
					<div class="col-lg-12 p-0">
						<div class="client-details-wrap owl-carousel owl-theme">
                            <div class="client-img">
                            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                            <div class="elfsight-app-7ae43463-1881-4d66-adee-1d07d6aa22c7"></div>
                            </div>
						</div>
					</div>
					<div class="col-lg-12 p-0" style="margin-bottom: 20px">
						<div class="pagenavigation-area">

						</div>
					</div>
				</div>

			</div>
		</section>		<!-- Google Review ends -->


			<!-- Start Blog Area -->
        <section class="blog-area blog-page">
			<div class="container">
				<div class="section-title">
					<br>
					<h2>Our Blog</h2>
				</div>

				<div class="row">

                    @php
                        $blogs=Illuminate\Support\Facades\DB::table('blog_posts')->take(3)->get();
                    @endphp

                    @foreach ($blogs as $blog )
					<div class="col-lg-4 col-md-6">
						<div class="single-blog-post">

							<div class="post-image">
								<a href="{{ route('blog.show', $blog->slug) }}">
									<img src="{{ asset('images/'.$blog->image) }}" alt="image">
								</a>
							</div>
							<div class="post-content">
								<div class="date">
									<i class="fa fa-calendar"></i>
									<span>{{ $blog->created_at }}</span>
								</div>
								<h3>
									<a href="{{ route('blog.show', $blog->slug) }}">
                                        {{ $blog->title }}
                                    </a>
								</h3>
								<p><!-- wp:paragraph -->
                                    <p></p>
								<a href="{{ route('blog.show', $blog->slug) }}" class="default-btn">Read More</a>
							</div>
						</div>
					</div>
                    @endforeach



					<div class="col-lg-12">
						<div class="pagenavigation-area">
							<a href="{{ route('blog.index') }}" class="default-btn">All Posts</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Blog Area -->
		<br>
		<br>
		<div class="col-lg-12">
			<div class="section-title">
				<span>FAQ</span>
				<h2>Frequently Asked Questions</h2>
			</div>
		</div>


	<!-- Start FAQ Area -->
		<section class="questions-area two pb-100">
			<div class="container-fluid">
				<div class="row align-items-center">

					<div class="col-lg-1 col-md-1">

					</div>

					<div class="col-lg-5 pl-0">
						<div class="questions-bg-area">

							<div class="row">
								<div class="col-lg-12">
									<div class="faq-accordion">
										<ul class="accordion">
											<li class="accordion-item">
												<a class="accordion-title active" href="javascript:void(0)">
													<i class="fa fa-arrow-right"></i>
													Is there any age limit to the contract agreement?
												</a>
												<p class="accordion-content">The contracting parties within the scope of these terms and conditions are DataGenius and the Customer. DataGenius only conducts such contracts with persons who are of age or are a legal entity.</p>
											</li>
											<li class="accordion-item">
												<a class="accordion-title" href="javascript:void(0)">
													<i class="fa fa-arrow-right"></i>
													How can I place an order for my desired services?
												</a>
												<p class="accordion-content">You can easily place your order over the internet. On https://www.datagenius.com.ng/order DataGenius offers with their Online shop services which can be purchased and ordered over the internet. The Customer can download, save, edit and print out the purchased services and report from their inbox. Only these services and report that the Customer has purchased via download are subject matter of this contract.
												</p>
											</li>
											<li class="accordion-item">
												<a class="accordion-title" href="javascript:void(0)">
													<i class="fa fa-arrow-right"></i>
													Are there free of charge services on www.datagenius.com.ng?
												</a>
												<p class="accordion-content">All services are subject to charge as far it is not marked as free of charge. <br>
												The charges that are transmitted at the time of the order are those that are valid for the Customer.
												</p>
											</li>
											<li class="accordion-item">
												<a class="accordion-title" href="javascript:void(0)">
													<i class="fa fa-arrow-right"></i>
													Do the initial charges cover all services?
												</a>
												<p class="accordion-content">Should the Customer require the services, report or templates to be sent in another way than download the Customer must pay the forwarding charges. <br>
												All charges that the Customer incurs for the download of the services and report such as internet charges are to be paid by the Customer.
												</p>
											</li>
											<li class="accordion-item">
												<a class="accordion-title" href="javascript:void(0)">
													<i class="fa fa-arrow-right"></i>
													Will I pay for minor corrections?
												</a>
												<p class="accordion-content"> <b><span>No.</span></b> However, in the event of major adjustments sequel to wrong assignment instructions/briefing, new charges will be applied to such changes in the services scope. </p>
											</li>
											<li class="accordion-item">
												<a class="accordion-title" href="javascript:void(0)">
													<i class="fa fa-arrow-right"></i>
													Can I order for more than one service at a time?
												</a>
												<p class="accordion-content">Certainly yes</p>
											</li>
											<li class="accordion-item">
												<a class="accordion-title" href="javascript:void(0)">
													<i class="fa fa-arrow-right"></i>
													Is there provision for pay-on-delivery?
												</a>
												<p class="accordion-content"> <b><span>No. </span></b> This is because, the services rendered cannot be restituted.</p>
											</li>
											<li class="accordion-item">
												<a class="accordion-title" href="javascript:void(0)">
													<i class="fa fa-arrow-right"></i>
													Can I pay for my order on installment?
												</a>
												<p class="accordion-content"> <b><span>Yes. </span></b> If DataGenius has accepted a deposit from the Customer, the Customer agrees that the balance outstanding will be paid to DataGenius at least 3 days prior to the date on which their Order is due. If the full balance outstanding is not paid to the DataGenius in accordance with this term, a delay in the delivery of the Customer’s </p>
											</li>
											<li class="accordion-item">
												<a class="accordion-title" href="javascript:void(0)">
													<i class="fa fa-arrow-right"></i>
													Can I call for order cancellation after payment?
												</a>
												<p class="accordion-content"> You can only cancel an order 1 hour after the payment has been confirmed.</p>
											</li>
											<li class="accordion-item">
												<a class="accordion-title" href="javascript:void(0)">
													<i class="fa fa-arrow-right"></i>
													Can I change my expected day of delivery?
												</a>
												<p class="accordion-content"> <b><span> Certainly Yes.</span></b> Though, if a customer wants the services to be delivered earlier than the agreed date, Express Delivery charges may apply.</p>
											</li>
											<li class="accordion-item">
												<a class="accordion-title active" href="javascript:void(0)">
													<i class="fa fa-arrow-right"></i>
													What are the services usage rights?
												</a>
												<p class="accordion-content">The services that the Client has purchased can be copied, edited, saved and used by the Client for their commercial and industrial purposes.</p>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-5 pl-0">
						<div class="questions-bg-area">

							<div class="row">
								<div class="col-lg-12">

									<div class="faq-accordion">
										<ul class="accordion">

											<li class="accordion-item">
												<a class="accordion-title" href="javascript:void(0)">
													<i class="fa fa-arrow-right"></i>
													Can I share the services with third party?
												</a>
												<p class="accordion-content">The Customer is prohibited from providing the purchased services to third parties against payment or free of charge. Furthermore, the Customer is prohibited from transferring these usage rights to third parties.</p>
											</li>
											<li class="accordion-item">
												<a class="accordion-title" href="javascript:void(0)">
													<i class="fa fa-arrow-right"></i>
													Is there Warranty coverage for the services offered at Data Genius Consulting Limited?
												</a>
												<p class="accordion-content">The Client is obliged to immediately inform DataGenius of any complaints in regards to the purchased services and if possible, within a period of 14 days via email or in written form after the Customer has observed the deficiency. The lapse of the above period has no effects on the statutory rules on warranty. The warranty is in accordance with the statutory regulations and in the case a deficiency has been detected then the Client has the choice of a further delivery or an improvement of the services.</p>
											</li>
											<li class="accordion-item">
												<a class="accordion-title" href="javascript:void(0)">
													<i class="fa fa-arrow-right"></i>
													Is there room for Amendments and revisions to completed orders?
												</a>
												<p class="accordion-content">DataGenius agrees that if the Customer believes that their completed Work does not follow their exact instructions, the Customer may request revisions to the Work within the revision period of the delivery date, or longer if they have specifically paid to extend the revision period. Such revisions and amendments will be made free of charge to the Customer.</p>
											</li>
											<li class="accordion-item">
												<a class="accordion-title" href="javascript:void(0)">
													<i class="fa fa-arrow-right"></i>
													How many times can I call for revision?												</a>
												<p class="accordion-content">The Customer is permitted to make three revision requests, via the Customer Account, containing all details of the required amendments and revisions. This will be sent to the management for comment. If the request is reasonable, the management will revise and amend the Work and return it to the Customer within 7 days. The Expert may request additional time to complete the amendments and this may be granted at the discretion of the Customer. <br>
												If the Expert does not agree with the Customer’s revision request, they will be given the opportunity to comment on it. In the event that agreement cannot be reached between Expert and Customer regarding the revision and amendments, DataGenius’s quality control team will assess the dispute and their decision will be final. </p>
											</li>
											<li class="accordion-item">
												<a class="accordion-title" href="javascript:void(0)">
													<i class="fa fa-arrow-right"></i>
													Do I pay for additional work?
												</a>
												<p class="accordion-content">Yes. The Client acknowledges that they may be required to make payment for changes prior to the additional work being commenced.</p>
											</li>
											<li class="accordion-item">
												<a class="accordion-title" href="javascript:void(0)">
													<i class="fa fa-arrow-right"></i>
													Is there room for amendments to work in progress?
												</a>
												<p class="accordion-content">The Client may not request amendments to their Order description after payment has been made or a deposit has been taken and the Order has been assigned to a Research expert. The Client may provide additional supporting information shortly after full payment or a deposit has been taken, provided that this does not add to or conflict with the details contained in their original Order description. <br>
												If the Customer provides additional information after full payment or a deposit has been taken and this does substantially conflict with the details contained in the original Order description, DataGenius may at their discretion either obtain a quote for the changed specification or reallocate the Order, as soon as is reasonable, to a different Expert without consulting the Customer. The Customer understands that this may result in a delay in the delivery of their Work for which DataGenius will not be held responsible.
												</p>
											</li>
											<li class="accordion-item">
												<a class="accordion-title" href="javascript:void(0)">
													<i class="fa fa-arrow-right"></i>
													How can I pay?
												</a>
												<p class="accordion-content"> You pay with your credit or debit card after an invoice has been sent to you. The link to the payment gateway is included in the invoice.
												</p>
											</li>
											<li class="accordion-item">
												<a class="accordion-title" href="javascript:void(0)">
													<i class="fa fa-arrow-right"></i>
													How to pay?
												</a>
												<p class="accordion-content">
												After you receive your layout for your order and you find it appropriate then you may pay by clicking on pay now on the invoice which will redirect to a page where you can pay with your credit or debit card.
												</p>
											</li>
											<li class="accordion-item">
												<a class="accordion-title" href="javascript:void(0)">
													<i class="fa fa-arrow-right"></i>
													Will I always get every data that I want?
												</a>
												<p class="accordion-content"> <b><span>No,</span></b>  depending on the availability of such data on our database and all institutional databases we have access to
												</p>
											</li>
											<li class="accordion-item">
												<a class="accordion-title" href="javascript:void(0)">
													<i class="fa fa-arrow-right"></i>
													What will happen if data I want is not available?
												</a>
												<p class="accordion-content"> We make recommendations based on available data and if the recommendations are not suitable, the client is refunded 90% of the paid amount.
												</p>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End FAQ Area -->

		          <div class="trustpilot-widget" data-locale="en-US" data-template-id="56278e9abfbbba0bdcd568bc" data-businessunit-id="61949565ce0b006044b64840" data-style-height="52px" data-style-width="100%" data-theme="light" data-stars="1,2,3,4,5" data-no-reviews="hide" data-scroll-to-list="true" data-allow-robots="true">
		              	<p style="position:fixed;bottom: 58px;right: 26px;background: black;padding: 5px;z-index: 9;border-radius: 10px;">
                              <a href="https://www.trustpilot.com/review/datagenius.com.ng" target="_blank" rel="noopener">Trustpilot</a>
                        	</p>
                 </div>







@include('inc.footer');

@endsection
