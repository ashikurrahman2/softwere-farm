@extends('layouts.admin')
@section('title', 'Job Position')
@section('admin_content')
<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-auto">
                        <div class="page-header-title">
                            <h5 class="mb-0">Job Position</h5>
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
              <h5>All Position list here</h5>
            </div>
            <div class="card-body">
              <div class="dt-responsive table-responsive">
                <table id="" class="table table-striped table-bordered nowrap table-sm ytable">
                  <thead>
                    <tr>
                      <th>SL</th>
                        <th>Job Title</th>
                        <th>Job Location</th>
                        <th>Job Experience</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Data populated by DataTables via AJAX -->
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>SL</th>
                        <th>Job Title</th>
                        <th>Job Location</th>
                        <th>Job Experience</th>
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
            <form action="{{route('position.store')}}" method="post" id="add-form">
              @csrf
              <div class="modal-body">
                <div class="form-group">
                  <label for="job_title" class="col-form-label pt-0">Job Title<sup class="text-size-20 top-1">*</sup></label>
                    <input type="text" class="form-control" id="job_title" name="job_title" required>
                    <small id="emailHelp" class="form-text text-muted">Company Title</small>
                </div>

                <div class="form-group">
                    <label for="job_location" class="col-form-label pt-0">Job Location<sup class="text-size-20 top-1">*</sup></label>
                      <input type="text" class="form-control" id="job_location" name="job_location" required>
                      <small id="emailHelp" class="form-text text-muted">Company Title</small>
                  </div>

                  <div class="form-group">
                    <label for="job_experience" class="col-form-label pt-0">Job Experience<sup class="text-size-20 top-1">*</sup></label>
                      <input type="text" class="form-control" id="job_experience" name="job_experience" required>
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
              <h5 class="modal-title" id="editModalLabel">Edit FAQ</h5>
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
    $(function faq(){
      var table=$('.ytable').DataTable({
        processing: true,
            serverSide: true,
            ajax: "{{ route('position.index') }}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'job_title', name: 'job_title' },
                { data: 'job_location', name: 'job_location' },
                { data: 'job_experience', name: 'job_experience' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
      });
    });
// For Edit About 
    $('body').on('click', '.edit', function() {
        let id = $(this).data('id');
        $.get("position/" + id + "/edit", function(data) {
            $('.modal-body').html(data);
        });
    });

  </script>
  
@endsection