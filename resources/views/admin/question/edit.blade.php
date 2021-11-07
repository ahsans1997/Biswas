@extends('layouts.backend_app')

@section('content')

<!-- partial -->
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a style="text-decoration: none" href="{{ route('question.index') }}">Question</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Question</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-11 m-auto">

            <form method="POST" action="{{ route('question.update', $single_question->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    @if(session('question_edit'))
                        <div class="alert alert-success mb-2">{{session('question_edit')}}</div>
                    @endif
                    <label>Question</label>
                    @error('question')
                        <div class="alert alert-danger mb-2">{{ $message }}</div>
                    @enderror
                    <input type="text" name="question" class="form-control" value="{{ $single_question->question }}">
                </div>
                <div class="form-group">
                    <label>Question Answer</label>
                    @error('question_answer')
                        <div class="alert alert-danger mb-2">{{ $message }}</div>
                    @enderror
                    <textarea class="form-control" name="question_answer" placeholder="Enter Question Answer" rows="5">{{ $single_question->question_answer }}</textarea>
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
