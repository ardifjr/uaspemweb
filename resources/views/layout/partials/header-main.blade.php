<?php error_reporting(0); ?>
@if (!isset($showNavbar) || $showNavbar !== false)
    <div class="top-bar">
        <marquee>
            <h6>
                Sistem Informasi Institut Teknologi Nasioanl Bandung
            </h6>
        </marquee>
        <a href="javascript:;" class="top-close"><i class="feather-x"></i></a>
    </div>
    <!-- /Header -->
    <header class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg header-nav">
                <div class="navbar-header">
                    <a id="mobile_btn" href="javascript:void(0);">
                        <span class="bar-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </a>
                    <a href="{{ url('/') }}" class="navbar-brand logo">
                        <img src="{{ URL::asset('/assets/img/dppkb/itenaspanjang.png') }}" class="img-fluid" alt="Logo">
                    </a>
                    <a href="{{ url('/') }}" class="navbar-brand logo-small">
                        <img src="{{ URL::asset('/assets/img/dppkb/itenas.jpg') }}" class="img-fluid" alt="Logo">
                    </a>
                </div>
                <div class="main-menu-wrapper">
                    <div class="menu-header pt-5 pb-5">
                        <a href="{{ url('/') }}" class="menu-logo">
                            <img src="{{ URL::asset('/assets/img/dppkb/logo.svg') }}" class="img-fluid" alt="Logo">
                        </a>
                        <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i
                                class="fas fa-times"></i></a>
                    </div>
                    <ul class="main-nav">
                        <li class="has-submenu">
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="has-submenu">
                            <a class="text-dark" style="cursor: pointer">Profile<i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li><a href="{{ url('/about-us') }}">Profile, Visi & Misi</a></li>
                                <!-- <li><a href="{{ url('/struktur-organisasi') }}">Struktur Organisasi</a></li>
                                <li><a href="{{ url('/tugas-pokok-fungsi') }}">Tugas Pokok dan Fungsi</a></li> -->
                                <li><a href="{{ url('/profile-pejabat') }}">Data Dosen</a></li>
                                <li><a href="{{ url('/data-pegawai') }}">Program Studi</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a class="text-dark" style="cursor: pointer">Informasi<i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <!-- <li><a href="{{ url('/list-content') }}">List Informasi</a></li> -->
                                <li><a href="{{ url('/pengumuman') }}">Pengumuman</a></li>
                                <li><a href="{{ url('/agenda') }}">Berita</a></li>
                                <li><a href="{{ url('/artikel') }}">Artikel</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="{{ url('/galeri') }}">Galeri</a>
                        </li>
                        <li class="has-submenu">
                            <a href="{{ url('https://pmb.itenas.ac.id') }}">PMB Itenas</a>
                        </li>
                        <li class="has-submenu">
                            <a href="{{ url('/hub-kami') }}">Hubungi Kami</a>
                        </li>
                    </ul>
                </div>
                <ul class="nav header-navbar-rht">
                    <li class="nav-item">
                        <a class="nav-link header-login" href="{{ url('/login') }}"><i
                                class="fa-regular fa-circle-user me-2"></i>Login</a>
                    </li>
                </ul>
            </nav>
@endif
</div>
</header>
<!-- /Header -->
