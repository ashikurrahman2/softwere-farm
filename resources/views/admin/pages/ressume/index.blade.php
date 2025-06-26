@extends('layouts.admin')
@section('title', 'Ressume')
@section('admin_content')
<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-auto">
                        <div class="page-header-title">
                            <h5 class="mb-0">Ressume</h5>
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
              <h5>All ressume list here</h5>
            </div>
            <div class="card-body">
              <div class="dt-responsive table-responsive">
                <table id="" class="table table-striped table-bordered nowrap table-sm ytable">
                  <thead>
                    <tr>
                      <th>SL</th>
                       <th>Pass Year</th>
                        <th>Education Degree</th>
                        <th>Pass Recommand</th>
                        <th>Job Image</th>
                        <th>Job Organization</th>
                        <th>Designation</th>
                        <th>Job Summary</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Data populated by DataTables via AJAX -->
                  </tbody>
                  <tfoot>
                    <tr>
                          <th>SL</th>
                       <th>Pass Year</th>
                        <th>Education Degree</th>
                        <th>Pass Recommand</th>
                        <th>Job Image</th>
                        <th>Job Organization</th>
                        <th>Designation</th>
                        <th>Job Summary</th>
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
                <h5 class="modal-title h4" id="myLargeModalLabel">Add New FAQ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('ressume.store')}}" method="post" id="add-form" enctype="multipart/form-data">
              @csrf
              <div class="modal-body">
                <div class="form-group">
                  <label for="pass_year" class="col-form-label pt-0">Pass Year<sup class="text-size-20 top-1">*</sup></label>
                    <input type="text" class="form-control" id="pass_year" name="pass_year" required>
                    <small id="emailHelp" class="form-text text-muted">Company Title</small>
                </div>

                <div class="form-group">
                  <label for="edu_degree" class="col-form-label pt-0">Education Degree<sup class="text-size-20 top-1">*</sup></label>
                    <input type="text" class="form-control" id="edu_degree" name="edu_degree" required>
                    <small id="emailHelp" class="form-text text-muted">Company Title</small>
                </div>

             
            <div class="col-md-12">
                <div class="mb-3">
                    <label class="form-label">Pass Recommand</label>
                    <textarea class="form-control textarea" name="pass_recommand" id="summernote" rows="4" >{{old('pass_recommand')}}</textarea> 
                </div>
            </div>

             <div class="col-md-12">
                  <label for="job_image" class="col-form-label pt-0">Job Image</label>
                  <input type="file" class="dropify" data-height="200" name="job_image" />
                  <small id="imageHelp" class="form-text text-muted">This is your Job image</small>
              </div>

                <div class="form-group">
                  <label for="job_organization" class="col-form-label pt-0">Job Organization<sup class="text-size-20 top-1">*</sup></label>
                    <input type="text" class="form-control" id="job_organization" name="job_organization" required>
                    <small id="emailHelp" class="form-text text-muted">Company Title</small>
                </div>

                   <div class="form-group">
                  <label for="job_designation" class="col-form-label pt-0">Designation<sup class="text-size-20 top-1">*</sup></label>
                    <input type="text" class="form-control" id="job_designation" name="job_designation" required>
                    <small id="emailHelp" class="form-text text-muted">Company Title</small>
                </div>

                  <div class="col-md-12">
                <div class="mb-3">
                    <label class="form-label">Job Summary</label>
                    <textarea class="form-control textarea" name="job_summary" id="summernote1" rows="4" >{{old('job_summary')}}</textarea> 
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
              <h5 class="modal-title" id="editModalLabel">Edit Ressume</h5>
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
    $(function ressume(){
      var table=$('.ytable').DataTable({
        processing: true,
            serverSide: true,
            ajax: "{{ route('ressume.index') }}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'pass_year', name: 'pass_year' },
                { data: 'edu_degree', name: 'edu_degree' },
                { data: 'pass_recommand', name: 'pass_recommand' },
                { data: 'job_image', name: 'job_image' },
                { data: 'job_organization', name: 'job_organization' },
                { data: 'job_designation', name: 'job_designation' },
                { data: 'job_summary', name: 'job_summary' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
      });
    });
// For Edit About 
    $('body').on('click', '.edit', function() {
        let id = $(this).data('id');
        $.get("ressume/" + id + "/edit", function(data) {
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

  

 
  </script>
  
@endsection