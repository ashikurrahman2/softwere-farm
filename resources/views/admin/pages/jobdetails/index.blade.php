@extends('layouts.admin')
@section('title', 'Job Details')
@section('admin_content')
<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-auto">
                        <div class="page-header-title">
                            <h5 class="mb-0">Job Details</h5>
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
              <h5>All Job Details list here</h5>
            </div>
            <div class="card-body">
              <div class="dt-responsive table-responsive">
                <table id="" class="table table-striped table-bordered nowrap table-sm ytable">
                  <thead>
                    <tr>
                      <th>SL</th>
                        <th>Job Overview</th>
                        <th>Job Responsibility</th>
                        <th>Job Requirements</th>
                        <th>Job Offer</th>
                        <th>Job Deadline</th>
                        <th>Job Salary</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Data populated by DataTables via AJAX -->
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>SL</th>
                        <th>Job Overview</th>
                        <th>Job Responsibility</th>
                        <th>Job Requirements</th>
                        <th>Job Offer</th>
                        <th>Job Deadline</th>
                        <th>Job Salary</th>
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
                <h5 class="modal-title h4" id="myLargeModalLabel">Add New Position</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('details.store')}}" method="post" id="add-form">
              @csrf
              <div class="modal-body">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Job Overview</label>
                        <textarea class="form-control textarea" name="job_overview" id="summernote" rows="4" >{{old('job_overview')}}</textarea> 
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Job Responsibility</label>
                        <textarea class="form-control textarea" name="job_responsibilities" id="summernote1" rows="4" >{{old('job_responsibilities')}}</textarea> 
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Job Requirements</label>
                        <textarea class="form-control textarea" name="job_requirements" id="summernote2" rows="4" >{{old('job_requirements')}}</textarea> 
                    </div>
                </div>

                <div class="col-md-12">
                  <div class="mb-3">
                      <label class="form-label">Job Offer</label>
                      <textarea class="form-control textarea" name="offered" id="summernote3" rows="4" >{{old('offered')}}</textarea> 
                  </div>
              </div>

                  <div class="form-group">
                    <label for="job_deadline" class="col-form-label pt-0">Job Deadline<sup class="text-size-20 top-1">*</sup></label>
                      <input type="date" class="form-control" id="job_deadline" name="job_deadline" required>
                      <small id="emailHelp" class="form-text text-muted">Company Title</small>
                  </div>

                  <div class="form-group">
                    <label for="job_salary" class="col-form-label pt-0">Job Salary<sup class="text-size-20 top-1">*</sup></label>
                      <input type="text" class="form-control" id="job_salary" name="job_salary" required>
                      <small id="emailHelp" class="form-text text-muted">Company Title</small>
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
              <h5 class="modal-title" id="editModalLabel">Edit Job Details</h5>
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
    $(function details(){
      var table=$('.ytable').DataTable({
        processing: true,
            serverSide: true,
            ajax: "{{ route('details.index') }}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'job_overview', name: 'job_overview' },
                { data: 'job_responsibilities', name: 'job_responsibilities' },
                { data: 'job_requirements', name: 'job_requirements' },
                { data: 'offered', name: 'offered' },
                { data: 'job_deadline', name: 'job_deadline' },
                { data: 'job_salary', name: 'job_salary' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
      });
    });
// For Edit About 
    $('body').on('click', '.edit', function() {
        let id = $(this).data('id');
        $.get("details/" + id + "/edit", function(data) {
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