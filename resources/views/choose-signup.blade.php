<?php $page = 'choose-signup'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">

                <!-- Choose Signup -->
                <div class="col-md-6 col-lg-6 mx-auto">
                    <div class="login-wrap">
                        <div class="login-back">
                            <a href="{{ url('/') }}"><img src="{{ URL::asset('/assets/img/icons/undo-icon.svg') }}"
                                    class="me-2" alt="icon">Back To Home</a>
                        </div>
                        <div class="login-header">
                            <h3>Sign Up</h3>
                        </div>


                        <div class="row">

                            <!-- Provider Signup -->
                            <div class="col-md-6 d-flex">
                                <div class="choose-signup flex-fill">
                                    <h6>Providers</h6>
                                    <div class="choose-img">
                                        <img src="{{ URL::asset('/assets/img/provider.png') }}" alt="">
                                    </div>
                                    <a href="{{ url('provider-signup') }}" class="btn btn-secondary w-100">Sign Up<i
                                            class="feather-arrow-right-circle ms-1"></i></a>
                                </div>
                            </div>
                            <!-- /Provider Signup -->

                            <!-- User Signup -->
                            <div class="col-md-6 d-flex">
                                <div class="choose-signup flex-fill mb-0">
                                    <h6>Users</h6>
                                    <div class="choose-img">
                                        <img src="{{ URL::asset('/assets/img/user.png') }}" alt="">
                                    </div>
                                    <a href="{{ url('user-signup') }}" class="btn btn-secondary w-100">Sign Up<i
                                            class="feather-arrow-right-circle ms-1"></i></a>
                                </div>
                            </div>
                            <!-- /User Signup -->

                        </div>

                    </div>
                </div>
                <!-- /Choose Signup -->

            </div>

        </div>
    </div>
@endsection
