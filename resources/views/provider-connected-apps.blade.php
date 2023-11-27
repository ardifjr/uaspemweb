<?php $page = 'provider-connected-apps'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="row">
                <div class="col-md-12">

                    <!-- Connected Apps -->
                    <div class="widget-title">
                        <h4>Connected Apps</h4>
                    </div>
                    <div class="linked-item">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="linked-acc">
                                    <span class="link-icon">
                                        <img src="{{ URL::asset('/assets/img/google.png') }}" alt="">
                                    </span>
                                    <div class="linked-info">
                                        <h6>Google Calendar</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <div class="d-flex align-items-center justify-content-md-end">
                                    <a href="javascript:void(0);" class="btn-gconnect">Connect</a>
                                    <div
                                        class="status-toggle status-tog d-inline-flex justify-content-between align-items-center">
                                        <input type="checkbox" id="status_1" class="check" checked>
                                        <label for="status_1" class="checktoggle">checkbox</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Connected Apps -->

                </div>

            </div>

        </div>
    </div>

    @component('components.model-popup')
    @endcomponent
@endsection
