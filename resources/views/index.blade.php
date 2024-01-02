<?php $page = 'index'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Banner Section -->
    <section class="hero-section-two">
        <div class="banner-slider slider">
            @foreach ($carousels as $carousel)
                <div class="banner">
                    <img class="img-fluid" src="{{ $carousel->url_file }}" alt="img"
                        style="width: 100%; object-fit: cover; height: 706px;">
                </div>
            @endforeach
            
        </div>
    </section>

    <!-- /Banner Section -->

    <!-- Tentang itenas -->
    <section class="about-us-eight-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12 p-3">
                    <iframe class="video-yt" src="https://www.youtube.com/embed/mkL8rrLnClE?si=LXM-FwJ-vR7r0euI"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
                <div class="col-lg-6 col-12 p-3">
                    <div class="passion-eight-all">
                        <div class="section-heading section-heading-eight passion-eight-heading aos" data-aos="fade-up">
                            <h2>{{ $data->title }}</h2>
                            <p>
                                {!! $data->detail !!}
                            </p>
                            <div>
                                <a href="{{ url('/about-us') }}" class="btn btn-primary btn-view">Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- /Tentang itenas -->

    <!-- Pengumuman Section -->
    <section class="app-seven-section px-3 py-5">
        <div class="container">
            <div class="app-sec app-sec-seven p-5">
            <h2 class="text-dark">Pengumuman terbaru</h2>
                @foreach ($announcements as $announcement)
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-6 col-12">
                            <img src="{{ $announcement->url_file }}" class="img-fluid rounded-4" alt="img"
                                style="width: 100%; height: 100%;">
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="new-app-seven-middle">
                                <div class="heading aos" data-aos="fade-up">
                                    <h2 class="text-dark">Pengumuman terbaru</h2>
                                    <h3>{{ $announcement->title }}</h3>

                                    @if (strlen($announcement->detail) <= 350)
                                        {!! $announcement->detail !!}
                                    @else
                                        {!! substr($announcement->detail, 0, 400) !!}<span>......</span>
                                        <div class="mb-5">
                                            <a href="{{ route('detail-pengumuman', $announcement->id) }}"
                                                class="btn btn-primary">Selengkapnya</a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- /Pengumuman Section -->

    <!-- berita Section -->
    <section class="useful-blog-section p-3">
        <div class="container">
            <div class="section-heading section-heading-four">
                <div class="row">
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <h2>Berita</h2>
                        <p>nah disini data konten berita</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- <div class="gcse-search"></div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- /berita Section -->

    <!-- Gallery -->
    <section class="popular-four-section p-3">
        <div class="container">
            <div class="section-heading section-heading-four">
                <div class="row align-items-center">
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <h2 class="">Gallery</h2>
                    </div>
                    <div class="col-md-6 text-md-end aos" data-aos="fade-up">
                        <a href="{{ url('/galeri') }}" class="btn btn-primary btn-view">LIHAT SEMUA GALERI<i
                                class="feather-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="gallery" style="overflow: hidden">
                <div class="row mb-5 gap-3 justify-content-center">
                    @foreach ($galleries as $gallery)
                        <div class="col-auto">
                            <a href="#" class="gallery-item" data-toggle="modal"
                                data-target="#galleryModal{{ $gallery->id }}">
                                @if (strpos($gallery->url_file, '.mp4') !== false)
                                    <video width="400" height="400" controls
                                        class="shadow image-hover-animation image-gallery">
                                        <source src="{{ $gallery->url_file }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                @else
                                    <img style="width: 400px; height: 400px; object-fit: cover; border-radius: 10px;"
                                        src="{{ $gallery->url_file }}" alt="image"
                                        class="shadow image-hover-animation image-gallery"></img>
                                @endif
                            </a>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="galleryModal{{ $gallery->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="galleryModalLabel{{ $gallery->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable"
                                role="document">
                                <div class="modal-content" style="max-height: max-content; overflow: hidden;">

                                    <div class="modal-header">
                                        <div class="d-flex justify-content-between align-items-center"
                                            style="width : 100%;">
                                            <div class="col-auto">
                                                <h5 id="galleryModalLabel{{ $gallery->id }}">{{ $gallery->title }}</h5>
                                            </div>
                                            <div class="col-auto">
                                                <button class="btn btn-primary" data-dismiss="modal" aria-label="Close">
                                                    close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6 p-4" style="max-height: 50vh; overflow: auto;">
                                                @if (strpos($gallery->url_file, '.mp4') !== false)
                                                    <video width="100%" height="auto"
                                                        style="max-height: 400px; display: block;" controls>
                                                        <source src="{{ $gallery->url_file }}" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                @else
                                                    <img src="{{ $gallery->url_file }}" class="img-fluid rounded"
                                                        alt="Gallery Image"
                                                        style="max-width: 100%;width:100%; height: auto; border-radius: 10px;">
                                                @endif
                                            </div>
                                            <div class="col-md-6 p-4">
                                                <h6>Detail:</h6>
                                                <p>{{ $gallery->detail }}</p>
                                                <h6>Type:</h6>
                                                <p>{{ $gallery->type->name }}</p>
                                                <!-- Informasi lainnya jika ada -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>

    <!-- /Gallery -->

    <!-- widget youtube -->
    <section class="feature-section p-3">
        <div class="container">
            <div class="section-heading">
                <div class="row">
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <h2>Youtube</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-12">
                <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
                <div class="elfsight-app-0cdfd410-a086-4d3e-a8f0-b4b78a4ca250" data-elfsight-app-lazy></div>                
                </div>
            </div>
        </div>
    </section>
    <!-- /widget youtube -->

    <!-- widget instragram -->
    <section class="feature-section p-3">
        <div class="container">
            <div class="section-heading">
                <div class="row">
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <h2>Instragram</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-12">
                <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-a47b92e0-9b79-4217-8f75-8ed74cee0c1c" data-elfsight-app-lazy></div>
            </div>
        </div>
    </section>
    <!-- /widget instragram -->

    <!-- Kritik & saran -->
    <section class="about-us-eight-section p-3">
        <div class="container">
            <div class="row">
                <div class="new-comment">
                    <h4 class="text-center">Kritik & Saran</h4>
                    <!-- <form action="{{ url('suggestions') }}" method="post"> -->
                        @method('post') @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Name*</label>
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Enter Your Name">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Email*</label>
                                    <input type="email" name="email" class="form-control"
                                        placeholder="Enter Email Address">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Phone Number*</label>
                                    <input type="text" name="phone_number" class="form-control"
                                        placeholder="Enter Your Phone Number">
                                    @error('phone_number')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Address*</label>
                                    <input type="text" name="address" class="form-control"
                                        placeholder="Enter Your Adress">
                                    @error('address')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-form-label">Message*</label>
                                    <textarea name="message" rows="6" class="form-control" placeholder="Enter Your Comment Here...."></textarea>
                                </div>
                                @error('message')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /Kritik & saran -->

    <br> <br> <br> <br>

    <!-- Partners Section -->
    <section class="blog-section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center aos" data-aos="fade-up">
                    <div class="section-heading">
                        <h2>Link Terkait</h2>
                        <p>ini disini nanti beberapa link terkait itenas</p>
                    </div>
                </div>
                <div class="owl-carousel partners-slider aos" data-aos="fade-up">
                    <!-- @foreach ($linkterkait as $link)
                        <div class="partner-img">
                            <a href ="{{ $link->detail }}" target="blank"><img src="{{ $link->url_file }}"
                                    alt="img"></a>
                        </div>
                    @endforeach -->
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->

    <!-- App Section -->
    <section class="app-section">
        <div class="container">
            <div class="app-sec">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="col-md-12">
                            <div class="heading aos" data-aos="fade-up">
                                <h2>Institut Teknologi Nasional Bandung</h2>
                                <p>Institut Teknologi Nasional (Itenas) Bandung merupakan perguruan tinggi yang terletak di Jl. PH.H. Mustopa No. 23 – Bandung. 
                                    Area yang mudah dijangkau dari berbagai arah Kota Bandung menjadikan lokasi Kampus Itenas cukup strategis.
                                     Dikelilingi oleh berbagai pusat perbelanjaan, pusat kuliner, percetakan, dan juga perumahan, Itenas menjadi salah satu kampus yang sangat hidup dan menyenangkan.</p>
                                <h6>It's A Good Start</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="appimg-set aos float-right" data-aos="fade-up">
                            <img src="assets/img/offer-img.png" class="img-fluid" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /App Section -->
    @foreach ($announcements as $announcement)
        <!-- pop up -->
        <div id="popup" class="popup">
            <div class="popup-content">
                <span class="close" id="closePopup">&times;</span>
                <img class="img-fluid serv-img" alt="Service Image" src="{{ $announcement->url_file }}">
            </div>
        </div>
    @endforeach

    <!-- /pop up -->
    @component('components.model-popup')
    @endcomponent
    @component('components.scrollToTop')
    @endcomponent
@endsection
