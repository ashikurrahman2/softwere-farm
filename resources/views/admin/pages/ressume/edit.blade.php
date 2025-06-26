<form action="{{route('ressume.update', $ressume->id)}}" method="post" id="add-form" enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <div class="form-group">
                  <label for="pass_year" class="col-form-label pt-0">Pass Year<sup class="text-size-20 top-1">*</sup></label>
                    <input type="text" class="form-control" id="pass_year" name="pass_year" value="{{ $ressume->pass_year }}" required>
                    <small id="emailHelp" class="form-text text-muted">Company Title</small>
                </div>

                <div class="form-group">
                  <label for="edu_degree" class="col-form-label pt-0">Education Degree<sup class="text-size-20 top-1">*</sup></label>
                    <input type="text" class="form-control" id="edu_degree" name="edu_degree" value="{{ $ressume->edu_degree }}" required>
                    <small id="emailHelp" class="form-text text-muted">Company Title</small>
                </div>

             
            <div class="col-md-12">
                <div class="mb-3">
                    <label class="form-label">Pass Recommand</label>
                    <textarea class="form-control textarea" name="pass_recommand" id="summernote" rows="4" >{{ $ressume->pass_recommand }}</textarea> 
                </div>
            </div>

              <div class="form-group">
        <label for="job_image" class="col-form-label pt-0">Current photo Logo</label>
        <br>
        @if($ressume->job_image)
        <img src="{{ asset($ressume->job_image) }}" alt="ressume Logo" class="img-fluid" style="max-width: 100px;">
        @else
        <p>No logo uploaded.</p>
        @endif
    </div>

             <div class="col-md-12">
                  <label for="job_image" class="col-form-label pt-0">Job Image</label>
                  <input type="file" class="dropify" data-height="200" name="job_image" value="{{ $ressume->job_image }}" />
                  <small id="imageHelp" class="form-text text-muted">This is your Job image</small>
              </div>

                <div class="form-group">
                  <label for="job_organization" class="col-form-label pt-0">Job Organization<sup class="text-size-20 top-1">*</sup></label>
                    <input type="text" class="form-control" id="job_organization" name="job_organization" value="{{ $ressume->job_organization }}" required>
                    <small id="emailHelp" class="form-text text-muted">Company Title</small>
                </div>

                   <div class="form-group">
                  <label for="job_designation" class="col-form-label pt-0">Designation<sup class="text-size-20 top-1">*</sup></label>
                    <input type="text" class="form-control" id="job_designation" name="job_designation" value="{{ $ressume->job_designation }}" required>
                    <small id="emailHelp" class="form-text text-muted">Company Title</small>
                </div>

                  <div class="col-md-12">
                <div class="mb-3">
                    <label class="form-label">Job Summary</label>
                    <textarea class="form-control textarea" name="job_summary" id="summernote1" rows="4" >{{ $ressume->job_summary }}</textarea> 
                </div>
            </div>
      
 
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary"> <span class="d-none"> loading ......</span> Update</button>
      </div>
  </form>

   {{-- For file upload script --}}
   <script src="{{ asset('/') }}admin/assets/fileuploads/js/fileupload.js"></script>
   <script src="{{ asset('/') }}admin/assets/fileuploads/js/file-upload.js"></script>