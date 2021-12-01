<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from trax.acrothemes.com/bootstrap-v5/index-particles.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Oct 2021 04:26:50 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Biswas Poultry & Fish Feed Ltd.</title>
    <link href="{{ asset('frontend_asset') }}/images/favicon.png" rel="icon">
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/morphext.css">
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/tooltipster.min.css">
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/revolution/navigation.css">
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/revolution/settings.css">
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/style.css">
</head>
<body>
<!--PreLoader-->
<div class="loader">
    <div class="loader-inner">
        <div class="cssload-loader"></div>
    </div>
</div>
<!--PreLoader Ends-->
<!-- header -->
<header class="site-header">
    <nav class="navbar navbar-expand-lg padding-nav static-nav">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}" style="z-index: 99;">
                <img src="{{ asset('frontend_asset') }}/images/biswas.png" alt="logo">
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto me-auto">
                    <li class="nav-item">
                        <a class="nav-link @yield('home')" href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('about')" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('services')" href="{{ route('service') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('latestNews')" href="{{ route('latestNews') }}">Latest News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('contact')" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('faq')" href="{{ route('faq') }}">FAQ's</a>
                    </li>
                </ul>
            </div>
            <ul class="social-icons social-icons-simple d-lg-inline-block d-none animated fadeInUp" data-wow-delay="300ms">
                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
        </div>
        <!--side menu open button-->
        <a href="javascript:void(0)" class="d-inline-block sidemenu_btn" id="sidemenu_toggle">
            <span class="gradient-bg"></span> <span class="gradient-bg"></span> <span class="gradient-bg"></span>
        </a>
    </nav>
    <!-- side menu -->
    <div class="side-menu opacity-0 gradient-bg">
        <div class="overlay"></div>
        <div class="inner-wrapper">
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link @yield('home')" href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('about')" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('services')" href="{{ route('service') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('latestNews')" href="{{ route('latestNews') }}">Latest News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('contact')" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('faq')" href="{{ route('faq') }}">FAQ's</a>
                    </li>
                </ul>
            </nav>
            <div class="side-footer w-100">
                <ul class="social-icons-simple white top40">
                    <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                    <li><a href=""><i class="fab fa-instagram"></i></a></li>
                </ul>
                <p class="whitecolor">&copy; Biswas Poultry & Fish Feeds LTD. Development by Ahsan</p>
            </div>
        </div>
    </div>
    <div id="close_side_menu" class="tooltip"></div>
    <!-- End side menu -->
</header>
<!-- header -->

@yield('content')

<!-- Contact US -->
<section id="stayconnect" class="bglight position-relative">
    <div class="container">
        <div class="contactus-wrapp">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="heading-title wow fadeInUp text-center text-md-start" data-wow-delay="300ms">
                        <h3 class="darkcolor bottom20">Stay Connected</h3>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <form class="getin_form wow fadeInUp"  method="POST" action="{{ route('contact.message') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 col-sm-12" id="result"></div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="userName" class="d-none"></label>
                                    <input class="form-control" type="text" placeholder="Name:" required name="username">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="companyName" class="d-none"></label>
                                    <input class="form-control" type="email" placeholder="Email:" name="email">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="email" class="d-none"></label>
                                    <input class="form-control" type="text" placeholder="Massage:" required name="message">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <button type="submit" class="button gradient-btn w-100" id="submit_btn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact US ends -->
<!--Site Footer Here-->
<footer id="site-footer" class=" bgdark padding_top">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                    <a href="index.html" class="footer_logo bottom25"><img src="{{ asset('frontend_asset') }}/images/biswas.png" alt="trax"></a>
                    <p class="whitecolor bottom25">Keep away from people who try to belittle your ambitions Small people always do that but the really great Friendly.</p>
                    <div class="d-table w-100 address-item whitecolor bottom25">
                        <span class="d-table-cell align-middle"><i class="fas fa-mobile-alt"></i></span>
                        <p class="d-table-cell align-middle bottom0">
                            +01 - 123 - 4567 <a class="d-block" href="mailto:web@support.com">web@support.com</a>
                        </p>
                    </div>
                    <ul class="social-icons white wow fadeInUp" data-wow-delay="300ms">
                        <li><a href=""><i class="fab fa-facebook-f"></i> </a> </li>
                        <li><a href=""><i class="fab fa-twitter"></i> </a> </li>
                        <li><a href=""><i class="fab fa-linkedin-in"></i> </a> </li>
                        <li><a href=""><i class="fab fa-instagram"></i> </a> </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                    <h3 class="whitecolor bottom25">Our Services</h3>
                    <ul class="links">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('service') }}">Service</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        <li><a href="">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                    <h3 class="whitecolor bottom25">Latest News</h3>
                    <ul class="latest_news whitecolor">
                        @foreach (latestNews() as $latestnews)

                        @endforeach
                        <li> <a href="#.">{{ $latestnews->news }}</a> <span class="date defaultcolor">{{ date('d M, Y - H:i', strtotime($latestnews->time)) }}</span> </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                    <h3 class="whitecolor bottom25">Business hours</h3>
                    <p class="whitecolor bottom25">Our support available to help you 24 hours a day, seven days week</p>
                    <ul class="hours_links whitecolor">
                        <li><span>Saturday-Thursday:</span> <span>9.00-19.00</span></li>
                        <li><span>Friday:</span> <span>Close</span></li>
                        <li><span>Calendar Events:</span> <span>24-Hour Shift</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Footer ends-->
