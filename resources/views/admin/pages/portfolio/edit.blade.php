<form action="{{route('agent.update', $agent->id)}}" method="post" id="add-form" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="modal-body">
      <div class="form-group">
        <label for="agent_name" class="col-form-label pt-0">Agent Name<sup class="text-size-20 top-1">*</sup></label>
          <input type="text" class="form-control" id="agent_name" name="agent_name" value="{{ $agent->agent_name }}" required>
          <small id="emailHelp" class="form-text text-muted">News Title here</small>
      </div>

      <div class="form-group">
        <label for="agent_image" class="col-form-label pt-0">Current agent Image</label>
        <br>
        @if($agent->agent_image)
        <img src="{{ asset($agent->agent_image) }}" alt="agent image" class="img-fluid" style="max-width: 100px;">
        @else
        <p>No image uploaded.</p>
        @endif
    </div>

      <div class="col-md-12">
        <label for="agent_image" class="col-form-label pt-0">Agent Image<sup class="text-size-20 top-1">*</sup></label>
        <input type="file" class="dropify" data-height="200" name="agent_image" value="{{ $agent->agent_image }}" />
        <small id="imageHelp" class="form-text text-muted">This is your news image</small>
    </div>

      <div class="form-group">
          <label for="agent_designation" class="col-form-label pt-0">Agent Designation<sup class="text-size-20 top-1">*</sup></label>
            <input type="text" class="form-control" id="agent_designation" name="agent_designation" value="{{ $agent->agent_designation }}" required>
            <small id="emailHelp" class="form-text text-muted">This is your news</small>
        </div>

        <div class="form-group">
          <label for="agent_face" class="col-form-label pt-0">Agent Facebook<sup class="text-size-20 top-1">*</sup></label>
            <input type="text" class="form-control" id="agent_face" name="agent_face" value="{{ $agent->agent_face }}" required>
            <small id="emailHelp" class="form-text text-muted">Must be type character</small>
        </div>

        <div class="form-group">
          <label for="agent_linked" class="col-form-label pt-0"> Agent Linkedin<sup class="text-size-20 top-1">*</sup></label>
            <input type="text" class="form-control" id="agent_linked" name="agent_linked" value="{{ $agent->agent_linked }}" required>
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