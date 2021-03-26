<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ env('APP_NAME') }} | Metin2 PayPal Payment Gateway (IPN)">
    <meta name="author" content="Fregion">
    <meta name="robots" content="noindex, follow" />
    <title>{{ env('APP_NAME') }} | Metin2 PayPal Payment Gateway</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('img/favicon.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('img/favicon.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('img/favicon.png') }}">

    <!-- Bootstrap css -->
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" />

    <!-- Icons css -->
    <link href="{{ asset('assets/plugins/icons/icons.css') }}" rel="stylesheet">

    <!--  Right-sidemenu css -->
    <link href="{{ asset('assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

    <!--  Left-Sidebar css -->
    <link rel="stylesheet" href="{{ asset('assets/css/sidemenu.css') }}">

    <!--- Dashboard-2 css-->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style-dark.css') }}" rel="stylesheet">

    <!--- Color css-->
    <link id="theme" href="{{ asset('assets/css/colors/color.css') }}" rel="stylesheet">


    <!--  Owl-carousel css-->
    <link href="{{ asset('assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet" />

    <!-- Maps css -->
    <link href="{{ asset('assets/plugins/jqvmap/jqvmap.min.css') }}" rel="stylesheet">

    <!-- Jvectormap css -->
    <link href="{{ asset('assets/plugins/jqvmap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />


    <!---Skinmodes css-->
    <link href="{{ asset('assets/css/skin-modes.css') }}" rel="stylesheet" />

    <!--- Animations css-->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">

    <!---Switcher css-->
    <link href="{{ asset('assets/switcher/css/switcher.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/switcher/demo.css') }}" rel="stylesheet">
	
	

</head>

