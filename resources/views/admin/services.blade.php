<?php $page = 'services'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">

            @component('admin.components.pageheader')
                @slot('title')
                    All Services
                @endslot
            @endcomponent

            @component('admin.components.tabsets')
            @endcomponent
            <div class="row">
                <div class="col-12 ">
                    <div class="table-resposnive table-div">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Service</th>
                                    <th>Category</th>
                                    <th>Sub Category</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Created By</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="table-imgname">
                                            <a href="{{ url('admin/view-service') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/services/service-03.jpg') }}"
                                                    class="me-2" alt="img">
                                                <span>Computer Repair</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>Computer</td>
                                    <td>Other</td>
                                    <td>$80</td>
                                    <td>28 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <h6 class="badge-pending">Pending</h6>
                                    </td>
                                    <td>Provider</td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-service') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <div class="table-imgname">
                                            <a href="{{ url('admin/view-service') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/services/service-02.jpg') }}"
                                                    class="me-2" alt="img">
                                                <span>Car Repair Services</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>Automobile</td>
                                    <td>Other</td>
                                    <td>$50</td>
                                    <td>17 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <h6 class="badge-active">Active</h6>
                                    </td>
                                    <td>Admin</td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-service') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <div class="table-imgname">
                                            <a href="{{ url('admin/view-service') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/services/service-04.jpg') }}"
                                                    class="me-2" alt="img">
                                                <span>Steam Car Wash</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>Car Wash</td>
                                    <td>Other</td>
                                    <td>$14</td>
                                    <td>13 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <h6 class="badge-inactive">Inactive</h6>
                                    </td>
                                    <td>Provider</td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-service') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        <div class="table-imgname">
                                            <a href="{{ url('admin/view-service') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/services/service-09.jpg') }}"
                                                    class="me-2" alt="img">
                                                <span>House Cleaning </span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>Cleaning</td>
                                    <td>Other</td>
                                    <td>$100</td>
                                    <td>07 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <h6 class="badge-delete">Delete</h6>
                                    </td>
                                    <td>Admin</td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-service') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        <div class="table-imgname">
                                            <a href="{{ url('admin/view-service') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/services/service-08.jpg') }}"
                                                    class="me-2" alt="img">
                                                <span>Building Construction</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>Cleaning</td>
                                    <td>Other</td>
                                    <td>$100</td>
                                    <td>07 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <h6 class="badge-delete">Delete</h6>
                                    </td>
                                    <td>Admin</td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-service') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>
                                        <div class="table-imgname">
                                            <a href="{{ url('admin/view-service') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/services/service-07.jpg') }}"
                                                    class="me-2" alt="img">
                                                <span>Interior Designing</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>Interior</td>
                                    <td>Other</td>
                                    <td>$100</td>
                                    <td>07 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <h6 class="badge-pending">Pending</h6>
                                    </td>
                                    <td>Provider</td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-service') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>
                                        <div class="table-imgname">
                                            <a href="{{ url('admin/view-service') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/services/service-09.jpg') }}"
                                                    class="me-2" alt="img">
                                                <span>Commercial Painting </span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>Painting</td>
                                    <td>Other</td>
                                    <td>$500</td>
                                    <td>22 Aug <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <h6 class="badge-inactive">Inactive</h6>
                                    </td>
                                    <td>Provider</td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-service') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>
                                        <div class="table-imgname">
                                            <a href="{{ url('admin/view-service') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/services/service-12.jpg') }}"
                                                    class="me-2" alt="img">
                                                <span>Plumbing Services</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>Plumbing</td>
                                    <td>Other</td>
                                    <td>$150</td>
                                    <td>15 Aug <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <h6 class="badge-delete">Delete</h6>
                                    </td>
                                    <td>Admin</td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-service') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @component('admin.components.deletemodel')
        @slot('title1')
            Delete Services
        @endslot
    @endcomponent
@endsection
