<form action="{{route('banner.update', $banner->id)}}" method="post" id="add-form" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="modal-body">
      <div class="form-group">
        <label for="banner_author" class="col-form-label pt-0">Banner Author<sup class="text-size-20 top-1">*</sup></label>
          <input type="text" class="form-control" id="banner_author" name="banner_author" value="{{ $banner->banner_author }}" required>
          <small id="emailHelp" class="form-text text-muted">This is your rent property</small>
      </div>


      <div class="col-md-12">
        <div class="mb-3">
            <label class="form-label">Banner Description</label>
            <textarea class="form-control textarea" name="banner_description" id="summernote" rows="4" >{{$banner->banner_description}}</textarea> 
        </div>
    </div>

    
    <div class="form-group">
        <label for="banner_image" class="col-form-label pt-0">Current photo Logo</label>
        <br>
        @if($banner->banner_image)
        <img src="{{ asset($banner->banner_image) }}" alt="banner Logo" class="img-fluid" style="max-width: 100px;">
        @else
        <p>No logo uploaded.</p>
        @endif
    </div>


      <div class="col-md-12">
        <label for="banner_image" class="col-form-label pt-0">Banner Image<sup class="text-size-20 top-1">*</sup></label>
        <input type="file" class="dropify" data-height="200" name="banner_image" value="{{ $banner->banner_image }}" />
        <small id="imageHelp" class="form-text text-muted">This is your Banner image</small>
    </div>
   
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
  

   {{-- For file upload script --}}
   <script src="{{ asset('/') }}admin/assets/fileuploads/js/fileupload.js"></script>
   <script src="{{ asset('/') }}admin/assets/fileuploads/js/file-upload.js"></script>