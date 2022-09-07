@extends('layouts.app')
		<!-- Start Preloader Area -->
		<div class="preloader">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start 404 Error -->
		<div class="error-area">
			<div class="d-table">
				<div class="d-table-cell">
                    <div class="error-contant-wrap">
                        <img src="{{ asset('assets/img/404.jpg') }}" alt="404">
                        <h3>Oops! Page Not Found</h3>
                        <p>The page you were looking for could not be found.</p>
                        <a href="/" class="default-btn">
                            Get Me Out of Here!
                            <i class="flaticon-right"></i>
                        </a>
                    </div>
				</div>
            </div>
		</div>
        <!-- End 404 Error -->
        <!-- Jquery Slim JS -->
@extends('layouts.app')
