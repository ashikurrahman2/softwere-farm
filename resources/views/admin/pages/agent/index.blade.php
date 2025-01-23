@extends('layouts.admin')

@section('title', 'Agent')
@section('admin_content')
<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-auto">
                        <div class="page-header-title">
                            <h5 class="mb-0">Agent</h5>
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
              <h5>All agent list here</h5>
            </div>
            <div class="card-body">
              <div class="dt-responsive table-responsive">
                <table id="" class="table table-striped table-bordered nowrap table-sm ytable">
                  <thead>
                    <tr>
                        <th>SL</th>
                        <th>Agent Name</th>
                        <th>Agent Image</th>
                        <th>Agent Designation</th>
                        <th>Agent Facebook</th>
                        <th>Agent Linkedin</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Data populated by DataTables via AJAX -->
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>SL</th>
                        <th>Agent Name</th>
                        <th>Agent Image</th>
                        <th>Agent Designation</th>
                        <th>Agent Facebook</th>
                        <th>Agent Linkedin</th>
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
                <h5 class="modal-title h4" id="myLargeModalLabel">Add New Agent</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('agent.store')}}" method="post" id="add-form" enctype="multipart/form-data">
              @csrf
              <div class="modal-body">
                <div class="form-group">
                  <label for="agent_name" class="col-form-label pt-0">Agent Name<sup class="text-size-20 top-1">*</sup></label>
                    <input type="text" class="form-control" id="agent_name" name="agent_name" required>
                    <small id="emailHelp" class="form-text text-muted">News Title here</small>
                </div>
          
                <div class="col-md-12">
                  <label for="agent_image" class="col-form-label pt-0">Agent Image<sup class="text-size-20 top-1">*</sup></label>
                  <input type="file" class="dropify" data-height="200" name="agent_image"  required />
                  <small id="imageHelp" class="form-text text-muted">This is your news image</small>
              </div>

                <div class="form-group">
                    <label for="agent_designation" class="col-form-label pt-0">Agent Designation<sup class="text-size-20 top-1">*</sup></label>
                      <input type="text" class="form-control" id="agent_designation" name="agent_designation" required>
                      <small id="emailHelp" class="form-text text-muted">This is your news</small>
                  </div>

                  <div class="form-group">
                    <label for="agent_face" class="col-form-label pt-0">Agent Facebook<sup class="text-size-20 top-1">*</sup></label>
                      <input type="text" class="form-control" id="agent_face" name="agent_face" required>
                      <small id="emailHelp" class="form-text text-muted">Must be type character</small>
                  </div>

                  <div class="form-group">
                    <label for="agent_linked" class="col-form-label pt-0"> Agent Linkedin<sup class="text-size-20 top-1">*</sup></label>
                      <input type="text" class="form-control" id="agent_linked" name="agent_linked" required>
                      <small id="emailHelp" class="form-text text-muted">Must be type character</small>
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
              <h5 class="modal-title" id="editModalLabel">Edit Agent</h5>
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
    $(function agent(){
      var table=$('.ytable').DataTable({
        processing: true,
            serverSide: true,
            ajax: "{{ route('agent.index') }}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'agent_name', name: 'agent_name' },
                { data: 'agent_image', name: 'agent_image' },
                { data: 'agent_designation', name: 'agent_designation' },
                { data: 'agent_face', name: 'agent_face' },
                { data: 'agent_linked', name: 'agent_linked' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
      });
    });
// For Edit News 
    $('body').on('click', '.edit', function() {
        let id = $(this).data('id');
        $.get("agent/" + id + "/edit", function(data) {
            $('.modal-body').html(data);
        });
    });
  </script>
@endsection