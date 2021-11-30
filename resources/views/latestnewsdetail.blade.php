@extends('layouts.frontend_app')

@section('content')
<!--Page Header-->
<section id="main-banner-page" class="position-relative page-header section-nav-smooth parallax gallery-detail-header">
    <div class="overlay overlay-dark opacity-6 z-index-1"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight">Imagine</h2>
                    <h2 class="font-bold">Your Fantastic Layout</h2>
                    <h2 class="font-xlight">And Build</h2>
                    <h3 class="font-light pt-2">It Right Now, With Our Great Team Members</h3>
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap bottom25">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="text-center">Gallery Detail</h3>
            </div>
        </div>
    </div>
</section>
<!--Page Header ends -->
<!-- Gallery Details -->
<section id="gallery-detail" class="padding_top padding_bottom_half">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-7 top10">
                <div class="news_item shadow">
                    <div class="image m-auto mt-2" style="width: 450px;">
                        <img src="{{ asset('photos') }}/news/{{ $news_details->photo }}" alt="">
                    </div>
                    <div class="news_desc text-center text-md-start">
                        <h3 class="text-capitalize font-normal darkcolor">{{ $news_details->news }}</h3>
                        <ul class="meta-tags top20 bottom20">
                            <li><a><i class="fas fa-calendar-alt"></i>{{ $news_details->time }}</a></li>
                        </ul>
                        <p class="heading_space">{{ $news_details->news_details }}</p>
                        <blockquote class="blockquote darkcolor heading_space">{{ $news_details->news_quote }}</blockquote>

                        @if ($comments_count > 0)
                            <div class="profile-authors heading_space">
                                <h4 class="text-capitalize darkcolor bottom40">Comments</h4>
                                <div class="eny_profile bottom30 text-start">
                                    @foreach ($comments as $comment)
                                        <div class="profile_text">
                                            <h5 class="darkcolor"><a href="#.">{{ $comment->name }}</a></h5>
                                            <p class="top10" style="color: #999999;">{{ $comment->message }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        <div class="post-comment">
                            <h4 class="text-capitalize darkcolor">Add Comment</h4>
                            <br>
                            <form class="getin_form" id="post-a-comment" method="POST" action="{{ Route('latestNewsDetailComment') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group bottom35">
                                            <label class="d-none"></label>
                                            <input class="form-control" type="text" placeholder="Name:" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group bottom35">
                                            <label for="email1" class="d-none"></label>
                                            <input class="form-control" type="email" placeholder="Email:" name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group bottom35">
                                            <label for="message" class="d-none"></label>
                                            <textarea class="form-control" placeholder="Message" name="message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group bottom35">
                                            <label for="message" class="d-none"></label>
                                            <input class="form-control" type="hidden" value="{{ $news_details->id }}" name="news_detail_id">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <button type="submit" class="button gradient-btn">Submit Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-5 top25">
                <aside class="sidebar whitebox">
                    <div class="widget heading_space shadow wow fadeIn" data-wow-delay="350ms">
                        <h4 class="text-capitalize darkcolor bottom20 text-center text-md-start">Recent Items Added</h4>
                        @foreach ($newses as $news)
                            <div class="single_post d-table bottom15">
                                <a href="#." class="post"><img src="{{ asset('photos/news') }}/{{ $news->photo }}" alt="post image"></a>
                                <div class="text">
                                    <a href="#.">About Invesment Management</a>
                                    <span>September 22,2019</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
<!--Gallery Details Ends-->

@endsection
