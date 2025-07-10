<form action="{{route('about.update', $about->id)}}" method="post" id="add-form">
    @csrf
    @method('PUT')
              <div class="form-group">
                  <label for="spacializedskill_name" class="col-form-label pt-0">Speciallized Skill Name<sup class="text-size-20 top-1">*</sup></label>
                    <input type="text" class="form-control" id="spacializedskill_name" name="spacializedskill_name" value="{{ $about->spacializedskill_name }}" required>
                    <small id="emailHelp" class="form-text text-muted">Company Title</small>
                </div>
          
             <div class="form-group">
            <label for="total_projects" class="col-form-label pt-0">Total Projects<sup class="text-size-20 top-1">*</sup></label>
              <input type="number" class="form-control" id="total_projects" name="total_projects" value="{{ $about->total_projects }}" required>
              <small id="emailHelp" class="form-text text-muted">Must be integer value(ex: 123)</small>
          </div>

 
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary"> <span class="d-none"> loading ......</span> Update</button>
      </div>
  </form>