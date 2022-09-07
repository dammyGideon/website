@extends('layouts.app')

@section('content')
@include('inc.nav')

<section class="sign-up-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-form-action">
                    <div class="form-heading text-center">
                        <h3 class="form-title">Login to your account!</h3>
                        <p class="form-desc">with your email.</p>
                    </div>

    <form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="row">
        <div class="col-12">
            <div class="form-group input-group">
             <input class="form-control @error('email') is-invalid @enderror"
                 type="email" name="email" placeholder="Email"  value="{{ old('email') }}"
                 required>


                 <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="fas fa-address-card"></i>
                    </span>
                 </div>
            </div>

            @error('email')
                 <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-12">
            <div class="form-group input-group">
                <input class="form-control @error('password') is-invalid @enderror"
                type="password" name="password" id="password"
                placeholder="Password" required>

                <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="fa fa-eye-slash" id="togglePassword"></i>
                    </span>
                 </div>

            </div>
            @error('password')
                 <div class="alert alert-danger">{{ $message }}</div>
             @enderror


        </div>
        <div class="col-lg-6 col-md-6 form-condition">
            <div class="agree-label">
                <input type="checkbox" id="chb1">
                <label for="chb1">
                    Remember Me
                </label>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            @if (Route::has('password.request'))
            <a class="forget"  href="{{ route('password.request') }}">Forgot my password?</a>
            @endif
        </div>
        <div class="col-12">
            <button class="default-btn" type="submit" name="sign_in">
                Log In Now
            </button>
        </div>
        <div class="col-12">
            <p class="account-desc">
                Not a member?
                <a href="{{ route('register') }}">Register</a>
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



@include('inc.footer')
@endsection
