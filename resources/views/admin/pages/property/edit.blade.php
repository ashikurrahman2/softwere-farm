<form action="{{ route('property.update', $property->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="property_title" class="col-form-label pt-0">Property Title<sup class="text-size-20 top-1">*</sup></label>
          <input type="text" class="form-control" id="property_title" name="property_title" value="{{ $property->property_title }}" required>
          <small id="emailHelp" class="form-text text-muted">This is your property</small>
      </div>

      <div class="col-md-12">
        <div class="mb-3">
            <label class="form-label">Property Description</label>
            <textarea class="form-control textarea" name="property_description" id="summernote" rows="4" >{{ $property->property_description }}</textarea> 
        </div>
    </div>

      <div class="form-group">
        <label for="property_image" class="col-form-label pt-0">Current property Logo</label>
        <br>
        @if($property->property_image)
        <img src="{{ asset($property->property_image) }}" alt="property Logo" class="img-fluid" style="max-width: 100px;">
        @else
        <p>No logo uploaded.</p>
        @endif
    </div>

    <div class="col-md-12">
        <label for="property_image" class="col-form-label pt-0">Property Image <sup class="text-size-20 top-1">*</sup></label>
        <input type="file" class="dropify" data-height="200" name="property_image" />
        <small id="imageHelp" class="form-text text-muted">Current Image: <img src="{{ asset($property->property_image) }}" class="img-fluid" style="max-width: 100px;"></small>
    </div>
     
      <div class="form-group">
          <label for="property_address" class="col-form-label pt-0">Property Address<sup class="text-size-20 top-1">*</sup></label>
            <input type="text" class="form-control" id="property_address" name="property_address" value="{{ $property->property_address }}" required>
            <small id="emailHelp" class="form-text text-muted">This is your Brand</small>
        </div>

        <div class="form-group">
          <label for="property_elements" class="col-form-label pt-0">Property Element<sup class="text-size-20 top-1">*</sup></label>
            <input type="text" class="form-control" id="property_elements" name="property_elements" value="{{ $property->property_elements }}" required>
            <small id="emailHelp" class="form-text text-muted">This is your property</small>
        </div>

        <div class="form-group">
          <label for="property_bath" class="col-form-label pt-0">Property Bath<sup class="text-size-20 top-1">*</sup></label>
            <input type="number" class="form-control" id="property_bath" name="property_bath" value="{{ $property->property_bath }}" required>
            <small id="emailHelp" class="form-text text-muted">Must be type number</small>
        </div>

        <div class="form-group">
          <label for="property_sqrt" class="col-form-label pt-0">Property Sqrt<sup class="text-size-20 top-1">*</sup></label>
            <input type="text" class="form-control" id="property_sqrt" name="property_sqrt"value="{{ $property->property_sqrt }}" required>
            <small id="emailHelp" class="form-text text-muted">This is character. If you want type number</small>
        </div>


        <div class="form-group">
          <label for="property_amount" class="col-form-label pt-0">Property Amount<sup class="text-size-20 top-1">*</sup></label>
            <input type="text" class="form-control" id="property_amount" name="property_amount" value="{{ $property->property_amount }}" required>
            <small id="emailHelp" class="form-text text-muted">This is your Property</small>
        </div>

        <div class="form-group">
          <label for="property_action" class="col-form-label pt-0">Property Action<sup class="text-size-20 top-1">*</sup></label>
            <input type="text" class="form-control" id="property_action" name="property_action" value="{{ $property->property_action }}" required>
            <small id="emailHelp" class="form-text text-muted">This is your Property</small>
        </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
  
  
  {{-- For file upload script --}}
  <script src="{{ asset('/') }}admin/assets/fileuploads/js/fileupload.js"></script>
  <script src="{{ asset('/') }}admin/assets/fileuploads/js/file-upload.js"></script>