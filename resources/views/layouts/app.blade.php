<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>SkyCode Solutions | @yield('title')</title>

	 <!-- Bootstrap CSS --> 
	 <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/bootstrap.min.css">
	 <!-- Animate Min CSS -->
	 <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/animate.min.css">
	 <!-- Flaticon CSS -->
	 <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/fonts/flaticon.css">
	 <!-- Boxicons CSS -->
	 <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/boxicons.min.css">
	 <!-- Owl Carousel Min CSS --> 
	 <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/owl.carousel.min.css">
	 <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/owl.theme.default.min.css">
	 <!--=== Magnific Popup Min CSS ===-->
	 <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/magnific-popup.min.css">
	 <!-- Nice Select CSS --> 
	 <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/nice-select.min.css">
	 <!-- Meanmenu CSS -->
	 <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/meanmenu.css">
	 <!-- Style CSS -->
	 <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/style.css">
	 <!-- Responsive CSS -->
	 <link rel="stylesheet" href="{{ asset('/') }}frontend/{{ asset('/') }}frontend/assets/css/responsive.css">
	 <!-- Theme Dark CSS -->
	 <link rel="stylesheet" href="{{ asset('/') }}frontend/{{ asset('/') }}frontend/assets/css/theme-dark.css">

	
	 <link rel="icon" type="image/png" href="{{ asset('/') }}frontend/assets/images/favicon.png">
</head>
<body>
	    <!-- Pre Loader -->
        {{-- <div class="preloader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="spinner"></div>
                </div>
            </div>
        </div> --}}
        <!-- End Pre Loader -->


		@include('frontend.layouts.header')

		@yield('front_content')

		@include('frontend.layouts.footer')


		
        <!-- Jquery Min JS -->
        <script src="{{ asset('/') }}frontend/assets/js/jquery.min.js"></script>
        <!-- Bootstrap Bundle Min JS -->
        <script src="{{ asset('/') }}frontend/assets/js/bootstrap.bundle.min.js"></script>
        <!-- Owl Carousel Min JS -->
        <script src="{{ asset('/') }}frontend/assets/js/owl.carousel.min.js"></script>
        <!-- Magnific Popup Min JS -->
        <script src="{{ asset('/') }}frontend/assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Nice Select Min JS -->
        <script src="{{ asset('/') }}frontend/assets/js/jquery.nice-select.min.js"></script>
        <!-- Wow Min JS -->
        <script src="{{ asset('/') }}frontend/assets/js/wow.min.js"></script>
        <!-- Meanmenu JS -->
        <script src="assets/js/meanmenu.js"></script>
        <!-- Ajaxchimp Min JS -->
        <script src="{{ asset('/') }}frontend/assets/js/jquery.ajaxchimp.min.js"></script>
        <!-- Form Validator Min JS -->
        <script src="{{ asset('/') }}frontend/assets/js/form-validator.min.js"></script>
        <!-- Contact Form JS -->
        <script src="{{ asset('/') }}frontend/assets/js/contact-form-script.js"></script>
        <!-- Custom JS -->
        <script src="{{ asset('/') }}frontend/assets/js/custom.js"></script>
</body>
</html>