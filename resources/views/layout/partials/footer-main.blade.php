<!-- Footer -->

<footer class="footer p-3">
@if(!isset($showNavbar) || $showNavbar !== false)
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="{{url('/')}}"><img src="{{ URL::asset('/assets/img/dppkb/itenaspanjang.png')}}" alt="logo"></a>
                        </div>
                        <div class="footer-content">
                            <p>Institut Teknologi Nasional, adalah universitas swasta berorientasi teknologi yang berlokasi di Bandung, Indonesia.</p>
                        </div>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-2 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">Quick Links</h2>
                        <ul>
                            <li>
                                <a href="{{url('about-us')}}">About Us</a>
                            </li>
                            <li>
                                <a href="{{ url('/galeri') }}">Galeri</a>
                            </li>
                            <li>
                                <a href="{{ url('https://pmb.itenas.ac.id') }}">PMB Itenas</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-contact">
                        <h2 class="footer-title">Contact Us</h2>
                        <div class="footer-contact-info">
                            <div class="footer-address">
                                <p><span><i class="feather-map-pin"></i></span> Jl. PH.H. Mustofa No.23 Bandung 40124</p>
                            </div>
                            <p><span><i class="feather-phone"></i></span> Phone: +62 22 7272215, Fax +62 22 7202892</p>
                            <p class="mb-0"><span><i class="feather-mail"></i></span> humas@itenas.ac.id</p>
                        </div>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget">
                        <h2 class="footer-title">Follow Us</h2>
                        <div class="social-icon">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/itenas.official/" target="_blank"><i class="fa-brands fa-facebook"></i> </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/itenas_official" target="_blank"><i class="fab fa-twitter"></i> </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/itenas.official/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Footer Widget -->
                </div>
            </div>
        </div>
    </div>
    <!-- /Footer Top -->
    
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <!-- Copyright -->
            <div class="copyright">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="copyright-text">
                            <p class="mb-0">Copyright &copy; <script>document.write(new Date().getFullYear())</script></p>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <!-- Copyright Menu -->
                        <div class="copyright-menu">
                            <ul class="policy-menu">
                                <li>
                                    <a href="{{url('privacy-policy')}}">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="{{url('terms-condition')}}">Terms & Conditions</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /Copyright Menu -->
                    </div>
                </div>
            </div>
            <!-- /Copyright -->
        </div>
    </div>
    <!-- /Footer Bottom -->
    @endif
</footer>
<!-- /Footer -->