<body class="main-body light-theme app sidebar-mini active leftmenu-color">

    <!-- Loader -->
    <div id="global-loader">
        <img src="{{ asset('assets/img/loader-2.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->

    <!-- main-sidebar -->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="main-sidebar-header active">
            <a class="desktop-logo logo-dark active" href="{{ route('admin.dashboard') }}"><img src="{{ asset('img/zulu-logo.svg') }}"
                    class="main-logo dark-theme" alt="logo"></a>
            <div class="app-sidebar__toggle" data-toggle="sidebar">
                <a class="open-toggle" href="#"><i class="header-icon fe fe-chevron-left"></i></a>
                <a class="close-toggle" href="#"><i class="header-icon fe fe-chevron-right"></i></a>
            </div>
        </div>
        <div class="main-sidemenu sidebar-scroll">
            <ul class="side-menu">
                <li>
                    <h3>Main</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('admin.dashboard') }}">
                        <div class="side-angle1"></div>
                        <div class="side-angle2"></div>
                        <div class="side-arrow"></div>
                        <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                            width="24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z" />
                            <path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3" />
                        </svg>
                        <span class="side-menu__label">Dashboard</span>
                    </a>
                </li>

                <li class="slide">
                    <a class="side-menu__item" href="{{ route('payments.create') }}">
                        <div class="side-angle1"></div>
                        <div class="side-angle2"></div>
                        <div class="side-arrow"></div>
                        <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                            width="24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M17 7H7V4H5v16h14V4h-2z" opacity=".3" />
                            <path
                                d="M19 2h-4.18C14.4.84 13.3 0 12 0S9.6.84 9.18 2H5c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm7 18H5V4h2v3h10V4h2v16z" />
                        </svg>
                        <span class="side-menu__label">Add New Payment</span>
                    </a>
                </li>

                <li class="slide">
                    <a class="side-menu__item" href="{{ route('logs.index') }}">
                        <div class="side-angle1"></div>
                        <div class="side-angle2"></div>
                        <div class="side-arrow"></div>
                        <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                            width="24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M12 3.19L5 6.3V12h7v8.93c3.72-1.15 6.47-4.82 7-8.94h-7v-8.8z" opacity=".3" />
                            <path
                                d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 19.93V12H5V6.3l7-3.11v8.8h7c-.53 4.12-3.28 7.79-7 8.94z" />
                        </svg>
                        <span class="side-menu__label">Check Logs</span>
                    </a>
                </li>
            </ul>

            <div class="app-sidefooter">
                <a class="side-menu__item" href="{{ route('admin.logout') }}"><svg class="side-menu__icon"
                        xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24"
                        viewBox="0 0 24 24" width="24">
                        <g>
                            <rect fill="none" height="24" width="24" />
                        </g>
                        <g>
                            <path
                                d="M11,7L9.6,8.4l2.6,2.6H2v2h10.2l-2.6,2.6L11,17l5-5L11,7z M20,19h-8v2h8c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2h-8v2h8V19z" />
                        </g>
                    </svg> <span class="side-menu__label">Logout</span></a>
            </div>
        </div>
    </aside>
    <!-- main-sidebar -->
    <!-- main-content -->
    <div class="main-content app-content">

        <!-- main-header -->
        <div class="main-header sticky side-header nav nav-item">
            <div class="container-fluid">
                <div class="main-header-left">
                    <div class="responsive-logo">
                        <a href="#"><img src="{{ asset('img/zulu-logo.svg') }}" width="150" class="logo-1 logo-color1"
                                alt="logo"></a>
                    </div>
                    <div class="app-sidebar__toggle d-md-none" data-toggle="sidebar">
                        <a class="open-toggle" href="#"><i class="header-icon fe fe-align-left"></i></a>
                        <a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
                    </div>
                </div>
                <div class="main-header-right">
                    <div class="nav nav-item  navbar-nav-right ml-auto">
                        <div class="nav-link" id="bs-example-navbar-collapse-1">
                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">
                                        <button type="reset" class="btn btn-default">
                                            <i class="fas fa-times"></i>
                                        </button>
                                        <button type="submit" class="btn btn-default nav-link resp-btn">
                                            <i class="fe fe-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <div class="dropdown main-profile-menu nav nav-item nav-link">
                            <a class="profile-user d-flex" href="#"><img alt=""
                                    src="{{ asset('assets/img/faces/1.jpg') }}" />
                                <div class="p-text d-none">
                                    <span class="p-name font-weight-bold">Mintrona Pechon</span>
                                    <small class="p-sub-text">Premium Member</small>
                                </div>
                            </a>
                            <div class="dropdown-menu shadow">
                                <div class="main-header-profile header-img">
                                    <div class="main-img-user">
                                        <img alt="" src="{{ asset('assets/img/faces/1.jpg') }}" />
                                    </div>
                                </div>
                                <a class="dropdown-item" href="{{ route('admin.logout') }}"><i
                                        class="fas fa-sign-out-alt"></i> Sign
                                    Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /main-header -->
        <!-- container -->
        <div class="container-fluid mg-t-20">

            <!-- breadcrumb -->
            <div class="breadcrumb-header justify-content-between">
                <div class="left-content">
                    <h4 class="content-title mb-2">Hi, welcome back!</h4>
                </div>
            </div>
            <!-- breadcrumb -->


            @yield('container')

            <!-- row close -->


        </div>
        <!-- Container closed -->

    </div>
    <!-- main-content closed -->

    <!-- Footer opened -->
    <div class="main-footer ht-40">
        <div class="container-fluid pd-t-0-f ht-100p">
            <span>Copyright © {{ date('Y') }} <a href="https://www.fregion.online">Fregion</a>. - {{ env('APP_NAME') }}</span>
        </div>
    </div>
    <!-- Footer closed -->
    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>


    <!-- Jquery js-->
	<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
	
	<!-- Moment js -->
    <script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
	
	
    <!-- Bootstrap4 js-->
    <script src="{{ asset('assets/plugins/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Ionicons js-->
    <script src="{{ asset('assets/plugins/ionicons/ionicons.js') }}"></script>

    

  <!-- P-scroll js -->
	<script src=" {{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/perfect-scrollbar/p-scroll.js') }}"></script>

    <!-- Sidebar js -->
    <script src="{{ asset('assets/plugins/side-menu/sidemenu.js') }}"></script>

    <!-- Rating js-->
    <script src="{{ asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>
    <script src="{{ asset('assets/plugins/rating/jquery.barrating.js') }}"></script>

  <!-- Suggestion js-->
	<script src=" {{ asset('assets/plugins/suggestion/jquery.input-dropdown.js') }}"></script>
    <script src="{{ asset('assets/js/search.js') }}"></script>

    <!-- Right-sidebar js -->
    <script src="{{ asset('assets/plugins/sidebar/sidebar.js') }}"></script>
    <script src="{{ asset('assets/plugins/sidebar/sidebar-custom.js') }}"></script>

    <!-- Sticky js-->
    <script src="{{ asset('assets/js/sticky.js') }}"></script>

    <!-- eva-icons js -->
    <script src="{{ asset('assets/plugins/eva-icons/eva-icons.min.js') }}"></script>


    <!--Internal  Chart.bundle js -->
    <script src="{{ asset('assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>

    <!--Internal Sparkline js -->
    <script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Moment js -->
    <script src="{{ asset('assets/plugins/raphael/raphael.min.js') }}"></script>

    <!--Internal  Flot js-->
    <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.sampledata.js') }}"></script>
    <script src="{{ asset('assets/js/chart.flot.sampledata.js') }}"></script>

    <!-- Chart-circle js -->
    <script src="{{ asset('assets/plugins/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/chart-circle/chart-circle.js') }}"></script>

    <!-- ECharts js-->
    <script src="{{ asset('assets/plugins/echart/echart.js') }}"></script>

    <!--Internal  index js -->
    <script src="{{ asset('assets/plugins/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>


    <!-- custom js -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <!-- Switcher js -->
    <script src="{{ asset('assets/switcher/js/switcher.js') }}"></script>
</body>

</html>
