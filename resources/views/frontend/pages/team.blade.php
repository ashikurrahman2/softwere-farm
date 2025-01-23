@extends('layouts.app')

@section('title', 'Teams')

@section('front_content')
  <!-- Inner Banner -->
  <div class="inner-banner">
    <div class="container">
        <div class="inner-title text-center">
            <h3>Team</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <i class='bx bx-chevrons-right'></i>
                </li>
                <li>Team</li>
            </ul>
        </div>
    </div>
    <div class="inner-shape">
        <img src="assets/images/shape/inner-shape.png" alt="Images">
    </div>
</div>
<!-- Inner Banner End -->

<!-- Team Area -->
<div class="team-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color2">Our Team</span>
            <h2>Our Team Members</h2>
        </div>
        <div class="row pt-45">
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <img src="{{ asset('/') }}frontend/assets/images/team/team-img1.jpg" alt="Team Images">
                    <ul class="social-link">
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
                    <div class="content">
                        <h3>Adam Smith</h3>
                        <span>President & CEO</span>
                    </div>
                </div>
            </div>
{{-- 
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <img src="{{ asset('/') }}frontend/assets/images/team/team-img2.jpg" alt="Team Images">
                    <ul class="social-link">
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
                    <div class="content">
                        <h3>Max Angles</h3>
                        <span>Manager</span>
                    </div>
                </div>
            </div> --}}
{{-- 
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <img src="assets/images/team/team-img3.jpg" alt="Team Images">
                    <ul class="social-link">
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
                    <div class="content">
                        <h3>Park Anderson</h3>
                        <span>Sales Executive</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <img src="assets/images/team/team-img4.jpg" alt="Team Images">
                    <ul class="social-link">
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
                    <div class="content">
                        <h3>Tom Shumate</h3>
                        <span>Founder</span>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <img src="assets/images/team/team-img5.jpg" alt="Team Images">
                    <ul class="social-link">
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
                    <div class="content">
                        <h3>Michael Evens</h3>
                        <span>Team Leader</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <img src="assets/images/team/team-img6.jpg" alt="Team Images">
                    <ul class="social-link">
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
                    <div class="content">
                        <h3>Carrie Horton</h3>
                        <span>Sales Manager</span>
                    </div>
                </div>
            </div> --}}

            <div class="col-lg-12 col-md-12 text-center">
                <div class="pagination-area">
                    <a href="team.html" class="prev page-numbers">
                        <i class='bx bx-left-arrow-alt'></i>
                    </a>

                    <span class="page-numbers current" aria-current="page">1</span>
                    <a href="team.html" class="page-numbers">2</a>
                    <a href="team.html" class="page-numbers">3</a>
                    
                    <a href="team.html" class="next page-numbers">
                        <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team Area End -->
@endsection