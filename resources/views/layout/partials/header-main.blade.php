<?php error_reporting(0); ?>
@if (!isset($showNavbar) || $showNavbar !== false)
    <div class="top-bar">
        <marquee>
            <h6>
                Dinas Pengendalian Penduduk dan Keluarga Berencana (DPPKB) | Situs Resmi - Pemerintah Daerah Kota
                Bandung.
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
                        <img src="{{ URL::asset('/assets/img/dppkb/logo.png') }}" class="img-fluid" alt="Logo">
                    </a>
                    <a href="{{ url('/') }}" class="navbar-brand logo-small">
                        <img src="{{ URL::asset('/assets/img/dppkb/logo.png') }}" class="img-fluid" alt="Logo">
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
                                <li><a href="{{ url('/struktur-organisasi') }}">Struktur Organisasi</a></li>
                                <li><a href="{{ url('/tugas-pokok-fungsi') }}">Tugas Pokok dan Fungsi</a></li>
                                <li><a href="{{ url('/profile-pejabat') }}">Profil Pejabat Struktural</a></li>
                                <li><a href="{{ url('/data-pegawai') }}">Data Pegawai DPPKB</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a class="text-dark" style="cursor: pointer">Informasi<i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li><a href="{{ url('/list-content') }}">List Informasi</a></li>
                                <li><a href="{{ url('/pengumuman') }}">Pengumuman</a></li>
                                <li><a href="{{ url('/agenda') }}">Agenda</a></li>
                                <li><a href="{{ url('/artikel') }}">Artikel</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="{{ url('/galeri') }}">Galeri</a>
                        </li>
                        <li class="has-submenu">
                            <a class="text-dark" style="cursor: pointer">Data - Data<i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li><a href="{{ url('/data-stanting') }}">Data Stunting</a></li>
                                <li><a href="{{ url('/dokumen') }}">Download Dokumen</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a class="text-dark" style="cursor: pointer">Layanan<i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li><a href="{{ url('/layanan/bppp') }}">
                                        <div class="text-wrap">
                                            Bidang Pengendalian Penduduk dan Penggerakan
                                        </div>
                                    </a></li>
                                <li><a href="{{ url('/layanan/bkbkkk') }}">
                                        <div class="text-wrap">
                                            Bidang Keluarga Berencana Ketahanan dan Kesejahteraan Keluarga</div>
                                    </a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a class="text-dark" style="cursor: pointer">PPID<i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li><a href="{{ url('/tentang-ppid') }}">Tentang PPID</a></li>
                                <li><a href="{{ url('/daftar-info-public') }}">Daftar Informasi Publik</a></li>
                                <li><a href="{{ url('/daftar-info-kecuali') }}">Daftar Informasi Dikecualikan</a></li>
                                <!-- <li><a href="javascript:void(0);">Artikel</a></li> -->
                            </ul>
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
