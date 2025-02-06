<form action="{{ route('policy.update', $policy->id) }}" method="post" id="edit-form" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="modal-body">

        <div class="form-group">
            <label for="policy_title" class="col-form-label pt-0">Policy Title<sup class="text-size-20 top-1">*</sup></label>
              <input type="text" class="form-control" id="policy_title" name="policy_title" value="{{ $policy->policy_title }}" required>
              <small id="emailHelp" class="form-text text-muted">This is your rent property</small>
          </div>

          <div class="col-md-12">
            <div class="mb-3">
                <label class="form-label">Policy Description</label>
                <textarea class="form-control textarea" name="policy_description" id="summernote" rows="4" >{{ $policy->policy_description }}</textarea> 
            </div>
        </div>

   
    <!-- Submit Button -->
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>