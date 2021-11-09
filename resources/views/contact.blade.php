@extends('layouts.frontend_app')

@section('contact')
    active
@endsection

@section('content')
<!--Page Header-->
<section id="main-banner-page" class="position-relative page-header contact-header section-nav-smooth parallax">
    <div class="overlay overlay-dark opacity-7"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="page-titles whitecolor text-center padding">
                    <h2 class="font-bold"> Contact Us</h2>
                    <h3 class="font-light py-3">We'd Love To Here From You.</h3>
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap mt-n5">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="text-center">Contact Us</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header ends -->
<!-- Contact US -->
<section id="stayconnect1" class="bglight position-relative padding noshadow">
    <div class="container whitebox">
        <div class="widget py-5">
            <div class="row">
                <div class="col-md-12 text-center wow fadeIn mt-n3" data-wow-delay="300ms">
                    <h2 class="heading bottom30 darkcolor font-light2 pt-1"><span class="font-normal">Contact</span> Us
                        <span class="divider-center"></span>
                    </h2>
                    <div class="col-md-8 offset-md-2 bottom35">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolores explicabo laudantium, omnis provident quam reiciendis voluptatum?</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 order-sm-2">
                    <div class="contact-meta px-2 text-center text-md-start">
                        <div class="heading-title">
                            <span class="defaultcolor mb-3">Poultry & Fish Feeds Worldwide</span>
                            <h2 class="darkcolor font-normal mb-4"><span class="d-none d-md-inline-block">Our</span> Office <span class="d-none d-md-inline-block">In Bangladeh</span></h2>
                        </div>
                        <p class="bottom10">Address: Biswas Poultry & Fish Feeds Ltd, Kashimpur, Gazipur, Bangladesh.</p>
                        <p class="bottom10">+8801907111010</p>
                        <p class="bottom10"><a href="mailto:polpo@traxagency.co.au">polpo@traxagency.co.au</a></p>
                        <p class="bottom10">Sat-Thu: 9am-6pm</p>
                        <ul class="social-icons mt-4 mb-4 mb-sm-0 wow fadeInUp" data-wow-delay="300ms">
                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                            <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                            <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i> </a> </li>
                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                            <li><a href="javascript:void(0)"><i class="fab fa-whatsapp"></i> </a> </li>
                            <li><a href="javascript:void(0)"><i class="far fa-envelope"></i> </a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    @if(session('message'))
                        <div class="alert alert-success mb-2">{{session('message')}}</div>
                    @endif
                    <div class="heading-title  wow fadeInUp" data-wow-delay="300ms">
                        <form class="getin_form wow fadeInUp" method="POST" action="{{ route('contact.message') }}">
                            @csrf
                            <div class="row px-2">
                                <div class="col-md-12 col-sm-12" id="result1"></div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        @error('username')
                                            <div class="alert alert-danger mb-2">{{ $message }}</div>
                                        @enderror
                                        <input class="form-control" type="text" placeholder="Name:" name="username">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        @error('email')
                                            <div class="alert alert-danger mb-2">{{ $message }}</div>
                                        @enderror
                                        <input class="form-control" type="email" placeholder="Email:" name="email">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        @error('message')
                                            <div class="alert alert-danger mb-2">{{ $message }}</div>
                                        @enderror
                                        <textarea class="form-control" placeholder="Message:"  name="message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <button type="submit" id="submit_btn1" class="button gradient-btn w-100">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact US ends -->
<!-- map -->
<div class="w-100">
    <div id="map" class="full-map">
        <iframe style="width: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3645.274788603712!2d90.3160532145066!3d23.986071785650257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755dd69a1f5205b%3A0x2e0ecf18a4087931!2sBISWAS%20POULTRY%20%26%20FISH%20FEED%20LTD.!5e0!3m2!1sen!2sbd!4v1634966378069!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
<!-- map end -->
@endsection
