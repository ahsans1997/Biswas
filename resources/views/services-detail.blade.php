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
                <div class="image widget bottom20"><img alt="SEO" src="images/aboutus.png"></div>
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
                    <div class="row  align-items-center">
                        <div class="col-lg-5  col-md-6 padding_top_half text-center text-md-start">
                            <h2 class="darkcolor font-normal bottom30">The Best Skillset Available in <span class="defaultcolor">Our Market</span> </h2>
                            <p class="bottom35">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae, interdum eget elit. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus. </p>
                        </div>
                        <div class="col-lg-6 offset-lg-1 col-md-6 padding_top_half">
                            <div class="progress-bars">
                                <div class="progress">
                                    <p>Adobe Photoshop</p>
                                    <div class="progress-bar gradient-bg" data-value="94">
                                        <div class="progress-bar gradient-bg whitecolor" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100">94%</div>
                                    </div>
                                </div>
                                <div class="progress">
                                    <p>HTML / WordPress</p>
                                    <div class="progress-bar gradient-bg" data-value="92">
                                        <div class="progress-bar gradient-bg whitecolor" role="progressbar" style="width: 92%" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100">92%</div>
                                    </div>
                                </div>
                                <div class="progress">
                                    <p>Development</p>
                                    <div class="progress-bar gradient-bg" data-value="86">
                                        <div class="progress-bar gradient-bg whitecolor" role="progressbar" style="width: 86%" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">86%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 mt-5 mt-md-0">
                        <form class="getin_form wow fadeInUp" data-wow-delay="400ms">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="First Name:" required id="first_name1" name="first_name">
                                        <label for="first_name1" class="d-none"></label>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control" type="tel" placeholder="Company Name" id="company-name1">
                                        <label for="company-name1" class="d-none"></label>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control" type="email" placeholder="Email:" required id="email1" name="email">
                                        <label for="email1" class="d-none"></label>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <textarea class="form-control"  placeholder="Request a FreeConsultation" required id="FreeConsultation1"></textarea>
                                        <label for="FreeConsultation1" class="d-none"></label>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <button type="submit" class="button gradient-btn w-100" id="submit_btn1">Free Consultation</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services us ends -->
@endsection
