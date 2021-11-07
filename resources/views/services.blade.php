@extends('layouts.frontend_app')

@section('services')
    active
@endsection

@section('content')
<!--Page Header-->
<section id="main-banner-page" class="position-relative page-header service-header section-nav-smooth parallax">
    <div class="overlay overlay-dark opacity-7 z-index-1"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight pt-3">We Help To</h2>
                    <h2 class="font-bold">Elevate Your Business</h2>
                    <h2 class="font-xlight">To Next Level</h2>
                    <h3 class="font-light pb-4 pt-2">The Best Multipurpose Template in Market</h3>
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap mt-n5">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="text-center">Services</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header ends -->
<!-- Services us -->
<section id="our-services" class="padding bglight">
    <div class="container">
        <div class="col-md-12 text-center heading_space wow fadeIn" data-wow-delay="300ms">
            <h2 class="heading bottom30 darkcolor font-light2"><span class="font-weight-light">Our Service</span> Detail
                <span class="divider-center"></span>
            </h2>
            <div class="col-md-8 offset-md-2">
                <p class="mb-n3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolores explicabo laudantium, omnis provident quam reiciendis voluptatum?</p>
            </div>
        </div>
        <div id="services-filter" class="cbp-l-filters dark bottom40 wow fadeIn d-table mx-auto" data-wow-delay="350ms">
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
        <div id="services-measonry" class="cbp">
            <div class="cbp-item digital brand design">
                <div class="services-main">
                    <div class="image bottom10">
                        <div class="image"><img alt="SEO" src="{{ asset('frontend_asset') }}/images/poultry-feed-1.jpg"></div>
                        <div class="overlay">
                            <a href="{{ route('servicedetail') }}" class="overlay_center border_radius"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="services-content brand text-center text-md-start">
                        <h3 class="bottom10 darkcolor"><a href="{{ route('servicedetail') }}">Financial Planning</a></h3>
                        <p class="bottom15">Phasellus lorem enim, luctus ut velit eget, convallis egestas eros.
                            Sed ornare ligula Progressively generate synergistic eget.
                        </p>
                        <a href="{{ route('servicedetail') }}" class="button-readmore">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="cbp-item digital graphics">
                <div class="services-main">
                    <div class="image bottom10">
                        <div class="image"><img alt="SEO" src="{{ asset('frontend_asset') }}/images/poultry-feed-2.png"></div>
                        <div class="overlay">
                            <a href="services-detail.html" class="overlay_center border_radius"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="services-content text-center text-md-start">
                        <h3 class="bottom10 darkcolor"><a href="services-detail.html">Financial Planning</a></h3>
                        <p class="bottom15">Phasellus lorem enim, luctus ut velit eget, convallis egestas eros.
                            Sed ornare ligula Progressively generate synergistic eget.
                        </p>
                        <a href="services-detail.html" class="button-readmore">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="cbp-item design">
                <div class="services-main">
                    <div class="image bottom10">
                        <div class="image"><img alt="SEO" src="{{ asset('frontend_asset') }}/images/poultry-feed-3.jpg"></div>
                        <div class="overlay">
                            <a href="services-detail.html" class="overlay_center border_radius"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="services-content text-center text-md-start">
                        <h3 class="bottom10 darkcolor"><a href="services-detail.html">Business Solution</a></h3>
                        <p class="bottom15">Phasellus lorem enim, luctus ut velit eget, convallis egestas eros.
                            Sed ornare ligula Progressively generate synergistic eget.
                        </p>
                        <a href="services-detail.html" class="button-readmore">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="cbp-item graphics">
                <div class="services-main">
                    <div class="image bottom10">
                        <div class="image"><img alt="SEO" src="{{ asset('frontend_asset') }}/images/poultry-feed-5.jpg"></div>
                        <div class="overlay">
                            <a href="services-detail.html" class="overlay_center border_radius"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="services-content text-center text-md-start">
                        <h3 class="bottom10 darkcolor"><a href="services-detail.html">Financial Planning</a></h3>
                        <p class="bottom15">Phasellus lorem enim, luctus ut velit eget, convallis egestas eros.
                            Sed ornare ligula Progressively generate synergistic eget.
                        </p>
                        <a href="services-detail.html" class="button-readmore">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="cbp-item digital">
                <div class="services-main">
                    <div class="image bottom10">
                        <div class="image"><img alt="SEO" src="{{ asset('frontend_asset') }}/images/poultry-feed-4.jpg"></div>
                        <div class="overlay">
                            <a href="services-detail.html" class="overlay_center border_radius"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="services-content text-center text-md-start">
                        <h3 class="bottom10 darkcolor"><a href="services-detail.html">Business Solution</a></h3>
                        <p class="bottom15">Phasellus lorem enim, luctus ut velit eget, convallis egestas eros.
                            Sed ornare ligula Progressively generate synergistic eget.
                        </p>
                        <a href="services-detail.html" class="button-readmore">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="cbp-item brand design graphics">
                <div class="services-main">
                    <div class="image bottom10">
                        <div class="image"><img alt="SEO" src="{{ asset('frontend_asset') }}/images/poultry-feed-3.jpg"></div>
                        <div class="overlay">
                            <a href="services-detail.html" class="overlay_center border_radius"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="services-content text-center text-md-start">
                        <h3 class="bottom10 darkcolor"><a href="services-detail.html">Financial Planning</a></h3>
                        <p class="bottom15">Phasellus lorem enim, luctus ut velit eget, convallis egestas eros.
                            Sed ornare ligula Progressively generate synergistic eget.
                        </p>
                        <a href="services-detail.html" class="button-readmore">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services us ends -->

@endsection
