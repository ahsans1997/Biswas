@extends('layouts.frontend_app')

@section('gallery')
    active
@endsection

@section('content')
<!--Page Header-->
<section id="main-banner-page" class="position-relative page-header gallery-header parallax section-nav-smooth">
    <div class="overlay overlay-dark opacity-7"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight">Welcome</h2>
                    <h2 class="font-bold">To Our Portfolio Work</h2>
                    <h2 class="font-xlight">Let's Build</h2>
                    <h3 class="font-light pt-2">It More Creative With Your Slight Attention</h3>
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="text-center">Gallery</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header ends -->
<!-- Gallery -->
<section id="gallery" class="bglight position-relative padding_top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center wow fadeIn top15" data-wow-delay="300ms">
                <h2 class="heading bottom45 darkcolor font-light2">Our <span class="font-normal">Gallery</span>
                    <span class="divider-center"></span>
                </h2>
                <div class="col-md-8 offset-md-2 bottom40">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolores explicabo laudantium, omnis provident quam reiciendis voluptatum?</p>
                </div>
            </div>
            <div class="col-lg-12 mb-5">
                <div id="grid-mosaic" class="cbp cbp-l-grid-mosaic-flat">
                    @foreach ($newses as $news)
                        <div class="cbp-item brand graphics">
                            <img src="{{ asset('photos') }}/news/{{ $news->photo }}" alt="">
                            <div class="gallery-hvr whitecolor">
                                <div class="center-box">
                                    <a href="{{ asset('photos') }}/news/{{ $news->photo }}" class="opens" data-fancybox="gallery" title="Zoom In"> <i class="fa fa-search-plus"></i></a>
                                    <a href="{{ route('gallerydetail', $news->id) }}" class="opens" title="View Details"> <i class="fas fa-link"></i></a>
                                    <h4 class="w-100">{{ $news->news }}</h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Gallery ends -->
@endsection
