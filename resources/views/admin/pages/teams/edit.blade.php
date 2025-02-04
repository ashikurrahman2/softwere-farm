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

    <div class="form-group">
        <label for="member_email" class="col-form-label pt-0">Member Email<sup class="text-size-20 top-1">*</sup></label>
          <input type="email" class="form-control" id="member_email" name="member_email" value="{{ $team->member_email }}" required>
          <small id="emailHelp" class="form-text text-muted">This is your rent property</small>
      </div>

      <div class="form-group">
        <label for="member_phone" class="col-form-label pt-0">Member Phone<sup class="text-size-20 top-1">*</sup></label>
          <input type="text" class="form-control" id="member_phone" name="member_phone" value="{{ $team->member_phone }}" required>
          <small id="emailHelp" class="form-text text-muted">This is your rent property</small>
      </div>

      <div class="form-group">
        <label for="member_experience" class="col-form-label pt-0">Member Experience<sup class="text-size-20 top-1">*</sup></label>
          <input type="number" class="form-control" id="member_experience" name="member_experience" value="{{ $team->member_experience }}" required>
          <small id="emailHelp" class="form-text text-muted">This is your rent property</small>
      </div>

      <div class="form-group">
        <label for="member_address" class="col-form-label pt-0">Member Address<sup class="text-size-20 top-1">*</sup></label>
          <input type="text" class="form-control" id="member_address" name="member_address" value="{{ $team->member_address }}" required>
          <small id="emailHelp" class="form-text text-muted">This is your rent property</small>
      </div>

      <div class="col-md-12">
        <div class="mb-3">
            <label class="form-label">Biography</label>
            <textarea class="form-control textarea" name="biography" id="summernote" rows="4" >{{$team->biography}}</textarea> 
        </div>
    </div>

    <div class="form-group">
        <label class="col-form-label pt-0">Member Skills<sup class="text-size-20 top-1">*</sup></label>
        <div class="row">
            @php
                $skills = ["PHP", "Laravel", "React", "Node Js", "Express Js", "Vue.js", "JavaScript", "Flutter", "MongoDB"];
                $selected_skills = old('member_skills', explode(',', $team->member_skills ?? ''));
            @endphp
            
            @foreach($skills as $skill)
                <div class="col-md-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="skill_{{ $skill }}" name="member_skills[]" value="{{ $skill }}" 
                            {{ in_array($skill, $selected_skills) ? 'checked' : '' }}>
                        <label class="form-check-label" for="skill_{{ $skill }}">{{ $skill }}</label>
                    </div>
                </div>
            @endforeach
        </div>
        <small class="form-text text-muted">Select multiple skills by checking the boxes.</small>
    </div>
    

    <!-- Submit Button -->
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>

<!-- File Upload Scripts -->
<script src="{{ asset('/') }}admin/assets/fileuploads/js/fileupload.js"></script>
<script src="{{ asset('/') }}admin/assets/fileuploads/js/file-upload.js"></script>
