<?php $page = 'add-user'; ?>

@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <form action="{{ url('admin/user-list') }}">
                <div class="row">
                    <div class="col-lg-7 col-sm-12 m-auto">

                        @component('admin.components.addpageheader')
                            @slot('addtitle')
                                Add Users
                            @endslot
                        @endcomponent

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="profile-upload">
                                    <div class="profile-upload-img">
                                        <img src="{{ URL::asset('/admin_assets/img/customer/user-01.jpg') }}" alt="img"
                                            id="blah">
                                    </div>
                                    <div class="profile-upload-content">
                                        <div class="profile-upload-btn">
                                            <div class="profile-upload-file">
                                                <input type="file" id="imgInp">
                                                <a href="javascript:void(0);" class="btn btn-upload">Upload</a>
                                            </div>
                                            <a href="javascript:void(0);" class="btn btn-remove">Remove</a>
                                        </div>
                                        <div class="profile-upload-para">
                                            <p>*image size should be at least 320px big,and less then 500kb. Allowed files
                                                .png and .jpg.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Name ">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input type="text" class="form-control" placeholder="Enter User Name">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" placeholder="Enter Phone Number">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Current Password</label>
                                    <div class="pass-group">
                                        <input type="password" class="form-control pass-input">
                                        <span class="fas toggle-password fa-eye-slash"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>New Password</label>
                                    <div class="pass-group">
                                        <input type="password" class="form-control pass-inputs">
                                        <span class="fas toggle-passwords fa-eye-slash"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Role</label>
                                    <select class="select">
                                        <option>Admin</option>
                                        <option>Super Admin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-groupheads d-flex d-flex justify-content-between">
                                    <h2>Status</h2>
                                    <div class="active-switch">
                                        <label class="switch">
                                            <input type="checkbox" checked="">
                                            <span class="sliders round"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="btn-path">
                                    <a href="javascript:void(0);" class="btn btn-cancel me-3">Cancel</a>
                                    <button type="submit" class="btn btn-primary "> Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
