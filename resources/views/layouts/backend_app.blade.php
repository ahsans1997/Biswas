<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BPFFL</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('backend_asset') }}/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('backend_asset') }}/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="{{ asset('backend_asset') }}/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('backend_asset') }}/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('backend_asset') }}/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('backend_asset') }}/vendors/jquery-bar-rating/fontawesome-stars.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('backend_asset') }}/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('backend_asset') }}/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                <a class="navbar-brand brand-logo" href="{{ route('dashboard') }}">
                    <img style="width: 170px; height: 50px;" src="{{ asset('backend_asset') }}/images/biswas.png" alt="biswas.png" />
                </a>
                <a class="navbar-brand brand-logo-mini" href="{{ route('dashboard') }}">
                    <img style="width: 50px; height: 50px;" src="{{ asset('backend_asset') }}/images/logo.png" alt="logo.png" />
                </a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">

                <ul class="navbar-nav">
                    @yield('question')
                    @yield('news')
                    @yield('dashboard')

                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="row row-offcanvas row-offcanvas-right">
                <!-- partial:partials/_settings-panel.html -->
                <div class="theme-setting-wrapper">
                    <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
                    <div id="theme-settings" class="settings-panel">
                        <i class="settings-close mdi mdi-close"></i>
                        <p class="settings-heading">SIDEBAR SKINS</p>
                        <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                            <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                        </div>
                        <div class="sidebar-bg-options" id="sidebar-dark-theme">
                            <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                        </div>
                        <p class="settings-heading mt-2">HEADER SKINS</p>
                        <div class="color-tiles mx-0 px-4">
                            <div class="tiles primary"></div>
                            <div class="tiles success"></div>
                            <div class="tiles warning"></div>
                            <div class="tiles danger"></div>
                            <div class="tiles pink"></div>
                            <div class="tiles info"></div>
                            <div class="tiles dark"></div>
                            <div class="tiles default"></div>
                        </div>
                    </div>
                </div>
                <!-- partial -->
                <!-- partial:partials/_sidebar.html -->
                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">
                        <li class="nav-item nav-profile">
                            <div class="nav-link">
                                <div class="profile-image">
                                    <img src="{{ asset('backend_asset') }}/images/faces/mohsin.jpg" alt="image" />
                                    <span class="online-status online"></span>
                                    <!--change class online to offline or busy as needed-->
                                </div>
                                <div class="profile-name">
                                    <p class="name">
                                        Marina Michel
                                    </p>
                                    <p class="designation">
                                        Super Admin
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">
                                <i class="icon-rocket menu-icon"></i>
                                <span class="menu-title">Dashboard</span>
                                <span class="badge badge-success">New</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false"
                                aria-controls="page-layouts">
                                <i class="icon-check menu-icon"></i>
                                <span class="menu-title">Page Layouts</span>
                                <span class="badge badge-danger">3</span>
                            </a>
                            <div class="collapse" id="page-layouts">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link"
                                            href="pages/layout/boxed-layout.html">Boxed</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="pages/layout/rtl-layout.html">RTL</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="pages/layout/horizontal-menu.html">Horizontal Menu</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('news.index') }}">
                                <i class="icon-picture menu-icon"></i>
                                <span class="menu-title">Gallery</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('question.index') }}">
                                <i class="icon-question menu-icon"></i>
                                <span class="menu-title">Question</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact.index') }}">
                                <i class="icon-phone menu-icon"></i>
                                <span class="menu-title">Contact</span>
                                @if (contact_massage_count() > 0)
                                    <span class="badge badge-danger">{{ contact_massage_count() }}</span>
                                @endif
                            </a>
                        </li>

                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false"
                                aria-controls="sidebar-layouts">
                                <i class="icon-layers menu-icon"></i>
                                <span class="menu-title">Sidebar Layouts</span>
                                <span class="badge badge-warning">5</span>
                            </a>
                            <div class="collapse" id="sidebar-layouts">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link"
                                            href="pages/layout/compact-menu.html">Compact menu</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="pages/layout/sidebar-collapsed.html">Icon menu</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="pages/layout/sidebar-hidden.html">Sidebar Hidden</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="pages/layout/sidebar-hidden-overlay.html">Sidebar Overlay</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="pages/layout/sidebar-fixed.html">Sidebar Fixed</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
                @yield('content')


                <!-- content-wrapper ends -->
            </div>
            <!-- row-offcanvas ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{ asset('backend_asset') }}/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{ asset('backend_asset') }}/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
    <script src="{{ asset('backend_asset') }}/vendors/chart.js/Chart.min.js"></script>
    <script src="{{ asset('backend_asset') }}/vendors/raphael/raphael.min.js"></script>
    <script src="{{ asset('backend_asset') }}/vendors/morris.js/morris.min.js"></script>
    <script src="{{ asset('backend_asset') }}/vendors/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('backend_asset') }}/js/off-canvas.js"></script>
    <script src="{{ asset('backend_asset') }}/js/hoverable-collapse.js"></script>
    <script src="{{ asset('backend_asset') }}/js/settings.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('backend_asset') }}/js/dashboard.js"></script>
    <!-- End custom js for this page-->
</body>

</html>
