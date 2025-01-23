@extends('layouts.admin')

@section('title', 'News')
@section('admin_content')
<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-auto">
                        <div class="page-header-title">
                            <h5 class="mb-0">News</h5>
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
              <h5>All News list here</h5>
            </div>
            <div class="card-body">
              <div class="dt-responsive table-responsive">
                <table id="" class="table table-striped table-bordered nowrap table-sm ytable">
                  <thead>
                    <tr>
                        <th>SL</th>
                        <th>News Title</th>
                        <th>News Image</th>
                        <th>News Date</th>
                        <th>News Via</th>
                        <th>News Description</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Data populated by DataTables via AJAX -->
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>SL</th>
                        <th>News Title</th>
                        <th>News Image</th>
                        <th>News Date</th>
                        <th>News Via</th>
                        <th>News Description</th>
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
                <h5 class="modal-title h4" id="myLargeModalLabel">Add New News</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('news.store')}}" method="post" id="add-form" enctype="multipart/form-data">
              @csrf
              <div class="modal-body">
                <div class="form-group">
                  <label for="news_title" class="col-form-label pt-0">News Title<sup class="text-size-20 top-1">*</sup></label>
                    <input type="text" class="form-control" id="news_title" name="news_title" required>
                    <small id="emailHelp" class="form-text text-muted">News Title here</small>
                </div>
          
                <div class="col-md-12">
                  <label for="news_image" class="col-form-label pt-0">News Image<sup class="text-size-20 top-1">*</sup></label>
                  <input type="file" class="dropify" data-height="200" name="news_image"  required />
                  <small id="imageHelp" class="form-text text-muted">This is your news image</small>
              </div>

                <div class="form-group">
                    <label for="news_date" class="col-form-label pt-0">News Date<sup class="text-size-20 top-1">*</sup></label>
                      <input type="date" class="form-control" id="news_date" name="news_date" required>
                      <small id="emailHelp" class="form-text text-muted">This is your news</small>
                  </div>

                  <div class="form-group">
                    <label for="news_via" class="col-form-label pt-0">News Via<sup class="text-size-20 top-1">*</sup></label>
                      <input type="text" class="form-control" id="news_via" name="news_via" required>
                      <small id="emailHelp" class="form-text text-muted">Must be type character</small>
                  </div>

                  <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">News Description</label>
                        <textarea class="form-control textarea" name="news_description" id="summernote" rows="4" >{{old('news_description')}}</textarea> 
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
              <h5 class="modal-title" id="editModalLabel">Edit Brand</h5>
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
    $(function news(){
      var table=$('.ytable').DataTable({
        processing: true,
            serverSide: true,
            ajax: "{{ route('news.index') }}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'news_title', name: 'news_title' },
                { data: 'news_image', name: 'news_image' },
                { data: 'news_date', name: 'news_date' },
                { data: 'news_via', name: 'news_via' },
                { data: 'news_description', name: 'news_description' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
      });
    });
// For Edit News 
    $('body').on('click', '.edit', function() {
        let id = $(this).data('id');
        $.get("news/" + id + "/edit", function(data) {
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
  </script>
@endsection