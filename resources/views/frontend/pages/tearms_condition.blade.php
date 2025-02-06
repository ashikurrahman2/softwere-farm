@extends('layouts.app')

@section('title', 'Tearms & Conditions')

@section('front_content')
     <!-- Inner Banner -->
     <div class="inner-banner">
        <div class="container">
            <div class="inner-title text-center">
                <h3>Terms & Conditions</h3>
                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <i class='bx bx-chevrons-right'></i>
                    </li>
                    <li>Terms & Conditions</li>
                </ul>
            </div>
        </div>
        <div class="inner-shape">
            <img src="assets/images/shape/inner-shape.png" alt="Images">
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Terms Conditions Area -->
    <div class="terms-conditions-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>Techex Terms & Conditions</h2>
            </div>
            <div class="row pt-45">
                <div class="col-lg-12">
                    @foreach($terms as $term)
                    <div class="terms-conditions-img">
                        <img src="{{ asset($term->terms_image) }}" alt="Images">
                    </div>

                    <div class="single-content">
                        <h3>{{ $term->title }}</h3>
                        <p>
                           {{ $term->description }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Terms Conditions Area End -->
@endsection