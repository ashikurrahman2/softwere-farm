@extends('layouts.admin')
@section('title','Skills')
@section('admin_content')
<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-auto">
                        <div class="page-header-title">
                            <h5 class="mb-0">Skills</h5>
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
              <h5>All skills list here</h5>
            </div>
            <div class="card-body">
              <div class="dt-responsive table-responsive">
                <table id="" class="table table-striped table-bordered nowrap table-sm ytable">
                  <thead>
                    <tr>
                        <th>SL</th>
                        <th>Skill Name</th>
                        <th>Skill Description</th>
                        <th>Skill Percentage</th>
                        <th>Skill Basename</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Data populated by DataTables via AJAX -->
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>SL</th>
                         <th>Skill Name</th>
                        <th>Skill Description</th>
                        <th>Skill Percentage</th>
                        <th>Skill Basename</th>
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
                <h5 class="modal-title h4" id="myLargeModalLabel">Add New Skill</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('skills.store')}}" method="post" id="add-form">
              @csrf
              <div class="modal-body">
                <div class="form-group">
                  <label for="skill_name" class="col-form-label pt-0">Skill Name<sup class="text-size-20 top-1">*</sup></label>
                    <input type="text" class="form-control" id="skill_name" name="skill_name" required>
                    <small id="emailHelp" class="form-text text-muted">This is your rent property</small>
                </div>

                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Skill Description</label>
                        <textarea class="form-control textarea" name="skill_description" id="summernote" rows="4" >{{old('skill_description')}}</textarea> 
                    </div>
                </div>

                   <div class="form-group">
                  <label for="skill_percentage" class="col-form-label pt-0">Skill Percentage<sup class="text-size-20 top-1">*</sup></label>
                    <input type="number" class="form-control" id="skill_percentage" name="skill_percentage" required>
                    <small id="emailHelp" class="form-text text-muted">write only numarical value(ex:0123)</small>
                </div>

                <div class="form-group">
                  <label for="skill_basename" class="col-form-label pt-0">Skill Basename<sup class="text-size-20 top-1">*</sup></label>
                    <input type="text" class="form-control" id="skill_basename" name="skill_basename" required>
                    <small id="emailHelp" class="form-text text-muted">This is your rent property</small>
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
              <h5 class="modal-title" id="editModalLabel">Edit Skills</h5>
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
    $(function skills(){
      var table=$('.ytable').DataTable({
        processing: true,
            serverSide: true,
            ajax: "{{ route('skills.index') }}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'skill_name', name: 'skill_name' },
                { data: 'skill_description', name: 'skill_description' },
                { data: 'skill_percentage', name: 'skill_percentage' },
                { data: 'skill_basename', name: 'skill_basename' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
      });
    });
// For Edit Service 
    $('body').on('click', '.edit', function() {
        let id = $(this).data('id');
        $.get("skills/" + id + "/edit", function(data) {
            $('.modal-body').html(data);
        });
    });

// Summernote script
   $(document).ready(function() {
         $('#summernote').summernote({
            height: 200,
            callbacks: {
                onChange: function(contents, $editable) {
                    
                     let textOnly = $('<div>').html(contents).text();
                     $('#summernote').val(textOnly);
                }
            }
         });
    });
  </script>
  
@endsection