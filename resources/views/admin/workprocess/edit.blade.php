@extends('layouts.backend_app')

@section('content')

<!-- partial -->
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a style="text-decoration: none" href="{{ route('work-process.index') }}">Work Process</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Work</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-11 m-auto">

            <form method="POST" action="{{ route('work-process.update', $wopkprocess_info->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    @if(session('success'))
                        <div class="alert alert-success mb-2">{{session('success')}}</div>
                    @endif
                    <label>News Title</label>
                    @error('news')
                        <div class="alert alert-danger mb-2">{{ $message }}</div>
                    @enderror
                    <input type="text" name="name" class="form-control" value="{{ $wopkprocess_info->name }}">
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
