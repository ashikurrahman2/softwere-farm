<form action="{{route('news.update', $news->id)}}" method="post" id="add-form" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="modal-body">
      <div class="form-group">
        <label for="news_title" class="col-form-label pt-0">News Title<sup class="text-size-20 top-1">*</sup></label>
          <input type="text" class="form-control" id="news_title" name="news_title" value="{{ $news->news_title }}" required>
          <small id="emailHelp" class="form-text text-muted">News Title here</small>
      </div>

      <div class="form-group">
        <label for="news_image" class="col-form-label pt-0">Current news Image</label>
        <br>
        @if($news->news_image)
        <img src="{{ asset($news->news_image) }}" alt="rent image" class="img-fluid" style="max-width: 100px;">
        @else
        <p>No image uploaded.</p>
        @endif
    </div>

      <div class="col-md-12">
        <label for="news_image" class="col-form-label pt-0">News Image<sup class="text-size-20 top-1">*</sup></label>
        <input type="file" class="dropify" data-height="200" name="news_image" value="{{ $news->news_image }}" required />
        <small id="imageHelp" class="form-text text-muted">This is your news image</small>
    </div>

      <div class="form-group">
          <label for="news_date" class="col-form-label pt-0">News Date<sup class="text-size-20 top-1">*</sup></label>
            <input type="date" class="form-control" id="news_date" name="news_date" value="{{ $news->news_date }}" required>
            <small id="emailHelp" class="form-text text-muted">This is your news</small>
        </div>

        <div class="form-group">
          <label for="news_via" class="col-form-label pt-0">News Via<sup class="text-size-20 top-1">*</sup></label>
            <input type="text" class="form-control" id="news_via" name="news_via" value="{{ $news->news_via }}" required>
            <small id="emailHelp" class="form-text text-muted">Must be type character</small>
        </div>

        <div class="col-md-12">
          <div class="mb-3">
              <label class="form-label">News Description</label>
              <textarea class="form-control textarea" name="news_description" id="summernote" rows="4" >{{ $news->news_description }}</textarea> 
          </div>
      </div>
 
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary"> <span class="d-none"> loading ......</span> Update</button>
      </div>
    </div>
  </form>
   {{-- For file upload script --}}
   <script src="{{ asset('/') }}admin/assets/fileuploads/js/fileupload.js"></script>
   <script src="{{ asset('/') }}admin/assets/fileuploads/js/file-upload.js"></script>