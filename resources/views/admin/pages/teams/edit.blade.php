<form action="{{ route('team.update', $team->id) }}" method="post" id="edit-form" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="modal-body">
        <!-- Member Name -->
        <div class="form-group">
            <label for="member_name" class="col-form-label">Member Name<sup>*</sup></label>
            <input type="text" class="form-control" id="member_name" name="member_name" value="{{ $team->member_name }}" required>
        </div>

   
        <!-- Member Designation -->
        <div class="form-group">
            <label for="member_designation" class="col-form-label">Member Designation<sup>*</sup></label>
            <input type="text" class="form-control" id="member_designation" name="member_designation" value="{{ $team->member_designation }}" required>
        </div>

        <!-- Social Media Links -->
        <div class="form-group">
            <label for="social_face" class="col-form-label">Facebook Link</label>
            <input type="text" class="form-control" id="social_face" name="social_face" value="{{ $team->social_face }}">
        </div>
        <div class="form-group">
            <label for="social_linked" class="col-form-label">LinkedIn Link</label>
            <input type="text" class="form-control" id="social_linked" name="social_linked" value="{{ $team->social_linked }}">
        </div>

        <!-- Current Image -->
        <div class="form-group">
            <label for="member_image" class="col-form-label">Current Member Image</label>
            <br>
            @if($team->member_image)
                <img src="{{ asset($team->member_image) }}" alt="Member Image" class="img-fluid" style="max-width: 100px;">
            @else
                <p>No image uploaded.</p>
            @endif
        </div>

        <!-- Upload New Image -->
        <div class="form-group">
            <label for="member_image" class="col-form-label">Member Image</label>
            <input type="file" class="dropify" data-height="200" name="member_image" />
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
