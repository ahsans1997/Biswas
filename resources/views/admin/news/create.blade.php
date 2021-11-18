@extends('layouts.backend_app')

@section('content')

<!-- partial -->
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a style="text-decoration: none" href="{{ route('news.index') }}">Latest News</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Create Latest News</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-11 m-auto">

            <form method="POST" action="{{ route('news.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    @if(session('news_success'))
                        <div class="alert alert-success mb-2">{{session('news_success')}}</div>
                    @endif
                    <label>News Title</label>
                    @error('news')
                        <div class="alert alert-danger mb-2">{{ $message }}</div>
                    @enderror
                    <input type="text" name="news" class="form-control" placeholder="News Title">
                </div>
                <div class="form-group">
                    <label>News Time</label>
                    @error('time')
                        <div class="alert alert-danger mb-2">{{ $message }}</div>
                    @enderror
                    <input class="form-control" type="datetime-local" name="time">
                </div>
                <div class="form-group">
                    <label>News Details</label>
                    @error('news_details')
                        <div class="alert alert-danger mb-2">{{ $message }}</div>
                    @enderror
                    <textarea class="form-control" name="news_details" placeholder="Enter Question Answer" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label>News Quote</label>
                    @error('news_quote')
                        <div class="alert alert-danger mb-2">{{ $message }}</div>
                    @enderror
                    <textarea class="form-control" name="news_quote" placeholder="Enter Question Answer" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label>Photo</label>
                    @error('photo')
                        <div class="alert alert-danger mb-2">{{ $message }}</div>
                    @enderror
                    <input class="form-control" type="file" name="photo">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
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
