@extends('layouts.app')

@section('content')
@include('inc.nav')

<section class="sign-up-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-form-action">
                    <div class="form-heading text-center">
                        <h6 class="form-title">Enter your Mail for Reset Password</h6>
                    </div>

            <form method="POST" action="{{ route('password.email') }}">
            @csrf


            <div class="row">
                <div class="col-12">
                    <div class="form-group input-group">
                        <input id="email" class="form-control @error('email') is-invalid @enderror"
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


                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button class="default-btn" type="submit" name="Send Password Reset Link">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
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
