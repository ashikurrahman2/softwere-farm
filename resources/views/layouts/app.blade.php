<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Reeni is a modern personal portfolio template for designers, developers, content writer, cleaner, programmer, fashion designer, model, Influencer and freelancers. Fully responsive, SEO-friendly, Bootstrap and easy to customize.">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}frontend/assets/images/favicon.svg">
    <title>Rokibul Alam | @yield('title')</title>
    <!-- Bootstrap min css -->
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/vendor/fontawesome.css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/plugins/swiper.css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/plugins/odometer.css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/vendor/animate.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/vendor/bootstrap.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/style.css">
</head>
<body>
	

		@include('frontend.layouts.header')

		@yield('front_content')

		@include('frontend.layouts.footer')


    {{-- Start all script --}}
     <script src="{{ asset('/') }}frontend/assets/js/vendor/jquery.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/vendor/jquery-ui.min.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/vendor/waypoints.min.js"></script>

    <script src="{{ asset('/') }}frontend/assets/js/plugins/odometer.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/vendor/appear.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/vendor/jquery-one-page-nav.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/plugins/swiper.js"></script>

    <script src="{{ asset('/') }}frontend/assets/js/plugins/gsap.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/plugins/splittext.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/plugins/scrolltigger.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/plugins/scrolltoplugins.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/plugins/smoothscroll.js"></script>
    <!-- bootstrap Js-->
    <script src="{{ asset('/') }}frontend/assets/js/vendor/bootstrap.min.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/vendor/waw.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/plugins/isotop.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/plugins/animation.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/plugins/contact.form.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/vendor/backtop.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/plugins/text-type.js"></script>
    <!-- custom Js -->
    <script src="{{ asset('/') }}frontend/assets/js/main.js"></script>
</body>
</html>