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

	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('css/vendors.css') }}" rel="stylesheet">
	<link href="{{ asset('css/svg-icons-animate.css') }}" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="{{ asset('css/custom.css') }}" rel="stylesheet">

	<!-- MODERNIZR MENU -->
	<script src="{{ asset('js/modernizr.js') }}"></script>

</head>

<body>

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->

	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->

	<div class="container-fluid full-height">
		<div class="row row-height">
			<div class="col-lg-6 content-left">
				<div class="content-left-wrapper">
					<a href="https://www.fregion.online/projects/zulu" id="logo"><img src="{{ asset('img/zulu-logo.svg') }}"
							alt="zulu-logo" height="70"></a>
					<div>
						<img class="img-fluid" src="{{ asset('img/ipn-logo.png') }}" title="ipn-logo" />
					</div>
					<div class="copy">© 2021 - <a href="https://www.fregion.online" target="_blank">Fregion</a> -
					{{ env('APP_NAME') }}</div>
				</div>
				<!-- /content-left-wrapper -->
			</div>
			<!-- /content-left -->

			<div class="col-lg-6 content-right text-center" id="start">
				<div id="wizard_container">
					@yield('main_container')
				</div>
				<!-- /Wizard container -->
			</div>
		</div>
		<!-- /content-right-->
	</div>
	<!-- /row-->
	</div>
	<!-- /container-fluid -->

	<!-- COMMON SCRIPTS -->
	<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('js/common_scripts.min.js') }}"></script>
	<script src="{{ asset('js/velocity.min.js') }}"></script>
	<script src="{{ asset('js/functions.js') }}"></script>
	<script src="{{ asset('js/pw_strenght.js') }}"></script>

</body>

</html>