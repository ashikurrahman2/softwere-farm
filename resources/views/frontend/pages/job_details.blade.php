@extends('layouts.app')

@section('title', 'Job Description')

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
                <li>Job Details</li>
            </ul>
        </div>
    </div>
    <div class="inner-shape">
        <img src="{{ asset('/') }}frontend/assets/images/shape/inner-shape.png" alt="Images">
    </div>
</div>
<!-- Inner Banner End -->
<div class="container mt-5">
    <h2 class="fw-bold">Overview</h2>
    <p class="text-muted">
      {{ $job->job_overview }}
    </p>

    <h3 class="fw-bold mt-4">Responsibilities:</h3>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{{ $job->job_responsibilities }}</li>
    </ul>
</div>

<div class="container mt-5">
    <h3 class="fw-bold">Requirements:</h3>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{{ $job->job_requirements }}</li>
    </ul>
   
    <h3 class="fw-bold mt-4">What we offer:</h3>
    
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{{ $job->offered }}</li>
    </ul>
</div>

<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title">Job Information</h3>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Location:</strong> {{ $position->job_location }}</li>
                <li class="list-group-item"><strong>Deadline:</strong> {{ $job->job_deadline }}</li>
                <li class="list-group-item"><strong>Position:</strong>{{ $position->job_title }}</li>
                <li class="list-group-item"><strong>Salary:</strong> {{ $job->job_salary }}</li>
            </ul>
        </div>
        

      
    </div>
      <!-- Apply Now Button -->
      {{-- <a href="#" class="apply-btn">Apply Now</a> --}}

      <!-- Apply Now Button -->
<button type="button" class="apply-btn" data-bs-toggle="modal" data-bs-target="#jobApplicationModal">
    Apply Now
</button>

<!-- Job Application Modal -->
<div class="modal fade" id="jobApplicationModal" tabindex="-1" aria-labelledby="jobApplicationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title text-light" id="jobApplicationModalLabel">Job Application</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('apply') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="resume" class="form-label">Upload Resume (PDF, DOC)</label>
                        <input type="file" class="form-control" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
                    </div>
                    <div class="mb-3">
                        <label for="cover_letter" class="form-label">Cover Letter</label>
                        <textarea class="form-control" id="cover_letter" name="cover_letter" rows="4" required></textarea>
                    </div>

                         <!-- Terms and Conditions Checkbox -->
                         <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="termsCheckbox">
                            <label class="form-check-label" for="termsCheckbox">
                                I agree to the <a href="{{ route('terms') }}">Terms and Conditions</a>
                            </label>
                        </div>
                           <!-- Error Message (Initially Hidden) -->
                    <div id="termsError" class="text-danger" style="display: none;">
                        ❌ আপনাকে অবশ্যই শর্তগুলোর সাথে সম্মত হতে হবে।
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit Application</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<style>
    .apply-btn {
    background: linear-gradient(45deg, #007bff, #0056b3); /* সুন্দর গ্রেডিয়েন্ট ব্যাকগ্রাউন্ড */
    color: white;
    font-size: 18px;
    font-weight: bold;
    padding: 12px 25px;
    border: none;
    width: 15%;
    margin-left: 41%;
    border-radius: 8px;
    transition: all 0.3s ease-in-out;
    /* box-shadow: 0px 4px 10px rgba(178, 253, 5, 0.2); */
}

</style>

<script>
    document.getElementById('submitBtn').addEventListener('click', function(event) {
        let termsCheckbox = document.getElementById('termsCheckbox');
        let termsError = document.getElementById('termsError');
        
        if (!termsCheckbox.checked) {
            event.preventDefault(); // Form submission বন্ধ করে দিচ্ছে
            termsError.style.display = 'block'; // Error message দেখাচ্ছে
        } else {
            termsError.style.display = 'none'; // Error message লুকিয়ে রাখছে
        }
    });
</script>
@endsection