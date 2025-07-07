 @extends('layouts.app')

 @section('title', 'Home')
 @section('front_content')
 <!-- tmp banner area start -->
    <div class="tmp-banner-one-area" id="home">
        <div class="container">
            <div class="banner-one-main-wrapper">
                 @foreach ($banners as $banner)
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="banner-right-content">
                            <img class="tmp-scroll-trigger tmp-zoom-in animation-order-1" src="{{ asset($banner->banner_image) }}" alt="banner-img">
                            <h2 class="banner-big-text-1 up-down">{{ strtoupper($banner->banner_designation) }}</h2>
                            <h2 class="banner-big-text-2 up-down-2">{{ strtoupper($banner->banner_designation) }}</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="inner">
                            <span class="sub-title tmp-scroll-trigger tmp-fade-in animation-order-1">Hello</span>
                            <h1 class="title tmp-scroll-trigger tmp-fade-in animation-order-2 mt--5">i’m
                                {{ $banner->banner_author }} a <br>
                                <span class="header-caption">
                                    <span class="cd-headline clip is-full-width">
                                        <span class="cd-words-wrapper">
                                            <b class="is-visible theme-gradient">{{ $banner->banner_designation }}.</b>
                                        </span>
                                </span>
                                </span>
                            </h1>
                            <p class="disc tmp-scroll-trigger tmp-fade-in animation-order-3">{{ $banner->banner_description }}</p>
                            <div class="button-area-banner-one tmp-scroll-trigger tmp-fade-in animation-order-4">
                                <a class="tmp-btn hover-icon-reverse radius-round" href="project.html">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">View Portfolio</span>
                                    <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
             @endforeach
            </div>
        </div>
    </div>
    <!-- tmp banner area end -->

    <!-- Tpm About Area Start -->
    <section class="service-area tmp-section-gap" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="service-card-v1 tmp-scroll-trigger tmp-fade-in animation-order-1 tmp-link-animation">
                        <div class="service-card-icon">
                            <i class="fa-light fa-pen-ruler"></i>
                        </div>
                        <h4 class="service-title"><a href="service-details.html">Web Design</a></h4>
                        <p class="service-para">120 Projects</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="service-card-v1 tmp-scroll-trigger tmp-fade-in animation-order-2 tmp-link-animation">
                        <div class="service-card-icon">
                            <i class="fa-light fa-bezier-curve"></i>
                        </div>
                        <h4 class="service-title"><a href="service-details.html">Ui/Ux Design</a></h4>
                        <p class="service-para">241 Projects</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="service-card-v1 tmp-scroll-trigger tmp-fade-in animation-order-3 tmp-link-animation">
                        <div class="service-card-icon">
                            <i class="fa-light fa-lightbulb"></i>
                        </div>
                        <h4 class="service-title"><a href="service-details.html">Web Research</a></h4>
                        <p class="service-para">240 Projects</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="service-card-v1 tmp-scroll-trigger tmp-fade-in animation-order-4 tmp-link-animation">
                        <div class="service-card-icon">
                            <i class="fa-light fa-envelope"></i>
                        </div>
                        <h4 class="service-title"><a href="service-details.html">Marketing</a></h4>
                        <p class="service-para">331 Prodect</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tpm About Area End -->
    

       <!-- Tpm Counter Area Start -->
    <section class="counter-area">
        <div class="container">
            <div class="row g-5">
                <div class="col-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="year-of-expariance-wrapper bg-blur-style-one tmp-scroll-trigger tmp-fade-in animation-order-1">
                        <div class="year-expariance-wrap">
                            <!-- <h2 class="year-number"><span class="counter">25 </span> </h2> -->
                            <h2 class="counter year-number"><span class="odometer" data-count="25">00</span>
                            </h2>
                            <h3 class="year-title">Years Of <br> experience</h3>
                        </div>
                        <p class="year-para">Business consulting consultants provide expert advice and guida the a
                            businesses to help theme their performance efficiency</p>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="counter-area-right-content">
                        <div class="row g-5">
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="counter-card tmponhover tmp-scroll-trigger tmp-fade-in animation-order-1">
                                    <h3 class="counter counter-title"><span class="odometer" data-count="20">00</span>k+
                                    </h3>
                                    <p class="counter-para">Our Project Complete</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="counter-card tmponhover tmp-scroll-trigger tmp-fade-in animation-order-2">
                                    <h3 class="counter counter-title"><span class="odometer" data-count="10">00</span>k+
                                    </h3>
                                    <p class="counter-para">Our Natural Products</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="counter-card tmponhover tmp-scroll-trigger tmp-fade-in animation-order-3">
                                    <h3 class="counter counter-title"><span class="odometer" data-count="200">00</span>+
                                    </h3>
                                    <p class="counter-para">Clients Reviews</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="counter-card tmponhover tmp-scroll-trigger tmp-fade-in animation-order-4">
                                    <h3 class="counter counter-title"><span class="odometer" data-count="1000">00</span>+
                                    </h3>
                                    <p class="counter-para">our Satisfied Clientd</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tpm Counter Area End -->

        <!-- Tpm Latest Service Area Start -->
    <section class="latest-service-area tmp-section-gapTop" id="services">
        <div class="container">
            <div class="section-head mb--50">
                <div class="section-sub-title center-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                    <span class="subtitle">Latest Service</span>
                </div>
                <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2">Inspiring The World One
                    <br> Project
                </h2>
                <p class="description section-sm tmp-scroll-trigger tmp-fade-in animation-order-3"> Business consulting
                    consultants provide expert advice and guida
                    businesses to help them improve their performance, efficiency, and organizational </p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                @foreach ($services as $key => $service)
                    <div class="service-card-v2 tmponhover tmp-scroll-trigger tmp-fade-in animation-order-1">
                        <h2 class="service-card-num"><span>{{ sprintf('%02d', $key + 1) }}.</span>{{ $service->service_title }}</h2>
                        <p class="service-para">{{ $service->service_subtitle }}</p>
                    </div>
                    @endforeach
                </div>
                <div class="col-lg-6">
                    <div class="service-card-user-image">
                        <img class="tmp-scroll-trigger tmp-zoom-in animation-order-1" src="{{ asset($service->service_image) }}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tpm Latest Service Area End -->

   <!-- tmp skill area start -->
