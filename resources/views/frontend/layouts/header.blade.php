 <!-- tpm-header-area start -->
    <header class="tmp-header-area-start header-one header--sticky header--transparent">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-content">
                        <div class="logo">
                            <a href="index.html">
                                <img class="logo-dark" src="{{ asset('/') }}frontend/assets/images/logo/white-logo-reeni.png" alt="Reeni - Personal Portfolio HTML Template for developers and freelancers">
                                <img class="logo-white" src="{{ asset('/') }}frontend/assets/images/logo/logo-white.png" alt="Reeni - Personal Portfolio HTML Template for developers and freelancers">
                            </a>
                        </div>
                        <nav class="tmp-mainmenu-nav d-none d-xl-block">
                            <ul class="tmp-mainmenu">
                                <li>
                                    <a href="#home">Home
                                    </a>
   
                                </li>
                                <li>
                                    <a href="#about">About</a>
                                </li>
                                <li>
                                    <a href="#services">Services
                                
                                    </a>
                                </li>

                                  <li>
                                    <a href="#ressume">Ressume
                                    </a>
                                </li>
                                <li>
                                    <a href="#project">Project
                                    </a>
                                </li>

                                  <li>
                                    <a href="#skill">Skills
                                    </a>
                                </li>
                                <li>
                                    <a href="#contact">Contact</a>
                                </li>
                            </ul>

                        </nav>
                        <div class="tmp-header-right">
                            <div class="social-share-wrapper d-none d-md-block">
                                <div class="social-link">
                                     @foreach($web_settings as $i_link)
                                    <a href="{{ $i_link->instragram }}"><i class="fa-brands fa-github" target="_blank"></i></a>
                                    <a href="{{ $i_link->linkedin }}"><i class="fa-brands fa-linkedin-in" target="_blank"></i></a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="actions-area">
                                <div class="tmp-side-collups-area d-none d-xl-block">
                                    <button class="tmp-menu-bars tmp_button_active"><i class="fa-regular fa-bars-staggered"></i></button>
                                </div>
                                <div class="tmp-side-collups-area d-block d-xl-none">
                                    <button class="tmp-menu-bars humberger_menu_active"><i class="fa-regular fa-bars-staggered"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- tpm-header-area end -->

    
    <div class="d-none d-xl-block">
        <div class="tmp-sidebar-area tmp_side_bar">
            <div class="inner">
                <div class="top-area">
                    <a href="index.html" class="logo">
                        <img class="logo-dark" src="assets/images/logo/white-logo-reeni.png" alt="Reeni - Personal Portfolio HTML Template for developers and freelancers">
                        <img class="logo-white" src="assets/images/logo/logo-white.png" alt="Reeni - Personal Portfolio HTML Template for developers and freelancers">
                    </a>
                    <div class="close-icon-area">
                        <button class="tmp-round-action-btn close_side_menu_active">
                            <i class="fa-sharp fa-light fa-xmark"></i>
                        </button>
                    </div>
                </div>
                <div class="content-wrapper">
                    <div class="image-area-feature">
                        <a href="index.html">
                            <img src="assets/images/logo/man.png" alt="personal-logo">
                        </a>
                    </div>
                    <h5 class="title mt--30">Freelancer delivering exceptional Webflow, and Next.js solutions.</h5>
                    <p class="disc">I am a skilled freelancer specializing in Webflow development, Figma design, and Next.js projects. I deliver creative, dynamic, and user-centric web solutions.
                    </p>
                    <div class="short-contact-area">
                        <!-- single contact information -->
                            @foreach($web_settings as $i_setting)
                        <div class="single-contact">
                            <i class="fa-solid fa-phone"></i>
                            <div class="information tmp-link-animation">
                                <span>Call Now</span>
                                <a href="#" class="number">+88 {{ $i_setting->phone_one }}, {{ $i_setting->phone_two }}</a>
                            </div>
                        </div>
                        @endforeach
                        <!-- single contact information end -->

                        <!-- single contact information -->
                        <div class="single-contact">
                              @foreach($web_settings as $i_setting)
                            <i class="fa-solid fa-envelope"></i>
                            <div class="information tmp-link-animation">
                                <span>Mail Us</span>
                                <a href="#" class="number">{{ $i_setting->main_email }}</a>
                            </div>
                        </div>
                        @endforeach
                        <!-- single contact information end -->

                        <!-- single contact information -->
                        <div class="single-contact">
                              @foreach($web_settings as $i_setting)
                            <i class="fa-solid fa-location-crosshairs"></i>
                            <div class="information tmp-link-animation">
                                <span>My Address</span>
                                <span class="number">{{ $i_setting->address }}</span>
                            </div>
                        </div>
                        @endforeach
                        <!-- single contact information end -->
                    </div>
                    <!-- social area start -->
                    {{-- <div class="social-wrapper mt--20">
                        <span class="subtitle">find with me</span>
                        <div class="social-link">
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        </div>
                    </div> --}}
                    <!-- social area end -->
                </div>
            </div>
        </div>
        <a class="overlay_close_side_menu close_side_menu_active" href="javascript:void(0);"></a>
    </div>

    <div class="d-block d-xl-none">
        <div class="tmp-popup-mobile-menu">
            <div class="inner">
                <div class="header-top">
                    <div class="logo">
                        <a href="index.html" class="logo-area">
                            <img class="logo-dark" src="assets/images/logo/white-logo-reeni.png" alt="Reeni - Personal Portfolio HTML Template for developers and freelancers">
                            <img class="logo-white" src="assets/images/logo/logo-white.png" alt="Reeni - Personal Portfolio HTML Template for developers and freelancers">
                        </a>

                    </div>
                    <div class="close-menu">
                        <button class="close-button tmp-round-action-btn">
                            <i class="fa-sharp fa-light fa-xmark"></i>
                        </button>
                    </div>
                </div>
                <ul class="tmp-mainmenu">
                    <li>
                        <a href="#">Home
                        </a>
    
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li class="has-dropdown">
                        <a href="#">Services
                            <i class="fa-regular fa-chevron-down"></i>
                        </a>
                        <ul class="submenu">
                            <li><a href="service.html">Service</a></li>
                            <li><a href="service-details.html">Service Details</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown">
                        <a href="#">Blog
                            <i class="fa-regular fa-chevron-down"></i>
                        </a>
                        <ul class="submenu">
                            <li><a href="blog.html">Blog Classic</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown">
                        <a href="#">Project
                            <i class="fa-regular fa-chevron-down"></i>
                        </a>
                        <ul class="submenu">
                            <li><a href="project.html">Project</a></li>
                            <li><a href="project-details.html">Project Details</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>


                <div class="social-wrapper mt--40">
                    <span class="subtitle">find with me</span>
                    <div class="social-link">
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    </div>
                </div>
                <!-- social area end -->



            </div>
        </div>
    </div>