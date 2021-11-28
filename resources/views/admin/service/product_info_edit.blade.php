@extends('layouts.backend_app')

@section('content')

<!-- partial -->
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a style="text-decoration: none" href="{{ route('service.index') }}">Service</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Service Product Information</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-11 m-auto">

            <form method="POST" action="{{ route('service.product.update', $service_product_infos->id) }}">
                @csrf
                <div class="form-group">
                    @if(session('service_product_success'))
                        <div class="alert alert-success mb-2">{{session('service_product_success')}}</div>
                    @endif
                    <label>Service Product Title</label>
                    @error('service_product_title')
                        <div class="alert alert-danger mb-2">{{ $message }}</div>
                    @enderror
                    <input type="text" name="service_product_title" class="form-control" value="{{ $service_product_infos->service_product_title }}">
                </div>
                <div class="form-group">
                    <label>Service Product Parcent</label>
                    @error('service_product_percent')
                        <div class="alert alert-danger mb-2">{{ $message }}</div>
                    @enderror
                    <input class="form-control" type="number" value="{{ $service_product_infos->service_product_percent }}" name="service_product_percent">
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