<div class="tmp-skill-area tmp-section-gapTop">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="progress-wrapper">
                    <div class="content">
                        <h2 class="custom-title mb--30 tmp-scroll-trigger tmp-fade-in animation-order-1">
                            Design Skill 
                            <span>
                                <img src="{{ asset('frontend/assets/images/custom-line/custom-line.png') }}" alt="custom-line">
                            </span>
                        </h2>
                            {{-- Dynamic data fetching --}}
                        @foreach($skills as $index => $skill)
                        <div class="progress-charts">
                            <h6 class="heading heading-h6">{{ strtoupper($skill->skill_name) }}</h6>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" data-wow-duration="{{ 0.5 + ($index * 0.1) }}s" data-wow-delay=".{{ 3 + $index }}s" role="progressbar" style="width: {{ $skill->skill_percentage }}%; visibility: visible; animation-duration: {{ 0.5 + ($index * 0.1) }}s; animation-delay: .{{ 3 + $index }}s; animation-name: fadeInLeft;" aria-valuenow="{{ $skill->skill_percentage }}" aria-valuemin="0" aria-valuemax="100">
                                  <span class="percent-label">{{ $skill->skill_percentage }}%</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- tmp skill area end -->

   

     

    <!-- Tpm Education Experience Area Start -->
    <section class="education-experience tmp-section-gapTop" id="ressume">
        <div class="container">
            <div class="section-head mb--50">
                <div class="section-sub-title center-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                    <span class="subtitle">Education & Experience</span>
                </div>
                <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2">Empowering Creativity
                    <br> through
                </h2>
                <p class="description section-sm tmp-scroll-trigger tmp-fade-in animation-order-3">Business consulting
                    consultants provide expert advice and guida
                    businesses to help them improve their performance, efficiency, and organizational</p>
            </div>
            <h2 class="custom-title mb-32 tmp-scroll-trigger tmp-fade-in animation-order-1">Education <span><img
                        src="{{ asset('/') }}frontend/assets/images/custom-line/custom-line.png" alt="custom-line"></span>
            </h2>
            <div class="row g-5">
                      @foreach ($ressumes as $ressume)
                <div class="col-lg-6 col-sm-6">
                    <div class="education-experience-card tmponhover tmp-scroll-trigger tmp-fade-in animation-order-1">
                        <h4 class="edu-sub-title">{{ $ressume->edu_degree }}</h4>
                        <h2 class="edu-title">{{ $ressume->pass_year }}</h2>
                        <p class="edu-para">{{ $ressume->pass_recommand }}</p>
                    </div>
                </div>
             @endforeach
            </div>
            <div class="experiences-wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="experiences-wrap-left-content">
                            <h2 class="custom-title mb-32 tmp-scroll-trigger tmp-fade-in animation-order-1">Experiences <span><img
                            src="{{ asset('/') }}frontend/assets/images/custom-line/custom-line.png" alt="custom-line"></span></h2>
                            @foreach ($ressumes as $ressume)
                            <div class="experience-content tmp-scroll-trigger tmp-fade-in animation-order-1">
                                <p class="ex-subtitle">experience</p>
                                <h2 class="ex-name">{{ $ressume->job_organization }}</h2>
                                <h3 class="ex-title">{{ $ressume->job_designation }}</h3>
                                <p class="ex-para">{{ $ressume->job_summary }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="experiences-wrap-right-content">
                            <img class="tmp-scroll-trigger tmp-zoom-in animation-order-1" src="{{ asset($ressume->job_image) }}" alt="expert-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tpm Education Experience Area End -->

     <!-- Tpm Latest Portfolio Area Start -->
    <div class="latest-portfolio-area custom-column-grid tmp-section-gapTop" id="project">
        <div class="container">
            <div class="section-head mb--60">
                <div class="section-sub-title center-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                    <span class="subtitle">Latest Portfolio</span>
                </div>
                <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2">Transforming Ideas into
                    <br> Exceptional
                </h2>
                <p class="description section-sm tmp-scroll-trigger tmp-fade-in animation-order-3">Business consulting
                    consultants provide expert advice and guida
                    businesses to help them improve their performance, efficiency, and organizational</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="latest-portfolio-card tmp-hover-link tmp-scroll-trigger tmp-fade-in animation-order-1">
                        <div class="portfoli-card-img">
                            <div class="img-box v2">
                                <a class="tmp-scroll-trigger tmp-zoom-in animation-order-1" href="project-details.html">
                                    <img class="w-100" src="assets/images/latest-portfolio/portfoli-img-1.jpg" alt="Thumbnail">
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-card-content-wrap">
                            <div class="content-left">
                                <h3 class="portfolio-card-title"><a class="link" href="project-details.html">Digital
                                        Transformation Advisors</a></h3>
                                <p class="portfoli-card-para">Development Coaches</p>
                            </div>
                            <a href="project-details.html" class="tmp-arrow-icon-btn">
                                <div class="btn-inner">
                                    <i class="tmp-icon fa-solid fa-arrow-up-right"></i>
                                    <i class="tmp-icon-bottom fa-solid fa-arrow-up-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <div class="latest-portfolio-card tmp-hover-link tmp-scroll-trigger tmp-fade-in animation-order-2">
                        <div class="portfoli-card-img">
                            <div class="img-box v2">
                                <a class="tmp-scroll-trigger tmp-zoom-in animation-order-1" href="project-details.html">
                                    <img class="w-100" src="assets/images/latest-portfolio/portfoli-img-2.jpg" alt="Thumbnail">
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-card-content-wrap">
                            <div class="content-left">
                                <h3 class="portfolio-card-title"><a class="link" href="project-details.html">My work is driven by the belief that thoughtful.</a></h3>
                                <p class="portfoli-card-para">Development App</p>
                            </div>
                            <a href="project-details.html" class="tmp-arrow-icon-btn">
                                <div class="btn-inner">
                                    <i class="tmp-icon fa-solid fa-arrow-up-right"></i>
                                    <i class="tmp-icon-bottom fa-solid fa-arrow-up-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <div class="latest-portfolio-card tmp-hover-link tmp-scroll-trigger tmp-fade-in animation-order-3">
                        <div class="portfoli-card-img">
                            <div class="img-box v2">
                                <a class="tmp-scroll-trigger tmp-zoom-in animation-order-1" href="project-details.html">
                                    <img class="w-100" src="assets/images/latest-portfolio/portfoli-img-3.jpg" alt="Thumbnail">
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-card-content-wrap">
                            <div class="content-left">
                                <h3 class="portfolio-card-title"><a class="link" href="project-details.html">In this portfolio, you’ll find a curated selection</a></h3>
                                <p class="portfoli-card-para">Web Design</p>
                            </div>
                            <a href="project-details.html" class="tmp-arrow-icon-btn">
                                <div class="btn-inner">
                                    <i class="tmp-icon fa-solid fa-arrow-up-right"></i>
                                    <i class="tmp-icon-bottom fa-solid fa-arrow-up-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <div class="latest-portfolio-card tmp-hover-link tmp-scroll-trigger tmp-fade-in animation-order-4">
                        <div class="portfoli-card-img">
                            <div class="img-box v2">
                                <a class="tmp-scroll-trigger tmp-zoom-in animation-order-1" href="project-details.html">
                                    <img class="w-100" src="assets/images/latest-portfolio/portfoli-img-4.jpg" alt="Thumbnail">
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-card-content-wrap">
                            <div class="content-left">
                                <h3 class="portfolio-card-title"><a class="link" href="project-details.html">I’ve had the privilege of working with various</a></h3>
                                <p class="portfoli-card-para">App Development</p>
                            </div>
                            <a href="project-details.html" class="tmp-arrow-icon-btn">
                                <div class="btn-inner">
                                    <i class="tmp-icon fa-solid fa-arrow-up-right"></i>
                                    <i class="tmp-icon-bottom fa-solid fa-arrow-up-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tpm Latest Portfolio Area End -->

     <!-- Tpm My Skill Area Start -->
<section class="my-skill tmp-section-gapTop" id="skill">
    <div class="container">
        <div class="section-head text-align-left mb--50">
            <div class="section-sub-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                <span class="subtitle">My Skill</span>
            </div>
            <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2">
                Elevated Designs <br> the best Experiences
            </h2>
        </div>

        <div class="services-widget v1">
            @foreach ($skills as $skill)
                <div class="service-item tmp-scroll-trigger tmp-fade-in animation-order-{{ $loop->iteration }}">
                    <div class="my-skill-card">
                        <div class="card-icon">
                            {{ $loop->iteration }}
                        </div>
                        <div class="card-title text-left">
                            <h3 class="main-title">{{ $skill->skill_name }}</h3>
                        </div>
                        <p class="card-para justify-text">
                            {{ $skill->skill_description }}
                        </p>
                    </div>
                    <button class="service-link modal-popup"></button>
                </div>
            @endforeach
            <div class="active-bg wow fadeInUp mleave"></div>
        </div>
    </div>
</section>



<style>
    .justify-text {
        text-align: justify;
    }
</style>



<!-- JavaScript -->




    <!-- Tpm My Skill Area End -->


       <!-- Tpm Get In touch start -->
    <section class="get-in-touch-area tmp-section-gapTop" id="contact">
        <div class="container">
            <div class="contact-get-in-touch-wrap">
                <div class="get-in-touch-wrapper tmponhover">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-5">
                            <div class="section-head text-align-left">
                                <div class="section-sub-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                                    <span class="subtitle">GET IN TOUCH</span>
                                </div>
                                <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2">Elevate your brand with Me </h2>
                                <p class="description tmp-scroll-trigger tmp-fade-in animation-order-3">ished fact that a reader will be
                                    distrol acted bioiiy desig
                                    ished fact that a reader will acted ished fact that a reader will be distrol
                                    acted </p>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="contact-inner">
                                <div class="contact-form">
                                    <div id="form-messages" class="error"></div>
                                    <form class="tmp-dynamic-form" id="contact-form" method="POST" action="https://inversweb.com/product/html/reeni/mailer.php">
                                        <div class="contact-form-wrapper row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input class="input-field" name="name" id="contact-name" placeholder="Your Name" type="text" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input class="input-field" id="contact-phone" placeholder="Phone Number" type="number" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input class="input-field" id="contact-email" name="email" placeholder="Your Email" type="email" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input class="input-field" type="text" id="subject" name="subject" placeholder="Subject">
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <textarea class="input-field" placeholder="Your Message" name="message" id="contact-message" required></textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="tmp-button-here">
                                                    <button class="tmp-btn hover-icon-reverse radius-round w-100" name="submit" type="submit" id="submit">
                                                        <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Appointment Now</span>
                                                        <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                                        <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tpm Get In touch End -->

    @endsection