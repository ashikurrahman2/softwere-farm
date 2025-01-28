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
                      <th>Service Title</th>
                      <th>Service Subtitle</th>
                      <th>Work Process</th>
                      <th>Service Benifit</th>
                      <th>Service Provide</th>
                      <th>Service Details</th>
                      <th>Service Icon</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Data populated by DataTables via AJAX -->
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>SL</th>
                      <th>Service Title</th>
                      <th>Service Subtitle</th>
                      <th>Work Process</th>
                      <th>Service Benifit</th>
                      <th>Service Provide</th>
                      <th>Service Details</th>
                      <th>Service Icon</th>
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
                <h5 class="modal-title h4" id="myLargeModalLabel">Add New Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('service.store')}}" method="post" id="add-form" enctype="multipart/form-data">
              @csrf
              <div class="modal-body">
                <div class="form-group">
                  <label for="service_title" class="col-form-label pt-0">Service Title<sup class="text-size-20 top-1">*</sup></label>
                    <input type="text" class="form-control" id="service_title" name="service_title" required>
                    <small id="emailHelp" class="form-text text-muted">This is your rent property</small>
                </div>


                <div class="col-md-12">
                  <div class="mb-3">
                      <label class="form-label">Service Subtitle</label>
                      <textarea class="form-control textarea" name="service_subtitle" id="summernote3" rows="4" >{{old('service_subtitle')}}</textarea> 
                  </div>
              </div>
              

                <div class="col-md-12">
                  <div class="mb-3">
                      <label class="form-label">Work Process</label>
                      <textarea class="form-control textarea" name="working_process" id="summernote1" rows="4" >{{old('working_process')}}</textarea> 
                  </div>
              </div>


              <div class="col-md-12">
                <div class="mb-3">
                    <label class="form-label">Service Benifit</label>
                    <textarea class="form-control textarea" name="service_benifit" id="summernote2" rows="4" >{{old('service_benifit')}}</textarea> 
                </div>
            </div>

            <div class="form-group">
              <label for="service_provide" class="col-form-label pt-0">Service Provide<sup class="text-size-20 top-1">*</sup></label>
                <input type="text" class="form-control" id="service_provide" name="service_provide" required>
                <small id="emailHelp" class="form-text text-muted">This is your rent property</small>
            </div>

                  <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Service Details</label>
                        <textarea class="form-control textarea" name="service_details" id="summernote" rows="4" >{{old('service_details')}}</textarea> 
                    </div>
                </div>

                <div class="col-md-12">
                  <label for="service_icon" class="col-form-label pt-0">Service Icon<sup class="text-size-20 top-1">*</sup></label>
                  <input type="file" class="dropify" data-height="200" name="service_icon"  required />
                  <small id="imageHelp" class="form-text text-muted">This is your Rent image</small>
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
              <h5 class="modal-title" id="editModalLabel">Edit Service</h5>
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
    $(function service(){
      var table=$('.ytable').DataTable({
        processing: true,
            serverSide: true,
            ajax: "{{ route('service.index') }}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'service_title', name: 'service_title' },
                { data: 'service_subtitle', name: 'service_subtitle' },
                { data: 'working_process', name: 'working_process' },
                { data: 'service_benifit', name: 'service_benifit' },
                { data: 'service_provide', name: 'service_provide' },
                { data: 'service_details', name: 'service_details' },
                { data: 'service_icon', name: 'service_icon' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
      });
    });
// For Edit Service 
    $('body').on('click', '.edit', function() {
        let id = $(this).data('id');
        $.get("service/" + id + "/edit", function(data) {
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