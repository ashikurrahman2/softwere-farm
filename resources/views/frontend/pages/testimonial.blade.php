@extends('layouts.app')

@section('title', 'Testimonial')

@section('front_content')
      <!-- Inner Banner -->
      <div class="inner-banner">
        <div class="container">
            <div class="inner-title text-center">
                <h3>Testimonials</h3>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <i class='bx bx-chevrons-right'></i>
                    </li>
                    <li>Testimonials</li>
                </ul>
            </div>
        </div>
        <div class="inner-shape">
            <img src="assets/images/shape/inner-shape.png" alt="Images">
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Clients Area Two -->
    <section class="clients-area clients-area-two pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span class="sp-color2">Our Clients</span>
                <h2>Our Clients Feedback</h2>
            </div>

            <div class="clients-slider owl-carousel owl-theme pt-45">
                <div class="clients-content">
                    <div class="content">
                        <img src="{{ asset('/') }}frontend/assets/images/clients-img/clients-img1.jpg" alt="Images">
                        <i class='bx bxs-quote-alt-left'></i>
                        <h3>Jonthon Martin</h3>
                        <span>App Developer</span>
                    </div>
                    <p>
                        “Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis.
                        sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi loren accumsan ipsum velit.”
                    </p>
                </div>

                <div class="clients-content">
                    <div class="content">
                        <img src="{{ asset('/') }}frontend/assets/images/clients-img/clients-img2.jpg" alt="Images">
                        <i class='bx bxs-quote-alt-left'></i>
                        <h3>Alin Decros</h3>
                        <span>Graphic Designer</span>
                    </div>
                    <p>
                        “Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis.
                        sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi loren accumsan ipsum velit.”
                    </p>
                </div>

                <div class="clients-content">
                    <div class="content">
                        <img src="{{ asset ('/') }}frontend/assets/images/clients-img/clients-img3.jpg" alt="Images">
                        <i class='bx bxs-quote-alt-left'></i>
                        <h3>Elen Musk</h3>
                        <span>Web Developer</span>
                    </div>
                    <p>
                        “Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis.
                        sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi loren accumsan ipsum velit.”
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients Area Two End -->

    <!-- Brand Area -->
    <div class="brand-area-two ptb-100">
        <div class="container">
            <div class="brand-slider owl-carousel owl-theme">
                <div class="brand-item">
                    <img src="assets/images/brand-logo/brand-style1.png" alt="Images">
                </div>
                <div class="brand-item">
                    <img src="assets/images/brand-logo/brand-style2.png" alt="Images">
                </div>
                <div class="brand-item">
                    <img src="assets/images/brand-logo/brand-style3.png" alt="Images">
                </div>
                <div class="brand-item">
                    <img src="assets/images/brand-logo/brand-style4.png" alt="Images">
                </div>
                <div class="brand-item">
                    <img src="assets/images/brand-logo/brand-style5.png" alt="Images">
                </div>
                <div class="brand-item">
                    <img src="assets/images/brand-logo/brand-style3.png" alt="Images">
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Area End -->
@endsection