@extends('layouts.app')

@section('title', 'Service Details')

@section('front_content')

        <!-- Inner Banner -->
        <div class="inner-banner">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>Service Details</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <i class='bx bx-chevrons-right'></i>
                        </li>
                        <li>Service Details</li>
                    </ul>
                </div>
            </div>
            <div class="inner-shape">
                <img src="assets/images/shape/inner-shape.png" alt="Images">
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Service Details Area -->
        <div class="service-details-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="service-article">
                            <div class="service-article-img">
                               <img src="{{ asset('/') }}frontend/assets/images/services/service-details.jpg" alt="Images">
                            </div>
                            <div class="service-article-content">
                                <h2>Cloud Computing</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. cu 
                                    sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies ne, 
                                    pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet n, 
                                    vu eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis 
                                    pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aen  
                                    li, porttitor eu, consequat vitae, eleifend ac, enim.
                                </p>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul class="service-article-list service-article-rs">
                                            <li><i class='bx bxs-check-circle'></i>Cost of Supplies and Equipment</li>
                                            <li><i class='bx bxs-check-circle'></i>Bribed Autor Nisi Elit Volume</li>
                                            <li><i class='bx bxs-check-circle'></i>Cost of Supplies and Equipment</li>
                                        </ul>
                                    </div>
    
                                    <div class="col-lg-6 col-md-6">
                                        <ul class="service-article-list">
                                            <li><i class='bx bxs-check-circle'></i>Change the Volume of Expected</li>
                                            <li><i class='bx bxs-check-circle'></i>Easy to Customer Services</li>
                                            <li><i class='bx bxs-check-circle'></i>Good Quality Products Services</li>
                                        </ul>
                                    </div>
                                </div>

                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. cu 
                                    sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies ne, 
                                    pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet n, 
                                    vu eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis 
                                    pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aen  
                                    li, porttitor eu, consequat vitae, eleifend ac, enim.
                                </p>
                            </div>

                            <div class="service-article-another">
                                <h2>What Benefit You Will Get</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. cu 
                                    sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies ne, 
                                    pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet n, 
                                    vu eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis 
                                    pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aen  
                                    li, porttitor eu, consequat vitae, eleifend ac, enim.
                                </p>
                          
                            </div>

                            <div class="service-work-process">
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

                  
                </div>
            </div>
        </div>
        <!-- Service Details Area End -->
@endsection