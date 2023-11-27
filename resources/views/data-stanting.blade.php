@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Data Stunting
        @endslot
        @slot('li_1')
            Data - Data
        @endslot
        @slot('li_2')
            Data Stunting
        @endslot
    @endcomponent

<div class="content">
    <div class="container">
        <div class="row col-12">
            <div class="col-lg-6 col-12widget-path widget-service" >
                <div class="card">
                    <div class="card-body">
                        <div class="home-user">
                            <div class="home-userhead">
                                <div class="home-usercount">
                                    <!-- <span><img src="assets/img/icons/user.svg" alt="img"></span> -->
                                    <!-- <h6>User</h6> -->
                                </div>
                            </div>
                            <div class="home-usercontent">
                                <div class="home-usercontents text-center">
                                    <div class="home-usercontentcount">
                                        <!-- <img src="assets/img/icons/arrow-up.svg" alt="img" class="me-2"> -->
                                        <span class="counters"  data-count="276067" style="font-size: 70px"></span>
                                    </div>
                                    <h5> Jumlah Balita Stunting</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12widget-path widget-service" >
                <div class="card">
                    <div class="card-body">
                        <div class="home-user">
                            <div class="home-userhead">
                                <div class="home-usercount">
                                    <!-- <span><img src="assets/img/icons/user.svg" alt="img"></span> -->
                                    <!-- <h6>User</h6> -->
                                </div>
                            </div>
                            <div class="home-usercontent">
                                <div class="home-usercontents text-center">
                                    <div class="home-usercontentcount">
                                        <!-- <img src="assets/img/icons/arrow-up.svg" alt="img" class="me-2"> -->
                                        <span class="counters"  data-count="9.98%" style="font-size: 70px"></span>
                                    </div>
                                    <h5>Persentase Balita Stunting</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row col-12">
            <div class="col-lg-12 col-12 widget-path">
                <div class="card">
                    <div class="card-body">
                        <div class="home-user">
                            <div class="home-head-user">
                                <h4>Data Stunting Dari Tahun ke Tahun</h4>
                            </div>
                            <div class="chartgraph">
                                <div id="chart-stunting-tahun"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row col-12">
            <div class="col-lg-12 col-12 widget-path">
                <div class="card">
                    <div class="card-body">
                        <div class="home-user">
                            <div class="home-head-user">
                                <h4>Tabel Kasus Stunting Berdasarkan Kecamatan</h4>
                            </div>
                            <div class="chartgraph">
                                <div id="chart-stunting-daerah"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

@endsection
