<form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="service_title" class="col-form-label pt-0">Product Title<sup class="text-size-20 top-1">*</sup></label>
          <input type="text" class="form-control" id="product_title" name="product_title" value="{{ $product->product_title }}" required>
          <small id="emailHelp" class="form-text text-muted">This is your product</small>
      </div>

      <div class="form-group">
        <label for="product_image" class="col-form-label pt-0">Current Product Image</label>
        <br>
        @if($product->product_image)
        <img src="{{ asset($product->product_image) }}" alt="product image" class="img-fluid" style="max-width: 100px;">
        @else
        <p>No logo uploaded.</p>
        @endif
    </div>

    <div class="col-md-12">
      <label for="product_image" class="col-form-label pt-0">Product Image<sup class="text-size-20 top-1">*</sup></label>
      <input type="file" class="dropify" data-height="200" name="product_image" />
      <small id="imageHelp" class="form-text text-muted">Current Image: <img src="{{ asset($product->product_image) }}" class="img-fluid" style="max-width: 100px;"></small>
  </div>

        <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
  {{-- For file upload script --}}
  <script src="{{ asset('/') }}admin/assets/fileuploads/js/fileupload.js"></script>
  <script src="{{ asset('/') }}admin/assets/fileuploads/js/file-upload.js"></script>