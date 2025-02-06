@extends('layouts.app')

@section('title', 'Privacy Policy')

@section('front_content')
   <!-- Inner Banner -->
   <div class="inner-banner">
    <div class="container">
        <div class="inner-title text-center">
            <h3>Privacy Policy</h3>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <i class='bx bx-chevrons-right'></i>
                </li>
                <li>Privacy Policy</li>
            </ul>
        </div>
    </div>
    <div class="inner-shape">
        <img src="assets/images/shape/inner-shape.png" alt="Images">
    </div>
</div>
<!-- Inner Banner End -->

<!-- Privacy-Policy Area -->
<div class="privacy-policy-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color2">Privacy Policy</span>
            <h2>Techex Privacy Policy</h2>
        </div>
        <div class="row pt-45">
            <div class="col-lg-12">
                @foreach ($policies as $policy)
                <div class="single-content">
                    <h3>{{ $policy->policy_title }}</h3>
                    <p>
                       {{ $policy->policy_description }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Privacy-Policy Area End -->
@endsection