@extends('layouts.app')

@section('title', 'Case Details')

@section('front_content')

        <!-- Inner Banner -->
        <div class="inner-banner">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>Case Study Details</h3>
                    <ul>
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <i class='bx bx-chevrons-right'></i>
                        </li>
                        <li>Case Study Details</li>
                    </ul>
                </div>
            </div>
            <div class="inner-shape">
                <img src="{{ asset('/') }}frontend/assets/images/shape/inner-shape.png" alt="Images">
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Case Details Area -->
        <div class="case-details-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="case-article">
                            <div class="case-article-img">
                               <img src="{{ asset('/') }}frontend/assets/images/case-study/case-details.jpg" alt="Images">
                            </div>
                            <div class="case-article-content">
                                <h2>Web Development</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. cu 
                                    sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies ne, 
                                    pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet n, 
                                    vu eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis 
                                    pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aen  
                                    li, porttitor eu, consequat vitae, eleifend ac, enim.
                                </p>

                                {{-- <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul class="case-article-list case-article-rs case-article-ls">
                                            <li><i class='bx bxs-check-circle'></i>Cost of Supplies and Equipment</li>
                                            <li><i class='bx bxs-check-circle'></i>Bribed Autor Nisi Elit Volume</li>
                                            <li><i class='bx bxs-check-circle'></i>Cost of Supplies and Equipment</li>
                                        </ul>
                                    </div>
    
                                    <div class="col-lg-6 col-md-6">
                                        <ul class="case-article-list case-article-ls">
                                            <li><i class='bx bxs-check-circle'></i>Change the Volume of Expected</li>
                                            <li><i class='bx bxs-check-circle'></i>Easy to Customer Services</li>
                                            <li><i class='bx bxs-check-circle'></i>Good Quality Products Services</li>
                                        </ul>
                                    </div>
                                </div> --}}

                            </div>


                            <div class="case-article-another">
                                <h2>What Benefit You Will Get</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. cu 
                                    sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies ne, 
                                    pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet n, 
                                    vu eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis 
                                    pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aen  
                                    li, porttitor eu, consequat vitae, eleifend ac, enim.
                                </p>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="case-article-another-img">
                                            <img src="{{ asset('/') }}frontend/assets/images/case-study/case-study1.jpg" alt="Images">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="case-article-another-img">
                                            <img src="assets/images/case-study/case-study5.jpg" alt="Images">
                                        </div>
                                    </div>
                                </div>
                                {{-- <p>
                                    Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed
                                    odio sit amet.Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
                                    Duis sed odio sit amet.Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh
                                    id elit. Duis sed odio sit amet. li, porttitor eu, consequat vitae, eleifend ac, enim.
                                </p> --}}
                            </div>

                            <div class="case-work-process">
                                <h2>Our Working Proccess</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. cu 
                                    sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies ne, 
                                    pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet n, 
                                    vu eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis 
                                    pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aen  
                                    li, porttitor eu, consequat vitae, eleifend ac, enim.
                                </p>
                            </div>
                        </div>
                    </div>

                  
                      
                    

                            {{-- <div class="side-bar-widget">
                                <h3 class="title">Tag Cloud</h3>
                                <ul class="side-bar-widget-tag">
                                    <li><a href="case-details.html" target="_blank">Android</a></li>
                                    <li><a href="case-details.html" target="_blank">Creative</a></li>
                                    <li><a href="case-details.html" target="_blank">App</a></li>
                                    <li><a href="case-details.html" target="_blank">IOS</a></li>
                                    <li><a href="case-details.html" target="_blank">Business</a></li>
                                    <li><a href="case-details.html" target="_blank">Consulting</a></li>
                                </ul>
                            </div>

                            <div class="side-bar-widget">
                                <h3 class="title">Gallery</h3>
                                <ul class="blog-gallery">
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank">
                                            <img src="assets/images/blog/blog-small-img1.jpg" alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank">
                                            <img src="assets/images/blog/blog-small-img2.jpg" alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank">
                                            <img src="assets/images/blog/blog-small-img3.jpg" alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank">
                                            <img src="assets/images/blog/blog-small-img4.jpg" alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank">
                                            <img src="assets/images/blog/blog-small-img5.jpg" alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank">
                                            <img src="assets/images/blog/blog-small-img6.jpg" alt="image">
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="side-bar-widget">
                                <h3 class="title">Archive</h3>
                                <div class="side-bar-categories">
                                    <ul>
                                        <li>
                                            <div class="line-circle"></div>
                                            <a href="case-details.html" target="_blank">Design<span>[70]</span></a>
                                        </li>
                                        <li>
                                            <div class="line-circle"></div>
                                            <a href="case-details.html" target="_blank">Business<span>[24]</span></a>  
                                        </li>
                                        <li>
                                            <div class="line-circle"></div>
                                            <a href="case-details.html" target="_blank">Development<span>[08]</span></a>
                                        </li>
                                        <li>
                                            <div class="line-circle"></div>
                                            <a href="case-details.html" target="_blank">Technology <span>[17]</span></a>
                                        </li>
                                        <li>
                                            <div class="line-circle"></div>
                                            <a href="case-details.html" target="_blank">Startup <span>[20]</span></a>
                                        </li>
                                        <li>
                                            <div class="line-circle"></div>
                                            <a href="case-details.html" target="_blank">Marketing Growth <span>[13]</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div> --}}
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- Case Details Area End -->
@endsection