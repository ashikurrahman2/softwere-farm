<form action="{{ route('details.update', $job->id) }}" method="post" id="add-form">
    @csrf
    @method('PUT')

    <div class="col-md-12">
        <div class="mb-3">
            <label class="form-label">Job Overview</label>
            <textarea class="form-control textarea" name="job_overview" id="summernote" rows="4">{{ old('job_overview', $job->job_overview) }}</textarea>
        </div>
    </div>

    <div class="col-md-12">
        <div class="mb-3">
            <label class="form-label">Job Responsibility</label>
            <textarea class="form-control textarea" name="job_responsibilities" id="summernote1" rows="4">{{ old('job_responsibilities', $job->job_responsibilities) }}</textarea>
        </div>
    </div>

    <div class="col-md-12">
        <div class="mb-3">
            <label class="form-label">Job Requirements</label>
            <textarea class="form-control textarea" name="job_requirements" id="summernote2" rows="4">{{ old('job_requirements', $job->job_requirements) }}</textarea>
        </div>
    </div>

    <div class="col-md-12">
        <div class="mb-3">
            <label class="form-label">Job Offer</label>
            <textarea class="form-control textarea" name="offered" id="summernote3" rows="4">{{ old('offered', $job->offered) }}</textarea>
        </div>
    </div>

    <div class="form-group">
        <label for="job_deadline" class="col-form-label pt-0">Job Deadline<sup class="text-size-20 top-1">*</sup></label>
        <input type="date" class="form-control" id="job_deadline" name="job_deadline" value="{{ old('job_deadline', $job->job_deadline) }}" required>
    </div>

    <div class="form-group">
        <label for="job_salary" class="col-form-label pt-0">Job Salary<sup class="text-size-20 top-1">*</sup></label>
        <input type="text" class="form-control" id="job_salary" name="job_salary" value="{{ old('job_salary', $job->job_salary) }}" required>
    </div>

    <div class="modal-footer">
        <button type="submit" class="btn btn-primary"> Update</button>
    </div>
</form>
