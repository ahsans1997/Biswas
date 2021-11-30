@extends('layouts.frontend_app')

@section('home')
    active
@endsection

@section('content')

<!--slider-->
<section id="home" class="p-0  single-slide" style="height: 600px;">
    <h2 class="d-none">hidden</h2>
    <!-- particles.js container -->
    <div id="particles-js"></div>
    <div class="part-header parallax parallax-slow">
        <img src="{{ asset('frontend_asset') }}/images/poultry-feed-3.jpg" alt="">
    </div>
    <div class="overlay overlay-dark opacity-8 z-index-n1"></div>
    <!-- particles.js container -->
    <div id="particles-text-morph">
        <h2 class="font-xlight" style="font-weight: 600;">Welcome To Biswas Poultry & Fish Feeds Ltd.</h2>
    </div>
</section>
<!--slider end-->
<!--Some Feature -->
<section id="our-feature" class="single-feature padding">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 col-md-7 col-sm-7 text-sm-start text-center wow fadeInLeft" data-wow-delay="300ms">
                <div class="heading-title mb-4">
                    <h2 class="darkcolor font-normal bottom30">Lets take <span class="defaultcolor">Business</span> to Next Level</h2>
                </div>
                <p class="bottom35">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae, interdum eget elit. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus. </p>
                <a href="{{ route('about') }}" class="button btnsecondary gradient-btn mb-sm-0 mb-4">Learn More</a>
            </div>
            <div class="col-lg-5 offset-lg-1 col-md-5 col-sm-5 wow fadeInRight" data-wow-delay="300ms">
                <div class="image"><img alt="SEO" src="{{ asset('frontend_asset') }}/images/awesome-feature.png"></div>
            </div>
        </div>
    </div>
</section>
<!--Some Feature ends-->
<!-- Counters -->
<section id="bg-counters" class="padding bg-counters parallax">
    <div class="container">
        <div class="row align-items-center text-center">
            <div class="col-lg-4 col-md-4 col-sm-4 bottom10">
                <div class="counters blackcolor  top10 bottom10" style="font-weight: 600;">
                    <span class="count_nums font-light text-broder" data-to="2010" data-speed="2500"> </span>
                </div>
                <h3 class="font-light blackcolor top20 text-broder" style="font-weight: 600;">Since We Started</h3>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <p class="blackcolor top20 bottom20 font-light title text-broder" style="font-weight: 600;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae, interdum eget elit. </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 bottom10">
                <div class="counters blackcolor top10 bottom10" style="font-weight: 600;">
                    <span class="count_nums font-light text-broder" data-to="895" data-speed="2500"> </span>
                </div>
                <h3 class="font-light blackcolor top20 text-broder" style="font-weight: 600;">Since We Started</h3>
            </div>
        </div>
    </div>
</section>
<!-- Counters ends-->
<!-- WOrk Process-->
<section id="our-process" class="padding bgdark">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <div class="heading-title whitecolor wow fadeInUp" data-wow-delay="300ms">
                    <h2 class="font-normal">Our Work Process </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <ul class="process-wrapp">
                <li class="whitecolor wow fadeIn" data-wow-delay="300ms">
                    <span class="pro-step bottom20">01</span>
                    <p class="fontbold bottom25">Concept</p>
                </li>
                <li class="whitecolor wow fadeIn" data-wow-delay="400ms">
                    <span class="pro-step bottom20">02</span>
                    <p class="fontbold bottom25">Plan</p>
                </li>
                <li class="whitecolor wow fadeIn" data-wow-delay="500ms">
                    <span class="pro-step bottom20">03</span>
                    <p class="fontbold bottom25">Design</p>
                </li>
                <li class="whitecolor wow fadeIn" data-wow-delay="600ms">
                    <span class="pro-step bottom20">04</span>
                    <p class="fontbold bottom25">Development</p>
                </li>
                <li class="whitecolor wow fadeIn" data-wow-delay="700ms">
                    <span class="pro-step bottom20">05</span>
                    <p class="fontbold bottom25">Check</p>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--WOrk Process ends-->
<!-- Testimonials -->
<section id="our-testimonial" class="bglight padding_bottom">
    <div class="parallax page-header testimonial-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6 col-md-12 text-center text-lg-end">
                    <div class="heading-title wow fadeInUp padding_testi" data-wow-delay="300ms">
                        <h2 class="whitecolor font-normal" style="color: white;">What Director Say</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="owl-carousel" id="testimonial-slider">
            <div class="item testi-box">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 text-center">
                        <div class="testimonial-round d-inline-block">
                            <img src="{{ asset('frontend_asset') }}/images/mohsin.jpg" alt="">
                        </div>
                        <h4 class="defaultcolor font-light top15"><a>MD IFTEAKHARUL HAQUE</a></h4>
                        <p>Dhaka, Bangladesh</p>
                    </div>
                    <div class="col-lg-6 offset-lg-2 col-md-10 offset-md-1 text-lg-start text-center">
                        <p class="bottom15 top90">We have a number of different teams within our agency that specialise in different areas of business so you can be sure that you won’t receive a generic service and although we boast a years and years of service.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Testimonials Ends-->

@endsection




