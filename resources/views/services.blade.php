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
            @foreach ($servicecategories as $servicecategory)
                <div data-filter=".menu_{{ $servicecategory->id }}" class="cbp-filter-item">
                    <span>{{ $servicecategory->service_category_name }}</span>
                </div>
            @endforeach

        </div>
        <div id="services-measonry" class="cbp">
            @foreach ($services as $service)
                <div class="cbp-item menu_{{ $service->service_category_id }}">
                    <div class="services-main">
                        <div class="image bottom10">
                            <div class="image"><img alt="{{ $service->service_title }}" src="{{ asset('photos/service') }}/{{ $service->photo }}"></div>
                            <div class="overlay">
                                <a href="{{ route('servicedetail', $service->id) }}" class="overlay_center border_radius"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="services-content brand text-center text-md-start">
                            <h3 class="bottom10 darkcolor"><a href="{{ route('servicedetail', $service->id) }}">{{ $service->service_title }}</a></h3>
                            <p class="bottom15">{{ Str::limit($service->service_details, 100) }}</p>
                            <a href="{{ route('servicedetail', $service->id) }}" class="button-readmore">Learn More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Services us ends -->

@endsection
