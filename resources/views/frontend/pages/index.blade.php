@extends('layouts.app')

@section('title', 'Home')

@section('front_content')

  <!-- Banner Area -->
  <div class="banner-area">
    <div class="container-fluid">
        <div class="container-max">
            @foreach($banners as $banner)
            <div class="banner-item-content banner-item-ptb">
                <h1>{{ $banner->banner_author }}</h1>
                <p>
                   {{ $banner->banner_description }} 
                </p>
                <div class="banner-btn">
                    <a href="{{ route('about') }}" class="default-btn btn-bg-two border-radius-50">Learn More <i class='bx bx-chevron-right'></i></a>
                    <a href="{{ route('contact') }}" class="default-btn btn-bg-one border-radius-50 ml-20">Get A Quote <i class='bx bx-chevron-right'></i></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Banner Area End -->

    <!-- About Area -->
    <div class="about-area ptb-100">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                @foreach($abouts as $about)
                <div class="col-lg-6">
                    <div class="about-play">
                        <img src="{{ asset($about->photo) }}" alt="About Images">
                        <div class="about-play-content">
                            <span>Watch Our Intro Video</span>
                            <h2>Perfect Solution for IT Services!</h2>
                            <div class="play-on-area">
                                <a href="https://www.youtube.com/watch?v=tUP5S4YdEJo" class="play-on popup-btn"><i class='bx bx-play'></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-content ml-25">
                        <div class="section-title">
                            <span class="sp-color2">{{ $about->experience }} Years of Experience</span>
                            <h2>{{ $about->title }}</h2>
                            <p>{{ $about->description }}</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <ul class="about-list text-start">
                                    <li><i class='bx bxs-check-circle'></i>Cost of Supplies and Equipment</li>
                                    <li><i class='bx bxs-check-circle'></i>Bribed Autor Nisi Elit Volume</li>
                                    <li><i class='bx bxs-check-circle'></i>Cost of Supplies and Equipment</li>
                                </ul>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <ul class="about-list text-start about-list-2">
                                    <li><i class='bx bxs-check-circle'></i>Change the Volume of Expected</li>
                                    <li><i class='bx bxs-check-circle'></i>Easy to Customer Services</li>
                                    <li><i class='bx bxs-check-circle'></i>Good Quality Products Services</li>
                                </ul>
                            </div>
                        </div>
                        <p class="about-content-text">{{ $about->our_mission }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- About Area End -->

    
        <!-- Services Area -->
        <section class="services-area-two pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sp-color1">Our Services</span>
                    <h2>We Provide a Wide Variety of IT Services</h2>
                </div>
                <div class="row pt-45">
                    @foreach($services as $service)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="services-item">
                            <a href="{{ route('servicedetail', $service->id) }}">
                                <img src="{{ asset($service->service_icon) }}" alt="Service Image" class="img-fluid">
                            </a>
                            <div class="content">
                                <h3><a href="{{ route('servicedetail', $service->id) }}">{{ $service->service_title }}</a></h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        
        <!-- Services Area End -->

            <!-- Work Process Area Two -->
            <section class="work-process-area-two pt-100 pb-70">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-5">
                            <div class="work-process-left">
                                <div class="section-title">
                                    <span class="sp-color1">Our Working Process</span>
                                    <h2>How Our Services Will Help You to Grow Your Business</h2>
                                </div>
                                <a href="{{ route('contact') }}" class="default-btn btn-bg-two border-radius-50 text-center">Get A Quote</a>
                            </div>
                        </div>
    
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="work-process-card">
                                        <i class="flaticon-project"></i>
                                        <h3>Discovery</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mollis tempor nunc ac sollicitudin Interdum.</p>
                                        <div class="number">01</div>
                                    </div>
                                </div>
            
                                <div class="col-lg-6 col-sm-6">
                                    <div class="work-process-card">
                                        <i class="flaticon-chip"></i>
                                        <h3>Planning</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mollis tempor nunc ac sollicitudin Interdum.</p>
                                        <div class="number">02</div>
                                    </div>
                                </div>
            
                                <div class="col-lg-6 col-sm-6">
                                    <div class="work-process-card">
                                        <i class="flaticon-effective"></i>
                                        <h3>Execute</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mollis tempor nunc ac sollicitudin Interdum.</p>
                                        <div class="number">03</div>
                                    </div>
                                </div>
            
                                <div class="col-lg-6 col-sm-6">
                                    <div class="work-process-card">
                                        <i class="flaticon-bullhorn"></i>
                                        <h3>Deliver</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mollis tempor nunc ac sollicitudin Interdum.</p>
                                        <div class="number">04</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Work Process Area Two End -->
@endsection