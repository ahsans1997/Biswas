@extends('layouts.frontend_app')

@section('content')
    <!--Page Header-->
<section id="main-banner-page" class="position-relative page-header error404-header parallax section-nav-smooth">
    <div class="overlay overlay-dark opacity-2 z-index-1"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h1 class="font-light font-404-heading">404</h1>
                    <h3 class="font-light">That Page Couldn't Be Found</h3>
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="text-center">ERROR 404</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header ends -->
<!--Error 404 SECTION-->
<section id="error" class="padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="error wow bounceIn" data-wow-delay="300ms">
                <a href="{{ route('index') }}" class="button gradient-btn wow fadeIn mb-3 mb-sm-0" data-wow-delay="400ms">back to home</a>
            </div>
        </div>
    </div>
</section>
<!--Error 404 section end-->
@endsection

