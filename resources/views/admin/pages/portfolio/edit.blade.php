<form action="{{route('portfolio.update', $portfolio->id)}}" method="post" id="add-form" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="modal-body">
         <div class="form-group">
                  <label for="title" class="col-form-label pt-0">Portfolio Name<sup class="text-size-20 top-1">*</sup></label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $portfolio->title }}" required>
                    <small id="emailHelp" class="form-text text-muted">Portfolio Title here</small>
                </div>

      <div class="form-group">
        <label for="portfolio_image" class="col-form-label pt-0">Current portfolio Image</label>
        <br>
        @if($portfolio->portfolio_image)
        <img src="{{ asset($portfolio->portfolio_image) }}" alt="agent image" class="img-fluid" style="max-width: 100px;">
        @else
        <p>No image uploaded.</p>
        @endif
    </div>

     <div class="col-md-12">
                  <label for="portfolio_image" class="col-form-label pt-0">Portfolio Image<sup class="text-size-20 top-1">*</sup></label>
                  <input type="file" class="dropify" data-height="200" name="portfolio_image" value="{{ $portfolio->portfolio_image }}" />
                  <small id="imageHelp" class="form-text text-muted">This is your portfolio image</small>
              </div>

                  <div class="form-group">
                    <label for="external_link" class="col-form-label pt-0">Portfolio Link<sup class="text-size-20 top-1">*</sup></label>
                      <input type="text" class="form-control" id="external_link" name="external_link" value="{{ $portfolio->external_link }}" required>
                      <small id="emailHelp" class="form-text text-muted">Any web development project</small>
                  </div>

                 <div class="form-group">
                    <label for="category" class="col-form-label pt-0">Portfolio Category<sup class="text-size-20 top-1">*</sup></label>
                      <input type="text" class="form-control" id="category" name="category" value="{{ $portfolio->category }}" required>
                      <small id="emailHelp" class="form-text text-muted">Must be type character</small>
                  </div>
 
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary"> <span class="d-none"> loading ......</span> Update</button>
      </div>
    </div>
  </form>

   {{-- For file upload script --}}
   <script src="{{ asset('/') }}admin/assets/fileuploads/js/fileupload.js"></script>
   <script src="{{ asset('/') }}admin/assets/fileuploads/js/file-upload.js"></script>