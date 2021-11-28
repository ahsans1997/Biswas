@extends('layouts.backend_app')

@section('service_category')
<li class="nav-item dropdown d-none d-lg-flex">
    <a class="nav-link nav-btn" href="{{ route('service-category.create') }}">
        <span class="btn">+ Create new Service Category</span>
    </a>
</li>
@endsection

@section('content')

<!-- partial -->
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">Service Category</a></li>
                </ol>
            </nav>
        </div>
        <div class="col-md-11 m-auto">
            <table class="table">
                @if(session('delete_status'))
                    <div class="alert alert-success mb-2">{{session('delete_status')}}</div>
                @endif
                <thead>
                  <tr>
                    <th class="text-center">Sl. No</th>
                    <th class="text-center">Service Category Name</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($service_categories as $service_category)
                    <tr>
                        <th class="text-center">{{ $loop->index + 1 }}</th>
                        <td class="text-center">{{ $service_category->service_category_name }}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                <a href="{{ route('service-category.edit', $service_category->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('service-category.delete', $service_category->id) }}" class="btn btn-danger">Delete</a>
                              </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td class="text-danger text-center" colspan="3">No Data Found</td>
                    </tr>
                    @endforelse

                </tbody>
              </table>
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
