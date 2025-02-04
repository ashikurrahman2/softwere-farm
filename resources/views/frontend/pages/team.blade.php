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
                    <a href="/">Home</a>
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
        <div class="container">
            <div class="row pt-45">
                @foreach($teams as $team)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="team-card">
                            <!-- Team Member's Image -->
                            <a href="{{ route('teamdetail', $team->id) }}">
                            <img src="{{ asset($team->member_image) }}" alt="{{ $team->member_name }}">
                            </a>
                            <!-- Social Links -->
                            <ul class="social-link">
                                @if($team->social_face)
                                    <li>
                                        <a href="{{ $team->social_face }}" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                @endif
                                @if($team->social_linked)
                                    <li>
                                        <a href="{{ $team->social_linked }}" target="_blank">
                                            <i class='bx bxl-linkedin-square'></i>
                                        </a>
                                    </li>
                                @endif
                            </ul>
        
                            <!-- Team Member's Content -->
                            <div class="content">
                                <a href="{{ route('teamdetail', $team->id) }}">
                                <h3>{{ $team->member_name }}</h3>
                               
                                <span>{{ $team->member_designation }}</span>
                            </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- Pagination --}}
         <div class="col-lg-12 col-md-12 text-center">
            <div class="pagination-area">
                <!-- Previous Page Link -->
                @if ($teams->onFirstPage())
                    <span class="prev page-numbers disabled">
                        <i class='bx bx-left-arrow-alt'></i>
                    </span>
                @else
                    <a href="{{ $teams->previousPageUrl() }}" class="prev page-numbers">
                        <i class='bx bx-left-arrow-alt'></i>
                    </a>
                @endif
        
                <!-- Page Numbers -->
                @foreach ($teams->getUrlRange(1, $teams->lastPage()) as $page => $url)
                    @if ($page == $teams->currentPage())
                        <span class="page-numbers current" aria-current="page">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="page-numbers">{{ $page }}</a>
                    @endif
                @endforeach
        
                <!-- Next Page Link -->
                @if ($teams->hasMorePages())
                    <a href="{{ $teams->nextPageUrl() }}" class="next page-numbers">
                        <i class='bx bx-right-arrow-alt'></i>
                    </a>
                @else
                    <span class="next page-numbers disabled">
                        <i class='bx bx-right-arrow-alt'></i>
                    </span>
                @endif
            </div>
        </div>
        
<!-- Team Area End -->
@endsection