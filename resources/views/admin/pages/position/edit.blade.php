<form action="{{ route('position.update', $position->id) }}" method="post" id="edit-form">
    @csrf
    @method('PUT')
    <div class="modal-body">
        <div class="form-group">
            <label for="job_title" class="col-form-label pt-0">Job Title<sup class="text-size-20 top-1">*</sup></label>
              <input type="text" class="form-control" id="job_title" name="job_title" value="{{ $position->job_title }}" required>
              <small id="emailHelp" class="form-text text-muted">Company Title</small>
          </div>

          <div class="form-group">
            <label for="job_location" class="col-form-label pt-0">Job Location<sup class="text-size-20 top-1">*</sup></label>
              <input type="text" class="form-control" id="job_location" name="job_location" value="{{ $position->job_location }}" required>
              <small id="emailHelp" class="form-text text-muted">Company Title</small>
          </div>

          <div class="form-group">
            <label for="job_experience" class="col-form-label pt-0">Job Experience<sup class="text-size-20 top-1">*</sup></label>
              <input type="text" class="form-control" id="job_experience" name="job_experience" value="{{ $position->job_experience }}" required>
              <small id="emailHelp" class="form-text text-muted">Company Title</small>
          </div>

    <!-- Submit Button -->
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>