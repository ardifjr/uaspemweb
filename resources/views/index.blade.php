<?php $page = 'index'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="banner-slider slider">
            <div class="banner">
                <img class="img-fluid" src="{{ URL::asset('/assets/img/banner.jpg') }}" alt="img">
            </div>
            <div class="banner">
                <img class="img-fluid" src="{{ URL::asset('/assets/img/banner-02.jpg') }}" alt="img">
            </div>
            <div class="banner">
                <img class="img-fluid" src="{{ URL::asset('/assets/img/banner-03.jpg') }}" alt="img">
            </div>
        </div>
    </section>
    <!-- /Hero Section -->

    <!-- Appointment Section -->
    <section class="appointment-section aos" data-aos="fade-up">
        <div class="container">
            <div class="appointment-main">
                <h6>GET A MODERN LOOK</h6>
                <h1>Upto 25% offer on First Appointment</h1>
                <p>No one you see is smarter than he so join us here are sure to get a smile from seven stranded.</p>
                <div class="appointment-btn">
                    <a href="{{ url('free-trial') }}" class="btn btn-primary">BOOK AN APPOINTMENT NOW</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /Appointment Section -->

    <!-- Services Section -->
    <section class="services-section">
        <div class="container">
            <div class="services-header aos" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-content">
                            <h2>Our Services</h2>
                            <div class="our-img-all">
                                <img src="{{ URL::asset('/assets/img/icons/scissor.svg') }}" alt="">
                            </div>
                            <p>Our Barbershop & Tattoo Salon provides classic services combined with innovative techniques.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel services-slider aos" data-aos="fade-up">
                        <div class="services-all">
                            <div class="services-main-img">
                                <a href="">
                                    <img class="img-fluid serv-image" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-20.png') }}">
                                </a>
                                <div class="service-foot">
                                    <img src="{{ URL::asset('/assets/img/icons/saloon-service-2.svg') }}" alt="">
                                    <h4>Haircut</h4>
                                    <h6>25 Saloons</h6>
                                </div>
                            </div>
                        </div>
                        <div class="services-all">
                            <div class="services-main-img">
                                <a href="">
                                    <img class="img-fluid serv-image" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-21.png') }}">
                                </a>
                                <div class="service-foot">
                                    <img src="{{ URL::asset('/assets/img/icons/saloon-service-2.svg') }}" alt="">
                                    <h4>Trimming</h4>
                                    <h6>25 Saloons</h6>
                                </div>
                            </div>
                        </div>
                        <div class="services-all">
                            <div class="services-main-img">
                                <a href="">
                                    <img class="img-fluid serv-image" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-22.png') }}">
                                </a>
                                <div class="service-foot">
                                    <img src="{{ URL::asset('/assets/img/icons/saloon-service-2.svg') }}" alt="">
                                    <h4>Saloons</h4>
                                    <h6>25 Saloons</h6>
                                </div>
                            </div>
                        </div>
                        <div class="services-all">
                            <div class="services-main-img">
                                <a href="">
                                    <img class="img-fluid serv-image" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-23.png') }}">
                                </a>
                                <div class="service-foot">
                                    <img src="{{ URL::asset('/assets/img/icons/saloon-service-2.svg') }}" alt="">
                                    <h4>Shaving</h4>
                                    <h6>25 Saloons</h6>
                                </div>
                            </div>
                        </div>
                        <div class="services-all">
                            <div class="services-main-img">
                                <a href="">
                                    <img class="img-fluid serv-image" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-20.png') }}">
                                </a>
                                <div class="service-foot">
                                    <img src="{{ URL::asset('/assets/img/icons/saloon-service-2.svg') }}" alt="">
                                    <h4>Haircut</h4>
                                    <h6>25 Saloons</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidecircle-ryt">
            <img src="{{ URL::asset('/assets/img/side-circle.png') }}" alt="">
        </div>
    </section>
    <!-- /service Section -->

    <!-- video section -->
    <section class="service-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item-video" data-merge="3"><a class="owl-video" href="https://vimeo.com/23924346"></a></div>
                        <div class="item-video" data-merge="1"><a class="owl-video" href="https://www.youtube.com/watch?v=JpxsRwnRwCQ"></a></div>
                        <div class="item-video" data-merge="2"><a class="owl-video" href="https://www.youtube.com/watch?v=FBu_jxT1PkA"></a></div>
                        <div class="item-video" data-merge="1"><a class="owl-video" href="https://www.youtube.com/watch?v=oy18DJwy5lI"></a></div>
                        <div class="item-video" data-merge="2"><a class="owl-video" href="https://www.youtube.com/watch?v=H3jLkJrhHKQ"></a></div>
                        <div class="item-video" data-merge="3"><a class="owl-video" href="https://www.youtube.com/watch?v=g3J4VxWIM6s"></a></div>
                        <div class="item-video" data-merge="1"><a class="owl-video" href="https://www.youtube.com/watch?v=0fhoIate4qI"></a></div>
                        <div class="item-video" data-merge="2"><a class="owl-video" href="https://www.youtube.com/watch?v=EF_kj2ojZaE"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- video section -->

    <!-- Feature Section -->
    <section class="feature-section">
        <div class="container">
            <div class="section-heading">
                <div class="row">
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <h2>Featured Categories</h2>
                        <p>What do you need to find?</p>
                    </div>
                    <div class="col-md-6 text-md-end aos" data-aos="fade-up">
                        <a href="{{ url('categories') }}" class="btn btn-primary btn-view">View All<i
                                class="feather-arrow-right-circle"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <a href="{{ url('service-details') }}" class="feature-box aos" data-aos="fade-up">
                        <div class="feature-icon">
                            <span>
                                <img src="{{ URL::asset('/assets/img/icons/feature-icon-01.svg') }}" alt="img">
                            </span>
                        </div>
                        <h5>Construction</h5>
                        <div class="feature-overlay">
                            <img src="{{ URL::asset('/assets/img/services/service-02.jpg') }}" alt="img">
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="{{ url('service-details') }}" class="feature-box aos" data-aos="fade-up">
                        <div class="feature-icon">
                            <span>
                                <img src="{{ URL::asset('/assets/img/icons/feature-icon-02.svg') }}" alt="img">
                            </span>
                        </div>
                        <h5>Car Wash</h5>
                        <div class="feature-overlay">
                            <img src="{{ URL::asset('/assets/img/feature.jpg') }}" alt="img">
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="{{ url('service-details') }}" class="feature-box aos" data-aos="fade-up">
                        <div class="feature-icon">
                            <span>
                                <img src="{{ URL::asset('/assets/img/icons/feature-icon-03.svg') }}" alt="img">
                            </span>
                        </div>
                        <h5>Electrical</h5>
                        <div class="feature-overlay">
                            <img src="{{ URL::asset('/assets/img/services/service-01.jpg') }}" alt="img">
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="{{ url('service-details') }}" class="feature-box aos" data-aos="fade-up">
                        <div class="feature-icon">
                            <span>
                                <img src="{{ URL::asset('/assets/img/icons/feature-icon-04.svg') }}" alt="img">
                            </span>
                        </div>
                        <h5>Cleaning</h5>
                        <div class="feature-overlay">
                            <img src="{{ URL::asset('/assets/img/services/service-09.jpg') }}" alt="img">
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="{{ url('service-details') }}" class="feature-box aos" data-aos="fade-up">
                        <div class="feature-icon">
                            <span>
                                <img src="{{ URL::asset('/assets/img/icons/feature-icon-05.svg') }}" alt="img">
                            </span>
                        </div>
                        <h5>Interior</h5>
                        <div class="feature-overlay">
                            <img src="{{ URL::asset('/assets/img/services/service-07.jpg') }}" alt="img">
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="{{ url('service-details') }}" class="feature-box aos" data-aos="fade-up">
                        <div class="feature-icon">
                            <span>
                                <img src="{{ URL::asset('/assets/img/icons/feature-icon-06.svg') }}" alt="img">
                            </span>
                        </div>
                        <h5>Carpentry</h5>
                        <div class="feature-overlay">
                            <img src="{{ URL::asset('/assets/img/services/service-03.jpg') }}" alt="img">
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="{{ url('service-details') }}" class="feature-box aos" data-aos="fade-up">
                        <div class="feature-icon">
                            <span>
                                <img src="{{ URL::asset('/assets/img/icons/feature-icon-07.svg') }}" alt="img">
                            </span>
                        </div>
                        <h5>Computer</h5>
                        <div class="feature-overlay">
                            <img src="{{ URL::asset('/assets/img/services/service-06.jpg') }}" alt="img">
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="{{ url('service-details') }}" class="feature-box aos" data-aos="fade-up">
                        <div class="feature-icon">
                            <span>
                                <img src="{{ URL::asset('/assets/img/icons/feature-icon-08.svg') }}" alt="img">
                            </span>
                        </div>
                        <h5>Plumbing</h5>
                        <div class="feature-overlay">
                            <img src="{{ URL::asset('/assets/img/services/service-11.jpg') }}" alt="img">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- /Feature Section -->

    <!-- Service Section -->
    <section class="service-section">
        <div class="container">
            <div class="section-heading">
                <div class="row">
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <h2>Featured Services</h2>
                        <p>Explore the greates our services. You won’t be disappointed</p>
                    </div>
                    <div class="col-md-6 text-md-end aos" data-aos="fade-up">
                        <div class="owl-nav mynav"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel service-slider">
                        <div class="service-widget aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-01.jpg') }}">
                                </a>
                                <div class="fav-item">
                                    <a href="{{ url('categories') }}"><span class="item-cat">Cleaning</span></a>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                                <div class="item-info">
                                    <a href="{{ url('providers') }}"><span class="item-img"><img
                                                src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg') }}"
                                                class="avatar" alt=""></span></a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Electric Panel Repairing Service</a>
                                </h3>
                                <p><i class="feather-map-pin"></i>New Jersey, USA<span class="rate"><i
                                            class="fas fa-star filled"></i>4.9</span></p>
                                <div class="serv-info">
                                    <h6>$25.00<span class="old-price">$35.00</span></h6>
                                    <a href="{{ url('service-details') }}" class="btn btn-book">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="service-widget aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-02.jpg') }}">
                                </a>
                                <div class="fav-item">
                                    <a href="{{ url('categories') }}"><span class="item-cat">Construction</span></a>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                                <div class="item-info">
                                    <a href="{{ url('providers') }}"><span class="item-img"><img
                                                src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}"
                                                class="avatar" alt=""></span></a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Toughened Glass Fitting Services</a>
                                </h3>
                                <p><i class="feather-map-pin"></i>Montana, USA<span class="rate"><i
                                            class="fas fa-star filled"></i>4.9</span></p>
                                <div class="serv-info">
                                    <h6>$45.00</h6>
                                    <a href="{{ url('service-details') }}" class="btn btn-book">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="service-widget aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-03.jpg') }}">
                                </a>
                                <div class="fav-item">
                                    <a href="{{ url('categories') }}"><span class="item-cat">Carpentry</span></a>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                                <div class="item-info">
                                    <a href="{{ url('providers') }}"><span class="item-img"><img
                                                src="{{ URL::asset('/assets/img/profiles/avatar-03.jpg') }}"
                                                class="avatar" alt=""></span></a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Wooden Carpentry Work</a>
                                </h3>
                                <p><i class="feather-map-pin"></i>Montana, USA<span class="rate"><i
                                            class="fas fa-star filled"></i>4.9</span></p>
                                <div class="serv-info">
                                    <h6>$45.00</h6>
                                    <a href="{{ url('service-details') }}" class="btn btn-book">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="service-widget aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-11.jpg') }}">
                                </a>
                                <div class="fav-item">
                                    <a href="{{ url('categories') }}"><span class="item-cat">Construction</span></a>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                                <div class="item-info">
                                    <a href="{{ url('providers') }}"><span class="item-img"><img
                                                src="{{ URL::asset('/assets/img/profiles/avatar-04.jpg') }}"
                                                class="avatar" alt=""></span></a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Plumbing Services</a>
                                </h3>
                                <p><i class="feather-map-pin"></i>Georgia, USA<span class="rate"><i
                                            class="fas fa-star filled"></i>4.9</span></p>
                                <div class="serv-info">
                                    <h6>$45.00</h6>
                                    <a href="{{ url('service-details') }}" class="btn btn-book">Book Now</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="btn-sec aos" data-aos="fade-up">
                    <a href="{{ url('search') }}" class="btn btn-primary btn-view">View All<i
                            class="feather-arrow-right-circle"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- /Service Section -->

    <!-- Providers Section -->
    <section class="providers-section">
        <div class="container">
            <div class="section-heading">
                <div class="row">
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <h2>Top Providers</h2>
                        <p>Meet Our Experts</p>
                    </div>
                    <div class="col-md-6 text-md-end aos" data-aos="fade-up">
                        <a href="{{ url('providers') }}" class="btn btn-primary btn-view">View All<i
                                class="feather-arrow-right-circle"></i></a>
                    </div>
                </div>
            </div>
            <div class="row  aos" data-aos="fade-up">
                <div class="col-lg-3 col-sm-6">
                    <div class="providerset">
                        <div class="providerset-img">
                            <a href="{{ url('provider-details') }}">
                                <img src="{{ URL::asset('/assets/img/provider/provider-11.jpg') }}" alt="img">
                            </a>
                        </div>
                        <div class="providerset-content">
                            <div class="providerset-price">
                                <div class="providerset-name">
                                    <h4><a href="{{ url('provider-details') }}">John Smith</a><i
                                            class="fa fa-check-circle" aria-hidden="true"></i></h4>
                                    <span>Electrician</span>
                                </div>
                                <div class="providerset-prices">
                                    <h6>$20.00<span>/hr</span></h6>
                                </div>
                            </div>
                            <div class="provider-rating">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="providerset">
                        <div class="providerset-img">
                            <a href="{{ url('provider-details') }}">
                                <img src="{{ URL::asset('/assets/img/provider/provider-12.jpg') }}" alt="img">
                            </a>
                        </div>
                        <div class="providerset-content">
                            <div class="providerset-price">
                                <div class="providerset-name">
                                    <h4><a href="{{ url('provider-details') }}">Michael</a><i class="fa fa-check-circle"
                                            aria-hidden="true"></i></h4>
                                    <span>Carpenter</span>
                                </div>
                                <div class="providerset-prices">
                                    <h6>$50.00<span>/hr</span></h6>
                                </div>
                            </div>
                            <div class="provider-rating">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fa-solid fa-star-half-stroke filled"></i><span>(228)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="providerset">
                        <div class="providerset-img">
                            <a href="{{ url('provider-details') }}">
                                <img src="{{ URL::asset('/assets/img/provider/provider-13.jpg') }}" alt="img">
                            </a>
                        </div>
                        <div class="providerset-content">
                            <div class="providerset-price">
                                <div class="providerset-name">
                                    <h4><a href="{{ url('provider-details') }}">Antoinette</a><i
                                            class="fa fa-check-circle" aria-hidden="true"></i></h4>
                                    <span>Cleaner</span>
                                </div>
                                <div class="providerset-prices">
                                    <h6>$25.00<span>/hr</span></h6>
                                </div>
                            </div>
                            <div class="provider-rating">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fa-solid fa-star-half-stroke filled"></i><span>(130)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="providerset">
                        <div class="providerset-img">
                            <a href="{{ url('provider-details') }}">
                                <img src="{{ URL::asset('/assets/img/provider/provider-14.jpg') }}" alt="img">
                            </a>
                        </div>
                        <div class="providerset-content">
                            <div class="providerset-price">
                                <div class="providerset-name">
                                    <h4><a href="{{ url('provider-details') }}">Thompson</a><i class="fa fa-check-circle"
                                            aria-hidden="true"></i></h4>
                                    <span>Mechanic</span>
                                </div>
                                <div class="providerset-prices">
                                    <h6>$25.00<span>/hr</span></h6>
                                </div>
                            </div>
                            <div class="provider-rating">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fa-solid fa-star-half-stroke filled"></i><span>(95)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Providers Section -->

    <!-- Work Section -->
    <section class="work-section pt-0">
        <div class="container">
            <div class="row  aos" data-aos="fade-up">
                <div class="col-md-12">
                    <div class="offer-paths">
                        <div class="offer-pathimg">
                            <img src="{{ URL::asset('/assets/img/offer.png') }}" alt="img">
                        </div>
                        <div class="offer-path-content">
                            <h3>We Are Offering 14 Days Free Trial</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore minim veniam, quis nostrud exercitation ullamco magna aliqua. </p>
                            <a href="{{ url('free-trial') }}" class="btn btn-primary btn-views">Try 14 Days Free Trial<i
                                    class="feather-arrow-right-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading aos" data-aos="fade-up">
                        <h2>How It Works</h2>
                        <p>Aliquam lorem ante, dapibus in, viverra quis</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="work-box aos" data-aos="fade-up">
                        <div class="work-icon">
                            <span>
                                <img src="{{ URL::asset('/assets/img/icons/work-icon.svg') }}" alt="img">
                            </span>
                        </div>
                        <h5>Choose What To Do</h5>
                        <p>Lorem ipsum dolor amet, consectetur adipiscing tempor labore et dolore magna aliqua.</p>
                        <h4>01</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box aos" data-aos="fade-up">
                        <div class="work-icon">
                            <span>
                                <img src="{{ URL::asset('/assets/img/icons/find-icon.svg') }}" alt="img">
                            </span>
                        </div>
                        <h5>Find What You Want</h5>
                        <p>Lorem ipsum dolor amet, consectetur adipiscing tempor labore et dolore magna aliqua.</p>
                        <h4>02</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box aos" data-aos="fade-up">
                        <div class="work-icon">
                            <span>
                                <img src="{{ URL::asset('/assets/img/icons/place-icon.svg') }}" alt="img">
                            </span>
                        </div>
                        <h5>Amazing Places</h5>
                        <p>Lorem ipsum dolor amet, consectetur adipiscing tempor labore et dolore magna aliqua.</p>
                        <h4>03</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Work Section -->

    <!-- Service Section -->
    <section class="service-section">
        <div class="container">
            <div class="section-heading">
                <div class="row">
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <h2>Most Popular Services</h2>
                        <p>Explore the greates our services. You won’t be disappointed</p>
                    </div>
                    <div class="col-md-6 text-md-end aos" data-aos="fade-up">
                        <div class="owl-nav mynav1"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel popular-slider">

                        <div class="service-widget aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-04.jpg') }}">
                                </a>
                                <div class="fav-item">
                                    <a href="{{ url('categories') }}"><span class="item-cat">Car Wash</span></a>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                                <div class="item-info">
                                    <a href="{{ url('providers') }}"><span class="item-img"><img
                                                src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg') }}"
                                                class="avatar" alt=""></span></a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Car Repair Services</a>
                                </h3>
                                <p><i class="feather-map-pin"></i>Maryland City, MD, USA<span class="rate"><i
                                            class="fas fa-star filled"></i>4.9</span></p>
                                <div class="serv-info">
                                    <h6>$20.00<span class="old-price">$35.00</span></h6>
                                    <a href="{{ url('service-details') }}" class="btn btn-book">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="service-widget aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-05.jpg') }}">
                                </a>
                                <div class="fav-item">
                                    <a href="{{ url('categories') }}"><span class="item-cat">Cleaning</span></a>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                                <div class="item-info">
                                    <a href="{{ url('providers') }}"><span class="item-img"><img
                                                src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}"
                                                class="avatar" alt=""></span></a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Commercial Painting Services</a>
                                </h3>
                                <p><i class="feather-map-pin"></i>Alabama, USA<span class="rate"><i
                                            class="fas fa-star filled"></i>4.9</span></p>
                                <div class="serv-info">
                                    <h6>$500.00</h6>
                                    <a href="{{ url('service-details') }}" class="btn btn-book">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="service-widget aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-06.jpg') }}">
                                </a>
                                <div class="fav-item">
                                    <a href="{{ url('categories') }}"><span class="item-cat">Computer</span></a>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                                <div class="item-info">
                                    <a href="{{ url('providers') }}"><span class="item-img"><img
                                                src="{{ URL::asset('/assets/img/profiles/avatar-03.jpg') }}"
                                                class="avatar" alt=""></span></a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Computer & Server AMC Service</a>
                                </h3>
                                <p><i class="feather-map-pin"></i>California, USA<span class="rate"><i
                                            class="fas fa-star filled"></i>4.9</span></p>
                                <div class="serv-info">
                                    <h6>$80.00<span class="old-price">$96.00</span></h6>
                                    <a href="{{ url('service-details') }}" class="btn btn-book">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="service-widget aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-08.jpg') }}">
                                </a>
                                <div class="fav-item">
                                    <a href="{{ url('categories') }}"><span class="item-cat">Cleaning</span></a>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                                <div class="item-info">
                                    <a href="{{ url('providers') }}"><span class="item-img"><img
                                                src="{{ URL::asset('/assets/img/profiles/avatar-04.jpg') }}"
                                                class="avatar" alt=""></span></a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Steam Car Wash</a>
                                </h3>
                                <p><i class="feather-map-pin"></i>Texas, USA<span class="rate"><i
                                            class="fas fa-star filled"></i>4.9</span></p>
                                <div class="serv-info">
                                    <h6>$500.00</h6>
                                    <a href="{{ url('service-details') }}" class="btn btn-book">Book Now</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="btn-sec aos" data-aos="fade-up">
                    <a href="{{ url('search') }}" class="btn btn-primary btn-view">View All<i
                            class="feather-arrow-right-circle"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- /Service Section -->

    <!-- pricing Section -->
    <section class="service-section pricing-sections pt-0">
        <div class="container">
            <div class="section-heading">
                <div class="row">
                    <div class="col-md-12 text-center aos" data-aos="fade-up">
                        <h2>Pricing Plans</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
            </div>
            <div class="row aos" data-aos="fade-up">
                <div class="col-lg-4 col-sm-12">
                    <div class="pricing-popular">
                        <span class="btn w-100">Popular</span>
                    </div>
                    <div class="pricing-plans">
                        <div class="pricing-planshead">
                            <h4>Basic</h4>
                            <h5>Lorem ipsum dolor sit amet, consectetur</h5>
                            <h6>$50<span>/month</span></h6>
                        </div>
                        <div class="pricing-planscontent">
                            <ul>
                                <li>
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Sed perspiciatis unde omnis natus error</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Lorem dolor consecteturadipiscing elit</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Duis irure dolor reprehenderit voluptate</span>
                                </li>
                                <li class="inactive">
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Nemo enim ipsam voluptatem quia </span>
                                </li>
                                <li class="inactive">
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Sed perspiciatis iste natus error </span>
                                </li>
                                <li class="inactive">
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Lorem dolor consecteturadipiscing elit </span>
                                </li>
                            </ul>
                            <div class="pricing-btn">
                                <a href="{{ url('search') }}" class="btn btn-primary btn-view">Get Started<i
                                        class="feather-arrow-right-circle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="pricing-popular active">
                        <span class="btn w-100">Popular</span>
                    </div>
                    <div class="pricing-plans active">
                        <div class="pricing-planshead">
                            <h4>Standard</h4>
                            <h5>Lorem ipsum dolor sit amet, consectetur</h5>
                            <h6>$100<span>/month</span></h6>
                        </div>
                        <div class="pricing-planscontent">
                            <ul>
                                <li>
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Sed perspiciatis unde omnis natus error</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Lorem dolor consecteturadipiscing elit</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Duis irure dolor reprehenderit voluptate</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Nemo enim ipsam voluptatem quia </span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Sed perspiciatis iste natus error </span>
                                </li>
                                <li class="inactive">
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Lorem dolor consecteturadipiscing elit </span>
                                </li>
                            </ul>
                            <div class="pricing-btn">
                                <a href="{{ url('search') }}" class="btn btn-primary btn-view">Get Started<i
                                        class="feather-arrow-right-circle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="pricing-popular ">
                        <span class="btn w-100">Popular</span>
                    </div>
                    <div class="pricing-plans ">
                        <div class="pricing-planshead">
                            <h4>Premium</h4>
                            <h5>Lorem ipsum dolor sit amet, consectetur</h5>
                            <h6>$150<span>/month</span></h6>
                        </div>
                        <div class="pricing-planscontent">
                            <ul>
                                <li>
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Sed perspiciatis unde omnis natus error</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Lorem dolor consecteturadipiscing elit</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Duis irure dolor reprehenderit voluptate</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Nemo enim ipsam voluptatem quia </span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Sed perspiciatis iste natus error </span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Lorem dolor consecteturadipiscing elit </span>
                                </li>
                            </ul>
                            <div class="pricing-btn">
                                <a href="{{ url('search') }}" class="btn btn-primary btn-view">Get Started<i
                                        class="feather-arrow-right-circle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /pricing Section -->

    <!-- Client Section -->
    <section class="client-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading aos" data-aos="fade-up">
                        <h2>What our client says</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur elit</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel testimonial-slider">

                        <div class="client-widget aos" data-aos="fade-up">
                            <div class="client-img">
                                <a href="javascript:;">
                                    <img class="img-fluid" alt="Image"
                                        src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg') }}">
                                </a>
                            </div>
                            <div class="client-content">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi </p>
                                <h5>Sophie Moore</h5>
                                <h6>Director</h6>
                            </div>
                        </div>
                        <div class="client-widget aos" data-aos="fade-up">
                            <div class="client-img">
                                <a href="javascript:;">
                                    <img class="img-fluid" alt="Image"
                                        src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}">
                                </a>
                            </div>
                            <div class="client-content">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fa-solid fa-star-half-stroke filled"></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi </p>
                                <h5>Mike Hussy</h5>
                                <h6>Lead</h6>
                            </div>
                        </div>
                        <div class="client-widget aos" data-aos="fade-up">
                            <div class="client-img">
                                <a href="javascript:;">
                                    <img class="img-fluid" alt="Image"
                                        src="{{ URL::asset('/assets/img/profiles/avatar-03.jpg') }}">
                                </a>
                            </div>
                            <div class="client-content">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi </p>
                                <h5>John Doe</h5>
                                <h6>CEO</h6>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Client Section -->

    <!-- Blog Section -->
    <section class="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center aos" data-aos="fade-up">
                    <div class="section-heading">
                        <h2>Latest Blog</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur elit</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="blog flex-fill aos" data-aos="fade-up">
                        <div class="blog-image">
                            <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                    src="{{ URL::asset('/assets/img/blog/blog-01.jpg') }}" alt="Post Image"></a>
                        </div>
                        <div class="blog-content">
                            <ul class="blog-item">
                                <li><i class="feather-calendar"></i>09 Aug 2023</li>
                                <li>
                                    <div class="post-author">
                                        <a href="javascript:;"><i class="feather-user"></i><span>Hal Lewis</span></a>
                                    </div>
                                </li>
                            </ul>
                            <h3 class="blog-title">
                                <a href="{{ url('blog-details') }}">How to Choose a Electrical ServiceProvider?</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="blog flex-fill aos" data-aos="fade-up">
                        <div class="blog-image">
                            <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                    src="{{ URL::asset('/assets/img/blog/blog-02.jpg') }}" alt="Post Image"></a>
                        </div>
                        <div class="blog-content">
                            <ul class="blog-item">
                                <li><i class="feather-calendar"></i>09 Aug 2023</li>
                                <li>
                                    <div class="post-author">
                                        <a href="javascript:;"><i class="feather-user"></i><span>JohnDoe</span></a>
                                    </div>
                                </li>
                            </ul>
                            <h3 class="blog-title">
                                <a href="{{ url('blog-details') }}">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="blog flex-fill aos" data-aos="fade-up">
                        <div class="blog-image">
                            <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                    src="{{ URL::asset('/assets/img/blog/blog-03.jpg') }}" alt="Post Image"></a>
                        </div>
                        <div class="blog-content">
                            <ul class="blog-item">
                                <li><i class="feather-calendar"></i>09 Aug 2023</li>
                                <li>
                                    <div class="post-author">
                                        <a href="javascript:;"><i class="feather-user"></i><span>Greg Avery</span></a>
                                    </div>
                                </li>
                            </ul>
                            <h3 class="blog-title">
                                <a href="{{ url('blog-details') }}">Construction Service Scams: How to Avoid Them</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Blog Section -->

    <!-- Partners Section -->
    <section class="blog-section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center aos " data-aos="fade-up">
                    <div class="section-heading">
                        <h2>Our Partners</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur elit</p>
                    </div>
                </div>
                <div class="owl-carousel partners-slider aos " data-aos="fade-up">
                    <div class="partner-img">
                        <img src="{{ URL::asset('/assets/img/partner/partner1.svg') }}" alt="img">
                    </div>
                    <div class="partner-img">
                        <img src="{{ URL::asset('/assets/img/partner/partner2.svg') }}" alt="img">
                    </div>
                    <div class="partner-img">
                        <img src="{{ URL::asset('/assets/img/partner/partner3.svg') }}" alt="img">
                    </div>
                    <div class="partner-img">
                        <img src="{{ URL::asset('/assets/img/partner/partner4.svg') }}" alt="img">
                    </div>
                    <div class="partner-img">
                        <img src="{{ URL::asset('/assets/img/partner/partner5.svg') }}" alt="img">
                    </div>
                    <div class="partner-img">
                        <img src="{{ URL::asset('/assets/img/partner/partner6.svg') }}" alt="img">
                    </div>
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
                                <h2>Download Our App</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua.</p>
                                <h6>Scan the QR code to get the app now</h6>
                                <div class="scan-img">
                                    <img src="{{ URL::asset('/assets/img/scan-img.png') }}" class="img-fluid"
                                        alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="downlaod-btn aos" data-aos="fade-up">
                            <a href="javascript:;" target="_blank">
                                <img src="{{ URL::asset('/assets/img/googleplay.svg') }}" alt="img">
                            </a>
                            <a href="javascript:;" target="_blank">
                                <img src="{{ URL::asset('/assets/img/appstore.svg') }}" alt="img">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="appimg-set aos" data-aos="fade-up">
                            <img src="{{ URL::asset('/assets/img/app-img.png') }}" class="img-fluid" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /App Section -->
    @component('components.model-popup')
    @endcomponent
    @component('components.scrollToTop')
    @endcomponent
@endsection
