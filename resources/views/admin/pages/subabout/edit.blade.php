<form action="{{ route('subabout.update', $sub_about->id) }}" method="POST">
    @csrf
    @method('PUT')
              <div class="form-group">
            <label for="complete_projects" class="col-form-label pt-0">Complete Projects<sup class="text-size-20 top-1"></sup></label>
              <input type="text" class="form-control" id="complete_projects" name="complete_projects" value="{{ $sub_about->complete_projects }}">
              <small id="emailHelp" class="form-text text-muted">Company Title</small>
          </div>

            <div class="form-group">
            <label for="totalclient_reviews" class="col-form-label pt-0">Total Client Reviews<sup class="text-size-20 top-1"></sup></label>
              <input type="text" class="form-control" id="totalclient_reviews" name="totalclient_reviews" value="{{ $sub_about->totalclient_reviews }}">
              <small id="emailHelp" class="form-text text-muted">Company Title</small>
          </div>

            <div class="form-group">
            <label for="satisfied_clients" class="col-form-label pt-0">Satisfied Clients<sup class="text-size-20 top-1"></sup></label>
              <input type="text" class="form-control" id="satisfied_clients" name="satisfied_clients" value="{{ $sub_about->satisfied_clients }}">
              <small id="emailHelp" class="form-text text-muted">Company Title</small>
          </div>

              <div class="form-group">
            <label for="experience_year" class="col-form-label pt-0">Year of Experience<sup class="text-size-20 top-1"></sup></label>
              <input type="number" class="form-control" id="experience_year" name="experience_year" value="{{ $sub_about->experience_year }}">
              <small id="emailHelp" class="form-text text-muted">Must be integer value(ex: 123)</small>
          </div>

            <div class="col-md-12">
              <div class="mb-3">
                  <label class="form-label">Experience Subtitle</label>
                  <textarea class="form-control textarea" name="experiencesub_title" id="summernote" rows="4" >{{ $sub_about->experiencesub_title }}</textarea> 
              </div>
          </div>
 
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary"> <span class="d-none"> loading ......</span> Update</button>
      </div>
  </form>