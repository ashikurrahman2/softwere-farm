<form action="{{route('partner.update', $partner->id)}}" method="post" id="add-form" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="modal-body">
        
      <div class="form-group">
        <label for="partner_logo" class="col-form-label pt-0">Current partner Image</label>
        <br>
        @if($partner->partner_logo)
        <img src="{{ asset($partner->partner_logo) }}" alt="agent image" class="img-fluid" style="max-width: 100px;">
        @else
        <p>No image uploaded.</p>
        @endif
    </div>
      <div class="col-md-12">
        <label for="partner_logo" class="col-form-label pt-0">Partner Logo<sup class="text-size-20 top-1">*</sup></label>
        <input type="file" class="dropify" data-height="200" name="partner_logo" value="{{ $partner->partner_logo }}"  required />
        <small id="imageHelp" class="form-text text-muted">This is your partner image</small>
    </div>

    <div class="col-md-12">
      <div class="mb-3">
          <label class="form-label">Partner Collaborations</label>
          <textarea class="form-control textarea" name="partner_collaborations" id="summernote" rows="4" >{{ $partner->partner_collaborations }}</textarea> 
      </div>
  </div>
 
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary"> <span class="d-none"> loading ......</span> Submit</button>
      </div>
    </div>
  </form>

  
   {{-- For file upload script --}}
   <script src="{{ asset('/') }}admin/assets/fileuploads/js/fileupload.js"></script>
   <script src="{{ asset('/') }}admin/assets/fileuploads/js/file-upload.js"></script>