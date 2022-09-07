@extends('layouts.app')

@section('content')
@include('inc.nav');

<section class="sign-up-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-form-action">
                    <div class="form-heading text-center">
                        <h3 class="form-title">Create an account!</h3>
                        <p class="form-desc">with your email</p>

                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group input-group">
                                    <input placeholder="First Name"
                                    type="text" class="form-control @error('First Name') is-invalid @enderror"
                                    name="first_name"
                                    value="{{ old('First Name') }}"
                                    id="First Name"
                                    required autocomplete="First Name" >
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                          <i class="fas fa-user"></i>
                                        </span>
                                     </div>
                                    @error('First Name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 ">
                                <div class="form-group input-group">
                                    <input id="last name" placeholder="Last Name" type="text"
                                    class="form-control @error('last name') is-invalid @enderror"
                                     name="last_name" value="{{ old('last name') }}"
                                     required autocomplete="last_name">

                                     <div class="input-group-append">
                                        <span class="input-group-text">
                                          <i class="fas fa-user"></i>
                                        </span>
                                     </div>

                                    @error('last name')
                                         <div class="alert alert-danger">{{ $message }}</div>
                                     @enderror
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group input-group">
                                    <input id="email" type="email"
                                    placeholder="Email Address"
                                    class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                          <i class="fas fa-address-card"></i>
                                        </span>
                                     </div>

                                    @error('email')
                                         <div class="alert alert-danger">{{ $message }}</div>
                                     @enderror
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group input-group">
                                    <input id="password" placeholder="Password"
                                    type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="new-password">
                                    @error('password')
                                         <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                      <div class="input-group-append">
                                        <span class="input-group-text">
                                          <i class="fa fa-eye-slash" id="togglePassword"></i>
                                        </span>
                                     </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 form-condition">
                                <div class="agree-label">
                                    <input type="checkbox" id="chb2" required>
                                    {{-- <label for="chb2"> --}}
                                        I agree with Datagenius Consulting's											<a href="tac">Terms of Services</a>
                                    {{-- </label> --}}

                                </div>
                            </div>
                            <div class="col-12">
                                <button class="default-btn" type="submit" name="register">
                                    Register Account
                                </button>
                            </div>
                            <div class="col-12">
                                <p class="account-desc">
                                    Already have an account?
                                    <a href="{{ route('login') }}"> Login</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Sign Up Area -->






@include('inc.footer');


@endsection
