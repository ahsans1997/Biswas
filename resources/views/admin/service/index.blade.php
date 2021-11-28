@extends('layouts.backend_app')

@section('service')
<li class="nav-item dropdown d-none d-lg-flex">
    <a class="nav-link nav-btn" href="{{ route('service.create') }}">
        <span class="btn">+ Create New Service</span>
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
                  <li class="breadcrumb-item"><a style="text-decoration: none" href="{{ route('service.index') }}">Service</a></li>
                </ol>
            </nav>
        </div>
        <div class="col-md-11 m-auto">
            <table class="table">
                @if(session('delete_status'))
                    <div class="alert alert-success mb-2">{{session('delete_status')}}</div>
                @endif
                @if(session('action'))
                    <div class="alert alert-success mb-2">{{session('action')}}</div>
                @endif
                <thead>
                  <tr>
                    <th class="text-center">Sl. No</th>
                    <th class="text-center">Service Title</th>
                    <th class="text-center">Add Product Info</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($services as $service)
                    <tr>
                        <th class="text-center">{{ $loop->index + 1 }}</th>
                        <td class="text-center">{{ $service->service_title }}</td>
                        <td class="text-center"><a class="btn btn-dark" href="{{ route('service.info', $service->id) }}">Add Info</a></td>
                        <td class="text-center">
                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                <a href="{{ route('service.show', $service->id) }}" class="btn btn-info">Read</a>
                                @if ($service->action == 2)
                                <a href="{{ route('service.action', $service->id) }}" class="btn btn-warning">Deactive</a>
                                @else
                                <a href="{{ route('service.action', $service->id) }}" class="btn btn-success">Active</a>
                                @endif

                                <a href="{{ route('service.edit', $service->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('service.delete', $service->id) }}" class="btn btn-danger">Delete</a>
                              </div>
                        </td>
                      </tr>
                    @empty

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
