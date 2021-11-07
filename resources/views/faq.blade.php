@extends('layouts.frontend_app')

@section('faq')
    active
@endsection

@section('content')
<!--Page Header-->
<section id="main-banner-page" class="position-relative page-header faq-header parallax section-nav-smooth">
    <div class="overlay overlay-dark opacity-8 z-index-1"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight">Read These</h2>
                    <h2 class="font-bold">Before Asking Anymore</h2>
                    <h2 class="font-xlight">Question</h2>
                    <h3 class="font-light pt-2">Might Be Your Problem Solving Answer Is Here</h3>
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="text-center">FAQ's</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header ends -->
<!-- Faq -->
<section id="ourfaq" class="bglight position-relative padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center animated wow fadeIn" data-wow-delay="300ms">
                <h2 class="heading bottom30 darkcolor font-light2">Frequently Asked <span class="font-normal">Questions</span>
                    <span class="divider-center"></span>
                </h2>
                <div class="col-md-8 offset-md-2">
                    <p class="heading_space">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolores explicabo laudantium, omnis provident quam reiciendis voluptatum?</p>
                </div>
            </div>
            <h2 class="d-none">Tabs</h2>
            <div class="col-md-12 col-sm-12">
                <div id="accordion">
                    @forelse ($questions as $question)
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link darkcolor" data-bs-toggle="collapse" href="#collapse_{{ $question->id }}">{{ $question->question }}</a>
                            </div>
                            <div id="collapse_{{ $question->id }}" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <p>{{ $question->question_answer }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="card">
                            <div class="card-header">
                                <a>No Data Found.</a>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Faq ends -->
@endsection
