@extends('layouts.backend_app')

@section('content')

<!-- partial -->
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a style="text-decoration: none" href="{{ route('contact.index') }}">Contact</a></li>
                </ol>
            </nav>
        </div>
        <div class="col-md-11">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th class="text-center">SL. No</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Message</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($contacts as $contact)
                        <tr style="background: {{ ($contact->action == 1 ? '#ccd9ff' : '' ) }}">
                            <th class="text-center">{{ $loop->index + 1 }}</th>
                            <td class="text-center">{{ $contact->username }}</td>
                            <td class="text-center">{{ $contact->email }}</td>
                            <td class="text-center">
                                <a href="{{ route('contact.show', $contact->id) }}" class="btn btn-info">Read</a>
                            </td>
                            <td class="text-center">
                                <a href="{{ route('contact.delete', $contact->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-danger text-center" colspan="5">No Data Found</td>
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
