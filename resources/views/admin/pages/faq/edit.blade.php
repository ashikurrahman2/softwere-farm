<form action="{{route('faq.update', $faq->id)}}" method="post" id="add-form">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="question" class="col-form-label pt-0">Question<sup class="text-size-20 top-1">*</sup></label>
          <input type="text" class="form-control" id="question" name="question" value="{{ $faq->question }}" required>
          <small id="emailHelp" class="form-text text-muted">Company Title</small>
      </div>

   
  <div class="col-md-12">
      <div class="mb-3">
          <label class="form-label">Answer</label>
          <textarea class="form-control textarea" name="answer" id="summernote" rows="4" >{{$faq->answer}}</textarea> 
      </div>
  </div>
      
 
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary"> <span class="d-none"> loading ......</span> Update</button>
      </div>
  </form>