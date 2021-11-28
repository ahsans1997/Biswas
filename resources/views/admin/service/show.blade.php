@extends('layouts.backend_app')

@section('content')

<!-- partial -->
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a style="text-decoration: none" href="{{ route('service.index') }}">Service</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Service Details</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-11 m-auto">
            <div class="service_info">
                <span> Service Title: </span>
                <h4 style="margin-left: 20px;">{{ $service_info->service_title }}</h4>
                <br>
                <span>Description: </span>
                <h5 style="margin-left: 20px;">{{ $service_info->service_details }}</h5>
                <br><br>
                <span>Image:</span><br><br>
                <img src="{{ asset('photos/service') }}/{{ $service_info->photo }}" alt="">
            </div>
            <div class="service_product_info">
                <table class="table">
                    <thead>
                      <tr>
                        <th class="text-center">Sl.No</th>
                        <th class="text-center">Title</th>
                        <th class="text-center">Percent</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($service_products as $service_product)
                        <tr>
                            <th class="text-center">{{ $loop->index + 1 }}</th>
                            <td class="text-center">{{ $service_product->service_product_title }}</td>
                            <td class="text-center">{{ $service_product->service_product_percent }}</td>
                            <td class="text-center">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    @if ($service_product->action == 2)
                                    <a href="{{ route('service.product.action', $service_product->id) }}" class="btn btn-warning">Deactive</a>
                                    @else
                                    <a href="{{ route('service.product.action', $service_product->id) }}" class="btn btn-success">Active</a>
                                    @endif
                                    <a href="{{ route('service.product.edit', $service_product->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('service.product.delete', $service_product->id) }}" class="btn btn-danger">Delete</a>
                                </div>
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
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
