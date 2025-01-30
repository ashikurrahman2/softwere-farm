@extends('layouts.admin')
@section('title','Service')
@section('admin_content')
<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-auto">
                        <div class="page-header-title">
                            <h5 class="mb-0">Services</h5>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <ul class="breadcrumb">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">+ Add New</button>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
      <div class="row">
        <!-- HTML5 Export Buttons table start -->
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header table-card-header">
              <h5>All Service list here</h5>
            </div>
            <div class="card-body">
              <div class="dt-responsive table-responsive">
                <table id="" class="table table-striped table-bordered nowrap table-sm ytable">
                  <thead>
                    <tr>
                      <th>SL</th>
                      <th>Case Title</th>
                      <th>Case Description</th>
                      <th>Project Image</th>
                      <th>Project Title</th>
                      <th>Project Description</th>
                      <th>Benifit Description</th>
                      <th>Benifit Image</th>
                      <th>Process Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Data populated by DataTables via AJAX -->
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>SL</th>
                        <th>Case Title</th>
                        <th>Case Description</th>
                        <th>Project Image</th>
                        <th>Project Title</th>
                        <th>Project Description</th>
                        <th>Benifit Description</th>
                        <th>Benifit Image</th>
                        <th>Process Description</th>
                        <th>Action</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div><!-- HTML5 Export Buttons end -->

      </div>
      <!-- [ Main Content ] end -->
    </div>
</div>
  <!-- Insert Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="myLargeModalLabel">Add New Case</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('case.store')}}" method="post" id="add-form" enctype="multipart/form-data">
              @csrf
              <div class="modal-body">
                <div class="form-group">
                  <label for="case_title" class="col-form-label pt-0">Case Title<sup class="text-size-20 top-1">*</sup></label>
                    <input type="text" class="form-control" id="case_title" name="case_title" required>
                    <small id="emailHelp" class="form-text text-muted">This is your rent property</small>
                </div>


                <div class="col-md-12">
                  <div class="mb-3">
                      <label class="form-label">Case Description</label>
                      <textarea class="form-control textarea" name="case_description" id="summernote3" rows="4" >{{old('case_description')}}</textarea> 
                  </div>
              </div>

              <div class="col-md-12">
                <label for="project_image" class="col-form-label pt-0">Project Image<sup class="text-size-20 top-1">*</sup></label>
                <input type="file" class="dropify" data-height="200" name="project_image" required />
                <small id="imageHelp" class="form-text text-muted">This is your Rent image</small>
            </div>

            <div class="form-group">
              <label for="project_title" class="col-form-label pt-0">Project Title<sup class="text-size-20 top-1">*</sup></label>
                <input type="text" class="form-control" id="project_title" name="project_title" required>
                <small id="emailHelp" class="form-text text-muted">This is your rent property</small>
            </div>
              

                <div class="col-md-12">
                  <div class="mb-3">
                      <label class="form-label">Project Description</label>
                      <textarea class="form-control textarea" name="project_description" id="summernote1" rows="4" >{{old('project_description')}}</textarea> 
                  </div>
              </div>


              <div class="col-md-12">
                <div class="mb-3">
                    <label class="form-label">Benifit Description</label>
                    <textarea class="form-control textarea" name="benifit_description" id="summernote2" rows="4" >{{old('benifit_description')}}</textarea> 
                </div>
            </div>

            <div class="col-md-12">
              <label for="benifit_image" class="col-form-label pt-0">Benifit Image<sup class="text-size-20 top-1">*</sup></label>
              <input type="file" class="dropify" data-height="200" name="benifit_image" required />
              <small id="imageHelp" class="form-text text-muted">This is your Rent image</small>
          </div>

                  <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Process Description</label>
                        <textarea class="form-control textarea" name="process_description" id="summernote" rows="4" >{{old('process_description')}}</textarea> 
                    </div>
                </div>
             
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary"> <span class="d-none"> loading ......</span> Submit</button>
                </div>
              </div>
            </form>
        </div>
    </div>              
</div>

 <!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="editModalLabel">Edit Case</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <!-- Edit form content will be loaded here -->
          </div>
      </div>
  </div>
</div>
  <!-- Script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(function case(){
      var table=$('.ytable').DataTable({
        processing: true,
            serverSide: true,
            ajax: "{{ route('case.index') }}",
            columns: [
         
  { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'case_title', name: 'case_title' },
                { data: 'case_description', name: 'case_description' },
                { data: 'project_image', name: 'project_image' },
                { data: 'project_title', name: 'project_title' },
                { data: 'project_description', name: 'project_description' },
                { data: 'benifit_description', name: 'benifit_description' },
                { data: 'benifit_image', name: 'benifit_image' },
                { data: 'process_description', name: 'process_description' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
      });
    });
// For Edit Service 
    $('body').on('click', '.edit', function() {
        let id = $(this).data('id');
        $.get("case/" + id + "/edit", function(data) {
            $('.modal-body').html(data);
        });
    });

// Summernote script
  $(document).ready(function() {
        $('#summernote').summernote({
            height: 200,
            callbacks: {
                onChange: function(contents, $editable) {
                    // Strip HTML tags for plain text
                    let textOnly = $('<div>').html(contents).text();
                    $('#summernote').val(textOnly);
                }
            }
        });
    });

    // Summernote script
  $(document).ready(function() {
        $('#summernote1').summernote({
            height: 200,
            callbacks: {
                onChange: function(contents, $editable) {
                    // Strip HTML tags for plain text
                    let textOnly = $('<div>').html(contents).text();
                    $('#summernote1').val(textOnly);
                }
            }
        });
    });


        // Summernote script
  $(document).ready(function() {
        $('#summernote2').summernote({
            height: 200,
            callbacks: {
                onChange: function(contents, $editable) {
                    // Strip HTML tags for plain text
                    let textOnly = $('<div>').html(contents).text();
                    $('#summernote2').val(textOnly);
                }
            }
        });
    });


          // Summernote script
  $(document).ready(function() {
        $('#summernote3').summernote({
            height: 200,
            callbacks: {
                onChange: function(contents, $editable) {
                    // Strip HTML tags for plain text
                    let textOnly = $('<div>').html(contents).text();
                    $('#summernote3').val(textOnly);
                }
            }
        });
    });
  </script>
  
@endsection