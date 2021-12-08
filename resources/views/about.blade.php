@extends('layouts.frontend_app')

@section('about')
    active
@endsection

@section('content')

<!--Page Header-->
<section id="main-banner-page" class="position-relative page-header about-header parallax section-nav-smooth">
    <div class="overlay overlay-dark opacity-7"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight">A New Idea</h2>
                    <h2 class="font-bold">Inspires Us To Make</h2>
                    <h2 class="font-xlight">Great Works</h2>
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="text-center">About Our Company</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header ends -->
<!-- About us -->
<section id="aboutus" class="padding_top padding_bottom">
    <div class="container aboutus">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 padding_bottom_half">
                <div class="image"><img alt="SEO" src="{{ asset('photos/about') }}/{{ $about->photo }}"></div>
            </div>
            <div class="col-lg-5 offset-lg-1 col-md-6 padding_bottom_half text-center text-md-start">
                <h2 class="darkcolor font-normal bottom30 defaultcolor">{{ $about->title }}</h2>
                <p class="bottom35">{{ $about->about }}</p>
            </div>
        </div>
        <div class="row  align-items-center">
            <div class="col-md-12 padding_top_half text-center text-md-start">
                <h2 class="darkcolor font-normal bottom30 defaultcolor text-center" style="border-bottom: 1px solid; padding-bottom: 10px;">{{ $about->bigtitle }}</h2>
                <p class="bottom35">{{ $about->bigabout }}</p>
            </div>
        </div>
    </div>
</section>
<!-- About us ends -->
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
                @foreach (workProcess() as $workprocess)
                    <li class="whitecolor wow fadeIn" data-wow-delay="300ms">
                        <span class="pro-step bottom20">0{{ $loop->index + 1 }}</span>
                        <p class="fontbold bottom25">{{ $workprocess->name }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
<!--WOrk Process ends-->


@endsection
