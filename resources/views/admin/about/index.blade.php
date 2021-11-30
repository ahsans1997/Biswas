@extends('layouts.backend_app')

@section('content')

<!-- partial -->
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a style="text-decoration: none" href="{{ route('about.index') }}">About</a></li>
                </ol>
            </nav>
        </div>
        <div class="col-md-11 m-auto">
            <div class="card mb-3">
                <div class="card-header"><span>About</span><span style="float: right;"><a class="btn btn-info" href="{{ route('about.edit', 1) }}">edit</a></span></div>
                <div class="card-body text-info">
                    <h5>Title :</h5>
                    <p class="card-text">{{ $about->title }}</p>
                    <h5 style="border-top: 1px solid; padding-top: 6px;">Description :</h5>
                    <p class="card-text">{{ $about->about }}</p>
                    <h5 style="border-top: 1px solid; padding-top: 6px;">About Title :</h5>
                    <p class="card-text">{{ $about->bigtitle }}</p>
                    <h5 style="border-top: 1px solid; padding-top: 6px;">About Description :</h5>
                    <p class="card-text">{{ $about->bigabout }}</p>
                    <br>
                    <h5 style="border-top: 1px solid; padding-top: 6px;">Image :</h5>
                    <img src="{{ asset('photos/about') }}/{{ $about->photo }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">
                Copyright © 2021 Biswas Poultry and Fish Feeds Ltd. All rights reserved. Development By
                <a href="">Ahsanul Hasan</a>.
            </span>
        </div>
    </footer>
    <!-- partial -->
</div>

@endsection
