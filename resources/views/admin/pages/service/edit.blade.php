<form action="{{ route('service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
          <div class="form-group">
                  <label for="service_title" class="col-form-label pt-0">Service Title<sup class="text-size-20 top-1">*</sup></label>
                    <input type="text" class="form-control" id="service_title" name="service_title" value="{{ $service->service_title }}" required>
                    <small id="emailHelp" class="form-text text-muted">This is your rent property</small>
                </div>


                <div class="col-md-12">
                  <div class="mb-3">
                      <label class="form-label">Service Subtitle</label>
                      <textarea class="form-control textarea" name="service_subtitle" id="summernote3" rows="4" >{{ $service->service_subtitle }}</textarea> 
                  </div>
              </div>
              

                  <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Service Details</label>
                        <textarea class="form-control textarea" name="service_details" id="summernote" rows="4" >{{ $service->service_details }}</textarea> 
                    </div>
                </div>

     {{-- Current Icon Preview --}}
<div class="form-group">
    <label for="service_icon" class="col-form-label pt-0">Current Service Icon</label><br>
    @if($service->service_icon)
        <img src="{{ asset($service->service_icon) }}" alt="Service Icon" class="img-fluid" style="max-width: 100px;">
    @else
        <p>No icon uploaded.</p>
    @endif
</div>

{{-- Icon Upload Input --}}
<div class="form-group">
    <label for="service_icon" class="col-form-label pt-0">Service Icon <sup class="text-danger">*</sup></label>
    <input type="file" class="dropify" data-height="200" name="service_icon">
           {{-- data-default-file="{{ asset($service->service_icon) }}"> --}}
    <small class="form-text text-muted">Upload a new icon if you want to replace the current one.</small>
</div>

{{-- Current Image Preview --}}
<div class="form-group">
    <label for="service_image" class="col-form-label pt-0">Current Service Image</label><br>
    @if($service->service_image)
        <img src="{{ asset($service->service_image) }}" alt="Service Image" class="img-fluid" style="max-width: 100px;">
    @else
        <p>No image uploaded.</p>
    @endif
</div>

{{-- Image Upload Input --}}
<div class="form-group">
    <label for="service_image" class="col-form-label pt-0">Service Image <sup class="text-danger">*</sup></label>
    <input type="file" class="dropify" data-height="200" name="service_image">
           {{-- data-default-file="{{ asset($service->service_image) }}"> --}}
    <small class="form-text text-muted">Upload a new image if you want to replace the current one.</small>
</div>

                 <div class="form-group">
                  <label for="service_category" class="col-form-label pt-0">Service Category<sup class="text-size-20 top-1">*</sup></label>
                    <input type="text" class="form-control" id="service_category" name="service_category" value="{{ $service->service_category }}" required>
                    <small id="emailHelp" class="form-text text-muted">This is your rent property</small>
                </div>

        <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
  {{-- For file upload script --}}
  <script src="{{ asset('/') }}admin/assets/fileuploads/js/fileupload.js"></script>
  <script src="{{ asset('/') }}admin/assets/fileuploads/js/file-upload.js"></script>
  