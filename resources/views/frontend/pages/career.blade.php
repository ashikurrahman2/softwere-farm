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
                    <li>Career Position</li>
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

    @foreach ($positions as $position)
    <div class="job-card">
        <div class="job-info">
            <div class="job-title">{{ $position->job_title }}</div>
            <div class="job-location">
                <i class="bi bi-geo-alt"></i> {{ $position->job_location }}, Bangladesh
            </div>
            <div class="job-experience">
                <i class="bi bi-lightning-charge"></i> {{ $position->job_experience }} Years Exp.
            </div>
        </div>
            {{-- Countdown Timer --}}
            <div class="countdown-timer" 
            data-deadline="{{ $position->deadline_timestamp }}"></div>
        <a href="{{ route('careerd',$position->id) }}" class="apply-btn">Apply Now</a>
    </div>
    @endforeach
{{-- Countdown Timer Script --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll('.countdown-timer').forEach(timer => {
            let deadline = timer.getAttribute('data-deadline');
            let applyBtn = timer.nextElementSibling; // "Apply Now" বাটন ধরার জন্য
    
            if (!deadline || deadline === "0") {
                timer.innerHTML = "<span style='color: red;'>No Deadline</span>";
                return;
            }
    
            deadline = parseInt(deadline) * 1000;
    
            function updateCountdown() {
                let now = new Date().getTime();
                let distance = deadline - now;
    
                if (distance < 0) {
                    timer.innerHTML = "<span style='color: red; font-weight: bold;'>00:00:00</span>";
    
                    if (applyBtn) {
                        applyBtn.style.backgroundColor = "gray"; // ব্যাকগ্রাউন্ড গ্রে করা
                        applyBtn.style.pointerEvents = "none"; // ক্লিক ডিজেবল করা
                        applyBtn.style.opacity = "0.6"; // হালকা দেখানোর জন্য
                        applyBtn.innerText = "Expired"; // টেক্সট পরিবর্তন করা
                    }
                    return;
                }
    
                let days = Math.floor(distance / (1000 * 60 * 60 * 24));
                let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                let seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
                timer.innerHTML = `<span style="color: green; font-weight: bold;">
                    ${days}d ${String(hours).padStart(2, '0')}h ${String(minutes).padStart(2, '0')}m ${String(seconds).padStart(2, '0')}s
                </span>`;
            }
    
            updateCountdown();
            setInterval(updateCountdown, 1000);
        });
    });
    </script>
    
</div>
@endsection