@extends('layouts.app')

@section('title', 'Career')

@section('front_content')

       <!-- Inner Banner -->
       <div class="inner-banner">
        <div class="container">
            <div class="inner-title text-center">
                <h3>Career</h3>
                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <i class='bx bx-chevrons-right'></i>
                    </li>
                    <li>Career Details</li>
                </ul>
            </div>
        </div>
        <div class="inner-shape">
            <img src="{{ asset('/') }}frontend/assets/images/shape/inner-shape.png" alt="Images">
        </div>
    </div>
    <!-- Inner Banner End -->
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
}
.job-card {
    background: #e1e4f9;
    padding: 20px;
    border-radius: 12px;
    margin-bottom: 15px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.job-info {
    display: flex;
    flex-direction: column;
}
.job-title {
    font-weight: bold;
    font-size: 20px;
    color: #18191a;
}
.job-location, .job-experience {
    font-size: 14px;
    color: #6c757d;
    display: flex;
    align-items: center;
}
.job-location i, .job-experience i {
    color: #6f42c1;
    margin-right: 5px;
}
.apply-btn {
    background: #1a3ede;
    color: #fff;
    border-radius: 8px;
    padding: 8px 16px;
    border: none;
    font-weight: bold;
}
.apply-btn:hover {
    background: #132bb7;
}
</style>
<div class="container mt-5">
    <h2 class="text-center mb-4">Open job Position</h2>

    <div class="job-card">
        <div class="job-info">
            <div class="job-title">Senior Software Engineer L1</div>
            <div class="job-location">
                <i class="bi bi-geo-alt"></i> Dhaka, Bangladesh
            </div>
            <div class="job-experience">
                <i class="bi bi-lightning-charge"></i> 3+ Years Exp.
            </div>
        </div>
        <a href="{{ route('careerd') }}" class="apply-btn">Apply Now</a>
    </div>

    <div class="job-card">
        <div class="job-info">
            <div class="job-title">SEO Specialist</div>
            <div class="job-location">
                <i class="bi bi-geo-alt"></i> Dhaka, Bangladesh
            </div>
            <div class="job-experience">
                <i class="bi bi-lightning-charge"></i> 2+ Years Exp.
            </div>
        </div>
        <a href="apply.html" class="apply-btn">Apply Now</a>

    </div>

</div>
@endsection