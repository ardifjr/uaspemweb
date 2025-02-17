<?php $page = 'login'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 mx-auto">
                    <div class="login-wrap">
                        <div class="login-header">
                            <h3>Login</h3>
                            <p>We'll send a confirmation code to your email.</p>
                            <h6>Sign in with <a href="{{ url('login-phone') }}">Phone Number</a></h6>
                        </div>

                        <!-- Login Form -->
                        <form action="customer-dashboard">
                            <div class="log-form">
                                <div class="form-group">
                                    <label class="col-form-label">E-mail</label>
                                    <input type="text" class="form-control" placeholder="example@email.com">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label d-block">Password</label>
                                    <div class="pass-group">
                                        <input type="password" class="form-control pass-input" placeholder="*************">
                                        <span class="toggle-password feather-eye"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="char-length">
                                            <p>Must be 6 characters at least</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text-md-end">
                                            <a class="forgot-link" href="{{ url('password-recovery') }}">Forgot
                                                password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label class="custom_check">
                                            <input type="checkbox" name="rememberme" class="rememberme">
                                            <span class="checkmark"></span>Remember Me
                                        </label>
                                    </div>
                                    <div class="col-6 text-end">
                                        <label class="custom_check">
                                            <input type="checkbox" name="loginotp" class="loginotp">
                                            <span class="checkmark"></span>Login with OTP
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary w-100 login-btn" type="submit">Login</button>
                            <div class="login-or">
                                <span class="or-line"></span>
                                <span class="span-or">Or, Login with your email</span>
                            </div>
                            <div class="social-login">
                                <a href="javascript:;" class="btn btn-google w-100"><img
                                        src="{{ URL::asset('/assets/img/icons/google.svg') }}" class="me-2"
                                        alt="img">Login with Google</a>
                                <a href="javascript:;" class="btn btn-google w-100"><img
                                        src="{{ URL::asset('/assets/img/icons/fb.svg') }}" class="me-2"
                                        alt="img">Login with Facebook</a>
                            </div>
                            <p class="no-acc">Don't have an account ? <a href="{{ url('choose-signup') }}">Register</a></p>
                        </form>
                        <!-- /Login Form -->

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