<!--copyright-->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center wow fadeIn animated" data-wow-delay="300ms">
                <p class="m-0 py-3">Copyright © Biswas Poultry & Fish Feeds LTD. Development by Ahsan</p>
            </div>
        </div>
    </div>
</div>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('frontend_asset') }}/js/jquery-3.6.0.min.js"></script>
<!--Bootstrap Core-->
<script src="{{ asset('frontend_asset') }}/js/propper.min.js"></script>
<script src="{{ asset('frontend_asset') }}/js/bootstrap.min.js"></script>
<!--to view items on reach-->
<script src="{{ asset('frontend_asset') }}/js/jquery.appear.js"></script>
<!--Owl Slider-->
<script src="{{ asset('frontend_asset') }}/js/owl.carousel.min.js"></script>
<!--number counters-->
<script src="{{ asset('frontend_asset') }}/js/jquery-countTo.js"></script>
<!--Parallax Background-->
<script src="{{ asset('frontend_asset') }}/js/parallaxie.js"></script>
<!--Cubefolio Gallery-->
<script src="{{ asset('frontend_asset') }}/js/jquery.cubeportfolio.min.js"></script>
<!--Fancybox js-->
<script src="{{ asset('frontend_asset') }}/js/jquery.fancybox.min.js"></script>
<!--tooltip js-->
<script src="{{ asset('frontend_asset') }}/js/tooltipster.min.js"></script>
<!--wow js-->
<script src="{{ asset('frontend_asset') }}/js/wow.js"></script>
<!--particles js-->
<script src="{{ asset('frontend_asset') }}/js/particles.min.js"></script>
<!--morph text js-->
<script src="{{ asset('frontend_asset') }}/js/morphext.min.js"></script>
<!--Revolution SLider-->
<script src="{{ asset('frontend_asset') }}/js/revolution/jquery.themepunch.tools.min.js"></script>
<script src="{{ asset('frontend_asset') }}/js/revolution/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
<script src="{{ asset('frontend_asset') }}/js/revolution/extensions/revolution.extension.actions.min.js"></script>
<script src="{{ asset('frontend_asset') }}/js/revolution/extensions/revolution.extension.carousel.min.js"></script>
<script src="{{ asset('frontend_asset') }}/js/revolution/extensions/revolution.extension.kenburn.min.js"></script>
<script src="{{ asset('frontend_asset') }}/js/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="{{ asset('frontend_asset') }}/js/revolution/extensions/revolution.extension.migration.min.js"></script>
<script src="{{ asset('frontend_asset') }}/js/revolution/extensions/revolution.extension.navigation.min.js"></script>
<script src="{{ asset('frontend_asset') }}/js/revolution/extensions/revolution.extension.parallax.min.js"></script>
<script src="{{ asset('frontend_asset') }}/js/revolution/extensions/revolution.extension.slideanims.min.js"></script>
<script src="{{ asset('frontend_asset') }}/js/revolution/extensions/revolution.extension.video.min.js"></script>
<!--custom functions and script-->
<script src="{{ asset('frontend_asset') }}/js/functions.js"></script>
</body>

<!-- Mirrored from trax.acrothemes.com/bootstrap-v5/index-particles.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Oct 2021 04:26:51 GMT -->
</html>
