@extends('layouts.app')

@section('content')
@include('inc.nav')

<section class="sign-up-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-form-action">
                    <div class="form-heading text-center">
                        <h6 class="form-title">{{ __('Reset Password') }}</h6>
                    </div>

        <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

            <div class="row">
                <div class="col-12">
                    <div class="form-group input-group">
                        <input id="email" class="form-control @error('email') is-invalid @enderror"
                            type="email" name="email" placeholder="Email"  value="{{ old('email') }}"
                            required autocomplete="email" autofocus>

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
                    <input id="password" class="form-control @error('password') is-invalid @enderror"
                        type="password" name="password" placeholder="password"  value="{{ old('email') }}"
                        required autocomplete="new-password">
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

                <div class="col-12">
                    <div class="form-group input-group">
                    <input id="password-confirm" class="form-control @error('password') is-invalid @enderror"
                        type="password" placeholder="confirm password" name="password_confirmation"
                        required autocomplete="new-password">

                        <div class="input-group-append">
                            <span class="input-group-text">
                              <i class="fa fa-eye-slash" id="togglePassword"></i>
                            </span>
                         </div>
                    </div>
                </div>

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button class="default-btn" type="submit" name="Reset Password">
                                {{ __('Reset Password') }}
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
