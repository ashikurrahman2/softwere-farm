  <form action="{{route('skills.update', $skill->id)}}" method="post" id="add-form">
    @csrf
    @method('PUT')
              <div class="modal-body">
                <div class="form-group">
                  <label for="skill_name" class="col-form-label pt-0">Skill Name<sup class="text-size-20 top-1">*</sup></label>
                    <input type="text" class="form-control" id="skill_name" name="skill_name" value="{{ $skill->skill_name }}" required>
                    <small id="emailHelp" class="form-text text-muted">This is your rent property</small>
                </div>

                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Skill Description</label>
                        <textarea class="form-control textarea" name="skill_description" id="summernote" rows="4" >{{$skill->skill_description}}</textarea> 
                    </div>
                </div>

                   <div class="form-group">
                  <label for="skill_percentage" class="col-form-label pt-0">Skill Percentage<sup class="text-size-20 top-1">*</sup></label>
                    <input type="number" class="form-control" id="skill_percentage" name="skill_percentage" {{ $skill->skill_percentage }}>
                    <small id="emailHelp" class="form-text text-muted">write only numarical value(ex:0123)</small>
                </div>

                <div class="form-group">
                  <label for="skill_basename" class="col-form-label pt-0">Skill Basename<sup class="text-size-20 top-1">*</sup></label>
                    <input type="text" class="form-control" id="skill_basename" name="skill_basename" value="{{ $skill->skill_basename }}" required>
                    <small id="emailHelp" class="form-text text-muted">Write skill base name (ex: laravel, react, expressJs)</small>
                </div>
             
                 <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </div>
            </form>