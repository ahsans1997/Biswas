@extends('layouts.backend_app')

@section('question')
<li class="nav-item dropdown d-none d-lg-flex">
    <a class="nav-link nav-btn" id="actionDropdown" href="{{ route('question.create') }}">
        <span class="btn">+ Create new</span>
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
                  <li class="breadcrumb-item"><a style="text-decoration: none" href="{{ route('question.index') }}">Question</a></li>
                </ol>
            </nav>
        </div>
        <div class="col-md-11 m-auto">
            @if(session('delete'))
                <div class="alert alert-success mb-2">{{session('delete')}}</div>
            @endif
            @if(session('action'))
                <div class="alert alert-success mb-2">{{session('action')}}</div>
            @endif
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th class="text-center">Sl. No</th>
                    <th class="text-center">Question</th>
                    <th class="text-center">Question Answer</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($questions as $question)
                    <tr>
                        <td class="text-center">{{ $loop->index + 1 }}</td>
                        <td class="text-center">{{ $question->question }}</td>
                        <td class="text-center">{{ $question->question_answer }}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                @if ($question->action == 2)
                                <a href="{{ route('question.action', $question->id) }}" class="btn btn-warning">Deactive</a>
                                @else
                                <a href="{{ route('question.action', $question->id) }}" class="btn btn-success">Active</a>
                                @endif
                                <a href="{{ route('question.edit', $question->id) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('question.delete', $question->id) }}" class="btn btn-danger">Delete</a>
                              </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td class="text-danger text-center" colspan="50">No Data Found.</td>
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
