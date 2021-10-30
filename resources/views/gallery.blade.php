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
            <div class="col-lg-12">
                <div id="mosaic-filter" class="cbp-l-filters bottom30 wow fadeIn text-center" data-wow-delay="350ms">
                    <div data-filter="*" class="cbp-filter-item">
                        <span>All</span>
                    </div>
                    <div data-filter=".digital" class="cbp-filter-item">
                        <span>Digital</span>
                    </div>
                    <div data-filter=".design" class="cbp-filter-item">
                        <span>Design</span>
                    </div>
                    <div data-filter=".brand" class="cbp-filter-item">
                        <span>Brand</span>
                    </div>
                    <div data-filter=".graphics" class="cbp-filter-item">
                        <span>Graphics</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div id="grid-mosaic" class="cbp cbp-l-grid-mosaic-flat">
                    <!--Item 1-->
                    <div class="cbp-item brand graphics">
                        <img src="{{ asset('frontend_asset') }}/images/poultry-feed-5.jpg" alt="">
                        <div class="gallery-hvr whitecolor">
                            <div class="center-box">
                                <a href="{{ asset('frontend_asset') }}/images/gallery-1.jpg" class="opens" data-fancybox="gallery" title="Zoom In"> <i class="fa fa-search-plus"></i></a>
                                <a href="{{ route('gallerydetail') }}" class="opens" title="View Details"> <i class="fas fa-link"></i></a>
                                <h4 class="w-100">Rainy Outdoor</h4>
                            </div>
                        </div>
                    </div>
                    <!--Item 2-->
                    <div class="cbp-item digital brand graphics design">
                        <img src="images/gallery-4.jpg" alt="">
                        <div class="gallery-hvr whitecolor">
                            <div class="center-box">
                                <a href="images/gallery-4.jpg" class="opens" data-fancybox="gallery" title="Zoom In"> <i class="fa fa-search-plus"></i></a>
                                <a href="gallery-detail.html" class="opens" title="View Details"> <i class="fas fa-link"></i></a>
                                <h4 class="w-100">Classic Interior</h4>
                            </div>
                        </div>
                    </div>
                    <!--Item 3-->
                    <div class="cbp-item design digital graphics">
                        <img src="images/gallery-11.jpg" alt="">
                        <div class="gallery-hvr whitecolor">
                            <div class="center-box">
                                <a href="images/gallery-11.jpg" class="opens" data-fancybox="gallery" title="Zoom In"> <i class="fa fa-search-plus"></i></a>
                                <a href="gallery-detail.html" class="opens" title="View Details"> <i class="fas fa-link"></i></a>
                                <h4 class="w-100">Shadow Smoke</h4>
                            </div>
                        </div>
                    </div>
                    <!--Item 4-->
                    <div class="cbp-item brand graphics">
                        <img src="images/gallery-2.jpg" alt="">
                        <div class="gallery-hvr whitecolor">
                            <div class="center-box">
                                <a href="images/gallery-2.jpg" class="opens" data-fancybox="gallery" title="Zoom In"> <i class="fa fa-search-plus"></i></a>
                                <a href="gallery-detail.html" class="opens" title="View Details"> <i class="fas fa-link"></i></a>
                                <h4 class="w-100">Eiffel Model</h4>
                            </div>
                        </div>
                    </div>
                    <!--Item 5-->
                    <div class="cbp-item brand graphics design design">
                        <img src="images/gallery-18.jpg" alt="">
                        <div class="gallery-hvr whitecolor">
                            <div class="center-box">
                                <a href="images/gallery-18.jpg" class="opens" data-fancybox="gallery" title="Zoom In"> <i class="fa fa-search-plus"></i></a>
                                <a href="gallery-detail.html" class="opens" title="View Details"> <i class="fas fa-link"></i></a>
                                <h4 class="w-100">Clean Bike</h4>
                            </div>
                        </div>
                    </div>
                    <!--Item 6-->
                    <div class="cbp-item brand digital design">
                        <img src="images/gallery-9.jpg" alt="">
                        <div class="gallery-hvr whitecolor">
                            <div class="center-box">
                                <a href="images/gallery-9.jpg" class="opens" data-fancybox="gallery" title="Zoom In"> <i class="fa fa-search-plus"></i></a>
                                <a href="gallery-detail.html" class="opens" title="View Details"> <i class="fas fa-link"></i></a>
                                <h4 class="w-100">Game Mode</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <!--Load more itema from another html file using ajax-->
                    <div id="js-loadMore-mosaic" class="cbp-l-loadMore-button ">
                        <a href="load-more.html" class="cbp-l-loadMore-link button py-1 button gradient-btn whitecolor transition-3" rel="nofollow">
                            <span class="cbp-l-loadMore-defaultText">LOAD MORE (<span class="cbp-l-loadMore-loadItems">13</span>)</span>
                            <span class="cbp-l-loadMore-loadingText">LOADING <i class="fas fa-spinner fa-spin"></i></span>
                            <span class="cbp-l-loadMore-noMoreLoading d-none">NO MORE WORKS</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Gallery ends -->
@endsection
