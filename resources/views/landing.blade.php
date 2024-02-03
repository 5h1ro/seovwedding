<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Seov Invitation - Buat undangan website anda dengan keinginan anda sendiri
    </title>
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <!-- Bootstrap , fonts & icons  -->
    <link rel="stylesheet" href="{{ asset('landing') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('landing') }}/fonts/icon-font/css/style.css">
    <link rel="stylesheet" href="{{ asset('landing') }}/fonts/typography-font/typo.css">
    <link rel="stylesheet" href="{{ asset('landing') }}/fonts/fontawesome-5/css/all.css">
    <!-- Plugin'stylesheets  -->
    <link rel="stylesheet" href="{{ asset('landing') }}/plugins/aos/aos.min.css">
    <link rel="stylesheet" href="{{ asset('landing') }}/plugins/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{ asset('landing') }}/plugins/nice-select/nice-select.min.css">
    <link rel="stylesheet" href="{{ asset('landing') }}/plugins/slick/slick.min.css">
    <!-- Vendor stylesheets  -->
    <link rel="stylesheet" href="{{ asset('landing') }}/plugins/theme-mode-switcher/switcher-panel.css">
    <link rel="stylesheet" href="{{ asset('landing') }}/css/main.css">
    <!-- Custom stylesheet -->
</head>

