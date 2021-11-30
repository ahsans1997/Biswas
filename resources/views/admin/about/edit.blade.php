@extends('layouts.backend_app')

@section('content')

<!-- partial -->
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a style="text-decoration: none" href="{{ route('about.index') }}">About</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit About</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-11 m-auto">

            <form method="POST" action="{{ route('about.update', 1) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    @if(session('success'))
                        <div class="alert alert-success mb-2">{{session('success')}}</div>
                    @endif
                    <label>Title</label>
                    @error('title')
                        <div class="alert alert-danger mb-2">{{ $message }}</div>
                    @enderror
                    <input type="text" name="title" class="form-control" value="{{ $about->title }}">
                </div>
                <div class="form-group">
                    <label>About</label>
                    @error('about')
                        <div class="alert alert-danger mb-2">{{ $message }}</div>
                    @enderror
                    <textarea class="form-control" name="about" rows="5">{{ $about->about }}</textarea>
                </div>
                <div class="form-group">
                    <label>About Title</label>
                    @error('news_quote')
                        <div class="alert alert-danger mb-2">{{ $message }}</div>
                    @enderror
                    <input type="text" class="form-control" name="bigtitle" value="{{ $about->bigtitle }}">
                </div>
                <div class="form-group">
                    <label>About Description</label>
                    @error('news_quote')
                        <div class="alert alert-danger mb-2">{{ $message }}</div>
                    @enderror
                    <textarea class="form-control" name="bigabout" rows="5">{{ $about->bigabout }}</textarea>
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
