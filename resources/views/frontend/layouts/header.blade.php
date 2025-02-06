 <!-- Top Header Start -->
        <header class="top-header top-header-bg">
            <div class="container-fluid">
                <div class="container-max">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-6">
                            <div class="top-head-left">
                                <div class="top-contact">
                                    <h3>Support By : <a href="tel:12122555511">+1 (212) 255-5511</a></h3>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-5 col-md-6">
                            <div class="top-header-right">
                                <div class="top-header-social">
                                    <ul>
                                        <li>
                                            <a href="https://www.facebook.com/" target="_blank">
                                                <i class='bx bxl-facebook'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/?lang=en" target="_blank">
                                                <i class='bx bxl-twitter'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/" target="_blank">
                                                <i class='bx bxl-linkedin-square'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/" target="_blank">
                                                <i class='bx bxl-instagram'></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="language-list">
                                    <select class="language-list-item">
                                        <option>English</option>
                                        <option>العربيّة</option>
                                        <option>Deutsch</option>
                                        <option>Português</option>
                                        <option>简体中文</option>
                                    </select>	
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Top Header End -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                 <a href="index.html" class="logo">
                    <img src="{{ asset('/') }}frontend/assets/images/logos/logo-1.png" class="logo-one" alt="Logo">
                    <img src="assets/images/logos/logo-2.png" class="logo-two" alt="Logo">
                </a>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <div class="container-fluid">
                    <div class="container-max">
                        <nav class="navbar navbar-expand-md navbar-light ">
                            <a class="navbar-brand" href="/">
                                <img src="{{ asset('/') }}frontend/assets/images/logos/logo-1.png" class="logo-one" alt="Logo">
                                {{-- <img src="{{ asset('/') }}frontend/assets/images/logos/logo-2.png" class="logo-two" alt="Logo"> --}}
                            </a>
    
                            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item">
                                        <a href="/" class="nav-link active">
                                            Home 
                                        </a>
                                      
                                    </li>
    
                                    <li class="nav-item">
                                        <a href="{{ route('about') }}" class="nav-link">
                                            About
                                        </a>
                                    </li>
    
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Pages 
                                            <i class='bx bx-caret-down'></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="{{ route('teams') }}" class="nav-link">
                                                    Team
                                                </a>
                                            </li>
    
                                            <li class="nav-item">
                                                <a href="{{ route('frequnt') }}" class="nav-link">
                                                    FAQ
                                                </a>
                                            </li>
    
    
                                            <li class="nav-item">
                                                <a href="{{ route('terms') }}" class="nav-link">
                                                    Terms & Conditions
                                                </a>
                                            </li>
    
                                            <li class="nav-item">
                                                <a href="{{ route('policies') }}" class="nav-link">
                                                    Privacy Policy
                                                </a>
                                            </li>
    
                                        </ul>
                                    </li>
    
                                    <li class="nav-item">
                                        <a href="{{ route('service') }}" class="nav-link">
                                            Services 
                                            
                                        </a>
                                    
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('career') }}" class="nav-link">
                                            Career
                                        </a>
                                    </li>
    
                                    <li class="nav-item">
                                        <a href="{{ route('contact') }}" class="nav-link">
                                            Contact
                                        </a>
                                    </li>
                                </ul>
    
                                <div class="nav-side d-display nav-side-mt">
                                    <div class="nav-side-item">
                                        <div class="search-side-widget">
                                            <form class="search-side-form">
                                                <input type="search" class="form-control" placeholder="Search...">
                                                <button type="submit">
                                                    <i class="bx bx-search"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
    
                                    <div class="nav-side-item">
                                        <div class="get-btn">
                                            <a href="{{ route('contact') }}" class="default-btn btn-bg-two border-radius-50">Get A Quote <i class='bx bx-chevron-right'></i></a>
                                        </div>	
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

           <div class="side-nav-responsive">
                <div class="container-max">
                    <div class="dot-menu">
                        <div class="circle-inner">
                            <div class="in-circle circle-one"></div>
                            <div class="in-circle circle-two"></div>
                            <div class="in-circle circle-three"></div>
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="side-nav-inner">
                            <div class="side-nav justify-content-center align-items-center">
                                <div class="side-nav-item nav-side">
                                    <div class="search-box">
                                        <i class='bx bx-search'></i>
                                    </div>
                                    <div class="get-btn">
                                        <a href="contact.html" class="default-btn btn-bg-two border-radius-50">Get A Quote <i class='bx bx-chevron-right'></i></a>
                                    </div>	
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

        <!-- Search Overlay -->
        <div class="search-overlay">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="search-layer"></div>
                    <div class="search-layer"></div>
                    <div class="search-layer"></div>
                    
                    <div class="search-close">
                        <span class="search-close-line"></span>
                        <span class="search-close-line"></span>
                    </div>

                    <div class="search-form">
                        <form>
                            <input type="text" class="input-search" placeholder="Search here...">
                            <button type="submit"><i class='bx bx-search'></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Overlay -->