<body data-theme-mode-panel-active data-theme="light">
    <div class="site-wrapper overflow-hidden ">
        {{-- <div id="loading">
            <img src="{{ asset('landing') }}/image/preloader.gif" alt="">
        </div> --}}
        <!-- Header Area -->
        <header
            class="site-header site-header--menu-right menu-block-5 dynamic-sticky-bg mt-3 mt-lg-0 site-header--absolute site-header--sticky">
            <div class="container">
                <nav class="navbar site-navbar">
                    <!-- Brand Logo-->
                    <div class="brand-logo">
                        <a href="/home-marketing.html">
                            <!-- light version logo (logo must be black)-->
                            <img src="image/png/logo-dark.png" alt="" class="light-version-logo">
                            <!-- Dark version logo (logo must be White)-->
                            <img src="image/png/logo-white.png" alt="" class="dark-version-logo">
                        </a>
                    </div>
                    <div class="menu-block-wrapper  ms-2">
                        <div class="menu-overlay"></div>
                    </div>
                    <div class="header-btn my-2 d-none d-lg-flex">
                        <div class="row justify-content-around ">
                            @auth
                                <div class="col-6">
                                    <a class="btn btn-niagara h-45 rounded-50 text-white shadow--niagara-3"
                                        href="{{ url('/home') }}">
                                        Home
                                    </a>
                                </div>
                            @else
                                <div class="col-6">
                                    <a class="btn btn-niagara h-45 rounded-50 text-white shadow--niagara-3"
                                        href="{{ route('login') }}">
                                        Login
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a class="btn btn-niagara h-45 rounded-50 text-white shadow--niagara-3"
                                        href="{{ route('register') }}">
                                        Register
                                    </a>
                                </div>
                            @endauth
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- navbar- -->
        <!--/ .Header Area -->
        <!-- Hero Area -->
        <div class="welcome-area welcome-area--l8 position-relative">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <!-- Welcome content Area -->
                    <div class="col-xxl-6 col-lg-7 col-md-9 col-xs-11 order-2 order-lg-1">
                        <div class="welcome-content welcome-content--l8">
                            <h1 class="welcome-content--l8__title" data-aos="fade-up" data-aos-duration="500"
                                data-aos-delay="300" data-aos-once="true">Buat Undanganmu <br
                                    class="d-none d-xs-block d-lg-none d-xl-block">Sesuai Keinginanmu Sendiri </h1>
                            <p class="welcome-content--l8__descriptions" data-aos="fade-up" data-aos-duration="500"
                                data-aos-delay="500" data-aos-once="true">Bebas memilih tema gratis <br
                                    class="d-none d-md-block">
                                dan atur sendiri apa saja yang akan ditampilkan</p>
                            @auth
                                <div class="welcome-btn-group--l8">
                                    <a class="btn btn--lg-2 btn-niagara rounded-50 me-3 text-white"
                                        href="{{ url('/home') }}" data-aos="fade-up" data-aos-duration="500"
                                        data-aos-delay="900" data-aos-once="true">Home</a>
                                </div>
                            @else
                                <div class="welcome-btn-group--l8">
                                    <a class="btn btn--lg-2 btn-niagara rounded-50 me-3 text-white"
                                        href="{{ route('register') }}" data-aos="fade-up" data-aos-duration="500"
                                        data-aos-delay="900" data-aos-once="true">Register</a>
                                </div>
                            @endauth
                        </div>
                    </div>
                    <!--/ .Welcome Content Area -->
                    <!--/ .Welcome img Area -->
                    <div class="col-xxl-6 col-lg-5 col-md-8 col-xs-10 order-1 order-lg-2">
                        <div class="hero-img d-flex align-items-end">
                            <div class="hero-l8-img-group d-flex align-items-end">
                                <div class="hero-l8-img-group__1">
                                    <img class="w-100" src="{{ asset('landing') }}/image/img1.png" alt="">
                                </div>
                                <div class="hero-l8-img-group__2">
                                    <img class="w-100" src="{{ asset('landing') }}/image/img2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ .Welcome img Area -->
                </div>
            </div>
        </div>
        <!--/ .Hero Area -->
        <!-- Services Area -->
        <div class="service-area service-area--l8 bg-default">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <!-- Section Title -->
                        <div class="section-title section-title--l8 text-center">
                            <h6 class="section-title__sub-heading text-bittersweet" data-aos="fade-up"
                                data-aos-duration="500" data-aos-once="true">Pelayanan</h6>
                            <h2 class="section-title__heading" data-aos="fade-up" data-aos-duration="500"
                                data-aos-delay="300" data-aos-once="true">Kelebihan Kami</h2>
                        </div>
                        <!--/ .Section Title -->
                    </div>
                </div>
                <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500"
                    data-aos-once="true">
                    <!-- Single Services -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-xs-8">
                        <div class="card card--services-l6 text-center card-hover__bittersweet">
                            <div class="card--services-l6__icon bg-op1__bittersweet mx-auto">
                                <i class="text-bittersweet fas fa-bell"></i>
                            </div>
                            <h3 class="card--services-l6__heading">Tema gratis</h3>
                            <p class="card--services-l6__content">Ada banyak tema<br class="d-none d-xs-block"> yang
                                bisa anda gunakan
                                lpsum<br class="d-none d-xs-block"> secara gratis</p>
                        </div>
                    </div>
                    <!--/ .Single Services -->
                    <!-- Single Services -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-xs-8">
                        <div class="card card--services-l6 text-center card-hover__niagara">
                            <div class="card--services-l6__icon bg-op1__niagara mx-auto">
                                <i class="text-niagara fas fa-layer-group"></i>
                            </div>
                            <h3 class="card--services-l6__heading">Revisi Tidak Terbatas</h3>
                            <p class="card--services-l6__content">Anda bisa merubah<br class="d-none d-xs-block"> data
                                undangan anda<br class="d-none d-xs-block"> kapan saja dan tak terbatas</p>
                        </div>
                    </div>
                    <!--/ .Single Services -->
                    <!-- Single Services -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-xs-8">
                        <div class="card card--services-l6 text-center card-hover__coral">
                            <div class="card--services-l6__icon bg-op1__coral mx-auto">
                                <i class="text-coral fas fa-envelope"></i>
                            </div>
                            <h3 class="card--services-l6__heading">Harga terjangkau</h3>
                            <p class="card--services-l6__content">Harga murah dengan<br class="d-none d-xs-block">
                                kualitas yang <br class="d-none d-xs-block"> mewah</p>
                        </div>
                    </div>
                    <!--/ .Single Services -->
                    <!-- Single Services -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-xs-8">
                        <div class="card card--services-l6 text-center card-hover__lavender">
                            <div class="card--services-l6__icon bg-op1__lavender mx-auto">
                                <i class="text-lavender fas fa-chart-pie"></i>
                            </div>
                            <h3 class="card--services-l6__heading">Bisa diakses kapan saja</h3>
                            <p class="card--services-l6__content">Undangan dapat diakses<br
                                    class="d-none d-xs-block">dimana saja dan<br class="d-none d-xs-block">kapan saja
                            </p>
                        </div>
                    </div>
                    <!--/ .Single Services -->
                </div>
            </div>
        </div>
        <!--/ .Services Area -->
        <!-- About Us Area -->

        {{-- coming soon dany --}}

        <!--/ .About Us Area -->
        <!-- Content One Area -->

        {{-- coming soon dany --}}

        <!--/ .Content One Area -->
        <!-- Pricing Table Area -->

        <!--/ .Pricing Table Area -->
        <!-- Testimonial Area -->

        {{-- coming soon dany --}}

        <!--/ .Testimonial Area -->
        <!-- promo Area -->
        <div class="promo-area promo-area--l8 bg-default">
            <div class="container">
                <div class="row justify-content-center justify-content-xl-end">
                    <div class="col-xxl-6 col-xl-5 col-lg-5 col-md-7 col-xs-9">
                        <div class="promo-image">
                            <img class="w-100" src="{{ asset('landing') }}/image/img5.png" alt="">
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-10" data-aos="fade-up" data-aos-duration="800"
                        data-aos-once="true">
                        <div class="pormo--l8-content pormo--l8">
                            <div class="section-title section-title--l8 text-center text-md-start">
                                <h6 class="section-title__sub-heading">Ayo buat undanganmu</h6>
                                <h2 class="section-title__heading">Undang keluarga dan meriahkan acara</h2>
                            </div>
                            <!-- Newsletter -->
                            <div class="newsletter-form">
                                @auth
                                    <div class="d-flex align-items-start justify-content-start">
                                        <a href="{{ url('/home') }}"
                                            class="btn-niagara text-white btn btn--lg w-140 rounded-25">Home</a>
                                    </div>
                                @else
                                    <div class="d-flex align-items-start justify-content-start">
                                        <a href="{{ route('register') }}"
                                            class="btn-niagara text-white btn btn--lg w-140 rounded-25">Register</a>
                                    </div>
                                @endauth
                            </div>
                            <!--/ .Newsletter -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ .promo Area -->
        <!-- CTA Area -->

        {{-- coming soon dany --}}

        <!--/ .CTA Area -->
    </div>
    <!-- Plugin's Scripts -->
    <script src="{{ asset('landing') }}/plugins/jquery/jquery.min.js"></script>
    <script src="{{ asset('landing') }}/plugins/jquery/jquery-migrate.min.js"></script>
    <script src="{{ asset('landing') }}/js/bootstrap.bundle.js"></script>
    <script src="{{ asset('landing') }}/plugins/fancybox/jquery.fancybox.min.js"></script>
    <script src="{{ asset('landing') }}/plugins/nice-select/jquery.nice-select.min.js"></script>
    <script src="{{ asset('landing') }}/plugins/aos/aos.min.js"></script>
    <script src="{{ asset('landing') }}/plugins/counter-up/jquery.counterup.min.js"></script>
    <script src="{{ asset('landing') }}/plugins/counter-up/waypoints.min.js"></script>
    <script src="{{ asset('landing') }}/plugins/slick/slick.min.js"></script>
    <script src="{{ asset('landing') }}/plugins/skill-bar/skill.bars.jquery.js"></script>
    <script src="{{ asset('landing') }}/plugins/isotope/isotope.pkgd.min.js"></script>
    <script src="{{ asset('landing') }}/js/menu.js"></script>
    <script src="{{ asset('landing') }}/js/custom.js"></script>
</body>

</html>
