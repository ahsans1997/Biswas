@extends('layouts.backend_app')

@section('workprocess')
<li class="nav-item dropdown d-none d-lg-flex">
    <a class="nav-link nav-btn" href="{{ route('work-process.create') }}">
        <span class="btn">+ Create new Work</span>
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
                  <li class="breadcrumb-item"><a style="text-decoration: none" href="{{ route('work-process.index') }}">Latest News</a></li>
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
                    <th class="text-center">News Title</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($workprocesses as $workprocess)
                    <tr>
                        <th class="text-center">{{ $loop->index + 1 }}</th>
                        <td class="text-center">{{ $workprocess->name }}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                @if ($workprocess->action == 2)
                                <a href="{{ route('work-process.action', $workprocess->id) }}" class="btn btn-warning">Deactive</a>
                                @else
                                <a href="{{ route('work-process.action', $workprocess->id) }}" class="btn btn-success">Active</a>
                                @endif

                                <a href="{{ route('work-process.edit', $workprocess->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('work-process.delete', $workprocess->id) }}" class="btn btn-danger">Delete</a>
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
