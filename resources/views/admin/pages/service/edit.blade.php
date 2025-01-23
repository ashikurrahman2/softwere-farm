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
          <label class="form-label">Service Details</label>
          <textarea class="form-control textarea" name="service_details" id="summernote" rows="4" >{{ $service->service_details }}</textarea> 
      </div>
  </div>

      <div class="form-group">
        <label for="service_icon" class="col-form-label pt-0">Current Service Image</label>
        <br>
        @if($service->service_icon)
        <img src="{{ asset($service->service_icon) }}" alt="rent image" class="img-fluid" style="max-width: 100px;">
        @else
        <p>No logo uploaded.</p>
        @endif
    </div>

    <div class="col-md-12">
      <label for="service_icon" class="col-form-label pt-0">Service Icon<sup class="text-size-20 top-1">*</sup></label>
      <input type="file" class="dropify" data-height="200" name="service_icon" />
      <small id="imageHelp" class="form-text text-muted">Current Image: <img src="{{ asset($service->service_icon) }}" class="img-fluid" style="max-width: 100px;"></small>
  </div>

        <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
  {{-- For file upload script --}}
  <script src="{{ asset('/') }}admin/assets/fileuploads/js/fileupload.js"></script>
  <script src="{{ asset('/') }}admin/assets/fileuploads/js/file-upload.js"></script>
  