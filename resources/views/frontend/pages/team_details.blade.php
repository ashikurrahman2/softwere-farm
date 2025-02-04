@extends('layouts.app')

@section('title', 'Team Details')

@section('front_content')
    <!-- Inner Banner -->
    <div class="inner-banner">
        <div class="container">
            <div class="inner-title text-center">
                <h3>Team Details</h3>
                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <i class='bx bx-chevrons-right'></i>
                    </li>
                    <li>Team Details</li>
                </ul>
            </div>
        </div>
        <div class="inner-shape">
            <img src="assets/images/shape/inner-shape.png" alt="Images">
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Team Details Area -->
    <div class="team-details-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="team-image">
                        <img src="{{ asset($team->member_image) }}" alt="{{ $team->member_name }}">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="team-content ml-25">
                        <h2>{{ $team->member_name }}</h2>
                        <h4>{{ $team->member_designation }}</h4>
                        <p><strong>Email:</strong> <a href="mailto:{{ $team->member_email }}">{{ $team->member_email }}</a></p>
                        <p><strong>Phone:</strong> <a href="tel:{{ $team->member_phone }}">{{ $team->member_phone }}</a></p>
                        <p><strong>Experience:</strong> {{ $team->member_experience }} years</p>
                        <p><strong>Address:</strong> {{ $team->member_address }}</p>

                        <h4>Biography</h4>
                        <p>{{ $team->biography }}</p>

                        <h4>Skills</h4>
                        <ul class="skills-list">
                            {{-- @foreach($team->skills as $skill)
                                <li>{{ $skill }}</li>
                            @endforeach --}}
                        </ul>

                        <h4>Social Links</h4>
                        <ul class="social-links">
                            <li><a href="{{ $team->social_face }}" target="_blank"><i class='bx bxl-facebook'></i> Facebook</a></li>
                            {{-- <li><a href="{{ $team->twitter }}" target="_blank"><i class='bx bxl-twitter'></i> Twitter</a></li> --}}
                            <li><a href="{{ $team->social_linked }}" target="_blank"><i class='bx bxl-linkedin'></i> LinkedIn</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Details Area End -->
@endsection
