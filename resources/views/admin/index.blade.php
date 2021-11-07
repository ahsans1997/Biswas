@extends('layouts.backend_app')

@section('dashboard')
<li class="nav-item dropdown d-none d-lg-flex">
    <a class="nav-link dropdown-toggle nav-btn" id="actionDropdown" href="#" data-toggle="dropdown">
        <span class="btn">+ Create new</span>
    </a>
    <div class="dropdown-menu navbar-dropdown dropdown-left" aria-labelledby="actionDropdown">
        <a class="dropdown-item" href="#">
            <i class="icon-user text-primary"></i>
            User Account
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">
            <i class="icon-user-following text-warning"></i>
            Admin User
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">
            <i class="icon-docs text-success"></i>
            Sales report
        </a>
    </div>
</li>
@endsection

@section('content')

<!-- partial -->
<div class="content-wrapper">
    <div class="row">

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
