@extends('layouts.app')

@section('title', 'Service')

@section('front_content')
   <!-- Inner Banner -->
   <div class="inner-banner">
    <div class="container">
        <div class="inner-title text-center">
            <h3>Services Style Two</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <i class='bx bx-chevrons-right'></i>
                </li>
                <li>Services Style Two</li>
            </ul>
        </div>
    </div>
    <div class="inner-shape">
        <img src="assets/images/shape/inner-shape.png" alt="Images">
    </div>
</div>
<!-- Inner Banner End -->

<!-- Services Style Area -->
<section class="services-style-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color2">Our Services</span>
            <h2>We Provide a Wide Variety of IT Services</h2>
            <p class="margin-auto">
                Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec
            </p>
        </div>
        <div class="row pt-45">
            @foreach($services as $service)
                <div class="col-lg-3 col-sm-6">
                    <div class="services-card services-style-bg">
                        {{-- <i class="{{ $service->icon }}"></i> <!-- আইকন ডাইনামিকভাবে লোড হবে --> --}}
                        <h3><a href="{{ route('servicedetail', $service->id) }}">{{ $service->service_title }}</a></h3>
                        <p>{{ \Illuminate\Support\Str::words($service->service_details, 100, '...') }}</p>
                        <a href="{{ route('servicedetail', $service->id) }}" class="learn-btn">Learn More <i class='bx bx-chevron-right'></i></a>
                    </div>
                </div>
            @endforeach

           {{-- Pagination --}}
           <div class="col-lg-12 col-md-12 text-center">
            <div class="pagination-area">
                <!-- Previous Page Link -->
                @if ($services->onFirstPage())
                    <span class="prev page-numbers disabled">
                        <i class='bx bx-left-arrow-alt'></i>
                    </span>
                @else
                    <a href="{{ $services->previousPageUrl() }}" class="prev page-numbers">
                        <i class='bx bx-left-arrow-alt'></i>
                    </a>
                @endif
        
                <!-- Page Numbers -->
                @foreach ($services->getUrlRange(1, $services->lastPage()) as $page => $url)
                    @if ($page == $services->currentPage())
                        <span class="page-numbers current" aria-current="page">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="page-numbers">{{ $page }}</a>
                    @endif
                @endforeach
        
                <!-- Next Page Link -->
                @if ($services->hasMorePages())
                    <a href="{{ $services->nextPageUrl() }}" class="next page-numbers">
                        <i class='bx bx-right-arrow-alt'></i>
                    </a>
                @else
                    <span class="next page-numbers disabled">
                        <i class='bx bx-right-arrow-alt'></i>
                    </span>
                @endif
            </div>
           </div>
        </div>
    </div>
</section>

<!-- Services Style Area End -->
@endsection