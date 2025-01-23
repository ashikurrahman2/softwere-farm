<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Dec 2024 10:04:50 GMT -->
<head>
    @include('user.layouts.meta')
    <!-- [style] -->
    <title>Jomijoma Limited | @yield('title') </title>
    @include('user.layouts.style')
    <!-- FAVICON -->

   
</head>

<body class="maxw1600 m0a dashboard-bd">
    <!-- Wrapper -->
    <div id="wrapper" class="int_main_wraapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <div class="dash-content-wrap">
            @include('user.layouts.navbar') 
        </div>
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <!-- START SECTION DASHBOARD -->
        <section class="user-page section-padding">
            <div class="container-fluid">
                <div class="row">
                    @include('user.layouts.sidebar') 
                    
                    
                    @yield('user_content')
                    
                </div>
                @include('user.layouts.footer')
            </div>
        </section>
        <!-- END SECTION DASHBOARD -->
         <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
        <!-- END FOOTER -->

        <!-- START PRELOADER -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
        <!-- END PRELOADER -->

        <!-- ARCHIVES JS -->
        <script src="frontend/assets/js/jquery-3.5.1.min.js"></script>
        <script src="frontend/assets/js/jquery-ui.js"></script>
        <script src="frontend/assets/js/tether.min.js"></script>
        <script src="frontend/assets/js/moment.js"></script>
        <script src="frontend/assets/js/bootstrap.min.js"></script>
        <script src="frontend/assets/js/mmenu.min.js"></script>
        <script src="frontend/assets/js/mmenu.js"></script>
        <script src="frontend/assets/js/swiper.min.js"></script>
        <script src="frontend/assets/js/swiper.js"></script>
        <script src="frontend/assets/js/slick.min.js"></script>
        <script src="frontend/assets/js/slick2.js"></script>
        <script src="frontend/assets/js/fitvids.js"></script>
        <script src="frontend/assets/js/jquery.waypoints.min.js"></script>
        <script src="frontend/assets/js/jquery.counterup.min.js"></script>
        <script src="frontend/assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="frontend/assets/js/isotope.pkgd.min.js"></script>
        <script src="frontend/assets/js/smooth-scroll.min.js"></script>
        <script src="frontend/assets/js/lightcase.js"></script>
        <script src="frontend/assets/js/search.js"></script>
        <script src="frontend/assets/js/owl.carousel.js"></script>
        <script src="frontend/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="frontend/assets/js/ajaxchimp.min.js"></script>
        <script src="frontend/assets/js/newsletter.js"></script>
        <script src="frontend/assets/js/jquery.form.js"></script>
        <script src="frontend/assets/js/jquery.validate.min.js"></script>
        <script src="frontend/assets/js/searched.js"></script>
        <script src="frontend/assets/js/dashbord-mobile-menu.js"></script>
        <script src="frontend/assets/js/forms-2.js"></script>
        <script src="frontend/assets/js/color-switcher.js"></script>

        <script>
            $(".header-user-name").on("click", function() {
                $(".header-user-menu ul").toggleClass("hu-menu-vis");
                $(this).toggleClass("hu-menu-visdec");
            });

        </script>

        <!-- MAIN JS -->
        <script src="frontend/assets/js/script.js"></script>

    </div>
    <!-- Wrapper / End -->
</body>


<!-- Mirrored from code-theme.com/html/findhouses/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Dec 2024 10:04:51 GMT -->
</html>
