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



    <!---Skinmodes css-->
    <link href="{{ asset('assets/css/skin-modes.css') }}" rel="stylesheet" />

    <!--- Animations css-->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">

</head>

<body class="main-body light-theme">

    <!-- Loader -->
    <div id="global-loader">
        <img src="{{ asset('assets/img/loader-2.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->

    <!-- main-signin-wrapper -->

    <div class="my-auto page page-h">



       @yield('form')


    </div>

    <!-- /main-signin-wrapper -->

    <!-- JQuery min js -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap4 js-->
    <script src="{{ asset('assets/plugins/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Ionicons js -->
    <script src="{{ asset('assets/plugins/ionicons/ionicons.js') }}"></script>

    <!-- Moment js -->
    <script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>

    <!-- eva-icons js -->
    <script src="{{ asset('assets/plugins/eva-icons/eva-icons.min.js') }}"></script>

    <!-- Rating js-->
    <script src="{{ asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>
    <script src="{{ asset('assets/plugins/rating/jquery.barrating.js') }}"></script>




    <!-- custom js -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
