@extends('layouts.backend_app')

@section('content')

<!-- partial -->
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a style="text-decoration: none" href="{{ route('service.index') }}">Service</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Service</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-11 m-auto">

            <form method="POST" action="{{ route('service.update', $service_info->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @if(session('service_success'))
                        <div class="alert alert-success mb-2">{{session('service_success')}}</div>
                    @endif
                <div class="form-group">
                    <label>Service Category</label>
                    <select class="form-select form-control" name="service_category_id" aria-label="Default select example">
                        <option>Select Service Category</option>
                        @foreach ($servicecategories as $servicecategory)
                            <option {{ ($servicecategory->id == $service_info->service_category_id ? 'selected' : '') }} value="{{ $servicecategory->id }}">{{ $servicecategory->service_category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">

                    <label>Service Title</label>
                    @error('service_title')
                        <div class="alert alert-danger mb-2">{{ $message }}</div>
                    @enderror
                    <input type="text" name="service_title" class="form-control" value="{{ $service_info->service_title }}">
                </div>
                <div class="form-group">
                    <label>Service Details</label>
                    @error('service_details')
                        <div class="alert alert-danger mb-2">{{ $message }}</div>
                    @enderror
                    <textarea class="form-control" name="service_details" rows="5">{{ $service_info->service_details }}</textarea>
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
