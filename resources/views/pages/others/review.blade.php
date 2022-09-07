@extends('layouts.app')

@section('content')
@include('inc.nav');


<!-- Start Page Title Area -->
<div class="page-title-area item-bg-1">
    <div class="container">
        <div class="page-title-content">
            <h2>Rate and Review</h2>
            <ul>
                <li>
                    <a href="./">
                        Home
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </li>
                <li>Rate and Review</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Contact Area -->
<section class="contact-area pb-100 pt-100">
    <div class="container">
        <div class="section-title">
            <h3>Drop a Review</h3>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6">
                 <p></p>
                <div class="contact-form">

                    {{-- error handle --}}

                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                    @endif
                    {{-- error handle end --}}
                    <form action="/reviews_us" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-md-4"></div>
                            @error('upload')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="col-md-4">
                                <img class="profile-user-img img-fluid img-circle"
                                src="{{ asset('assets/img/person-dummy.jpg') }}"
                                alt="User profile picture">
                                <br/>
                                <div class="custom-file">
                                    <div class="form-group">
                                        <input type="file" name="image" class="custom-file-input">
                                        <label class="custom-file-label" >Choose file</label>
                                      </div>

                                </div>
                            </div>

                            <div class="col-md-4"></div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Your Full Name">
                                </div>

                            </div>


                            <div class="col-lg-12">
                                <div class="form-group">
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                                </div>

                            </div>

                                <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="linkedIn" id="linked" class="form-control"  placeholder="Your LinkedIn">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    @error('rate')
                                     <div class="alert alert-danger">{{ $message }}</div>
                                     @enderror
                                    <select name="rate" id="rate" class="form-control">
                                        <option value="5">5-Star</option>
                                        <option value="4">4-Star</option>
                                        <option value="3">3-Star</option>
                                        <option value="2">2-Star</option>
                                        <option value="1">1-Star</option>
                                    </select>
                                </div>

                            </div>

                            <div class="col-lg-12 pt-3">
                                <div class="form-group">
                                    @error('message')
                                     <div class="alert alert-danger">{{ $message }}</div>
                                     @enderror
                                    <textarea name="message" class="form-control" id="comments" cols="30" rows="5" placeholder="Say something about us..."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>

                            </div>

                            <div class="col-lg-12">
                                <button type="submit" name="rate_review" class="default-btn btn-two">
                                    <span class="label">Send Review</span>
                                    <i class='bx bx-plus'></i>
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- End Contact Area -->


@include('inc.footer');
@endsection
