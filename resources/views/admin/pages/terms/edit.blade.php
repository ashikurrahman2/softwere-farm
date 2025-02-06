<form action="{{ route('terms.update', $terms->id) }}" method="post" id="edit-form" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="modal-body">
        <!-- Current Image -->
        <div class="form-group">
            <label for="terms_image" class="col-form-label">Current Terms Image</label>
            <br>
            @if($terms->terms_image)
                <img src="{{ asset($terms->terms_image) }}" alt="terms_image Image" class="img-fluid" style="max-width: 100px;">
            @else
                <p>No image uploaded.</p>
            @endif
        </div>

        <!-- Upload New Image -->
        <div class="form-group">
            <label for="terms_image" class="col-form-label">Terms Image</label>
            <input type="file" class="dropify" data-height="200" name="terms_image" value="{{ $terms->terms_image }}" />
        </div>
    </div>

    <div class="form-group">
        <label for="title" class="col-form-label pt-0">Terms Title<sup class="text-size-20 top-1">*</sup></label>
          <input type="text" class="form-control" id="title" name="title" value="{{ $terms->title }}" required>
          <small id="emailHelp" class="form-text text-muted">This is your rent property</small>
      </div>

     
      <div class="col-md-12">
        <div class="mb-3">
            <label class="form-label">Terms Description</label>
            <textarea class="form-control textarea" name="description" id="summernote" rows="4" >{{$terms->description}}</textarea> 
        </div>
    </div>

   
    <!-- Submit Button -->
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>

<!-- File Upload Scripts -->
<script src="{{ asset('/') }}admin/assets/fileuploads/js/fileupload.js"></script>
<script src="{{ asset('/') }}admin/assets/fileuploads/js/file-upload.js"></script>
