@extends('layouts.frontend_app')

@section('content')
<!--Page Header-->
<section id="main-banner-page" class="position-relative page-header service-detail-header section-nav-smooth parallax">
    <div class="overlay overlay-dark opacity-7 z-index-1"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight">We Love </h2>
                    <h2 class="font-bold">Walking line In Usable</h2>
                    <h2 class="font-xlight">Products</h2>
                    <h3 class="font-light pt-2">The Best Multipurpose Template in Market</h3>
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="text-center">Service Detail</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header ends -->
<!-- Services us -->
<section id="our-services" class="padding bglight">
    <div class="container">
        <div class="row whitebox top15">
            <div class="col-lg-4 col-md-5">
                <div class="image widget bottom20"><img alt="{{ $service_detail_info->service_title }}" src="{{ asset('photos/service') }}/{{ $service_detail_info->photo }}"></div>
                <div class="widget heading_space text-center text-md-start">
                    <h4 class="text-capitalize darkcolor bottom20">Need Help?</h4>
                    <div class="contact-table colorone d-table bottom15">
                        <div class="d-table-cell cells">
                            <span class="icon-cell"><i class="fas fa-mobile-alt"></i></span>
                        </div>
                        <div class="d-table-cell cells">
                            <p class="bottom0">+92-0900-10072 <span class="d-block">+92-0900-10072</span></p>
                        </div>
                    </div>
                    <div class="contact-table colorone d-table bottom15 text-start">
                        <div class="d-table-cell cells">
                            <span class="icon-cell"><i class="fas fa-map-marker-alt"></i></span>
                        </div>
                        <div class="d-table-cell cells">
                            <p class="bottom0">130 Queens St.Tottenham Road,
                                <span class="d-block">Tokio Japan</span>
                            </p>
                        </div>
                    </div>
                    <div class="contact-table colorone d-table text-start">
                        <div class="d-table-cell cells">
                            <span class="icon-cell"><i class="far fa-clock"></i></span>
                        </div>
                        <div class="d-table-cell cells">
                            <p class="bottom0">Mon to Sat - 9:00am to 6:00pm
                                <span class="d-block">Sunday: Closed</span>
                            </p>
                        </div>
                    </div>
                    <a href="" class="button btnsecondary gradient-btn top30"> Download Brochure</a>
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="widget heading_space text-center text-md-start">
                    <h2 class="darkcolor font-normal bottom30"><span class="defaultcolor">{{ $service_detail_info->service_title }}</span></h2>
                    <p class="bottom35">{{ $service_detail_info->service_details }}</p>
                    <br><br><br>
                    <div class="progress-bars">
                        @foreach ($service_detail_product_infos as $service_detail_product_info)
                        <div class="progress">
                            <p>{{ $service_detail_product_info->service_product_title }}</p>
                            <div class="progress-bar gradient-bg" data-value="{{ $service_detail_product_info->service_product_percent }}">
                                <div class="progress-bar gradient-bg whitecolor" role="progressbar" style="width: {{ $service_detail_product_info->service_product_percent }}%" aria-valuenow="{{ $service_detail_product_info->service_product_percent }}" aria-valuemin="0" aria-valuemax="100">{{ $service_detail_product_info->service_product_percent }}%</div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services us ends -->
@endsection
