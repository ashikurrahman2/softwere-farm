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
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <i class='bx bx-chevrons-right'></i>
                        </li>
                        <li>Service Details</li>
                    </ul>
                </div>
            </div>
            <div class="inner-shape">
                <img src="{{ asset('/') }}frontend/assets/images/shape/inner-shape.png" alt="Images">
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
                               <img src="{{ asset($service->service_icon) }}" alt="Images">
                            </div>
                            <div class="service-article-content">
                                <h2>{{ $service->service_title }}</h2>
                                <p>
                                  {{ $service->service_details }}
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

                            </div>

                            <div class="service-article-another">
                                <h2>What Benefit You Will Get</h2>
                                <p>
                                   {{ $service->service_benifit }}
                                </p>
                          
                            </div>

                            <div class="service-work-process">
                                <h2>Our Working Proccess</h2>
                                <p>
                                 {{ $service->working_process }}
                                </p>
                            </div>
                        </div>
                    </div>

                  
                </div>
            </div>
        </div>
        <!-- Service Details Area End -->
@endsection