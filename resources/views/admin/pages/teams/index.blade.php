@extends('layouts.admin')
@section('title','Banner')
@section('admin_content')
<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-auto">
                        <div class="page-header-title">
                            <h5 class="mb-0">Banner</h5>
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
              <h5>All Banner list here</h5>
            </div>
            <div class="card-body">
              <div class="dt-responsive table-responsive">
                <table id="" class="table table-striped table-bordered nowrap table-sm ytable">
                  <thead>
                    <tr>
                        <th>SL</th>
                        <th>Member Name</th>
                        <th>Member Designation</th>
                        <th>Member Facebook</th>
                        <th>Member Linkedin</th>
                        <th>Member Image</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Data populated by DataTables via AJAX -->
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>SL</th>
                        <th>Member Name</th>
                        <th>Member Designation</th>
                        <th>Member Facebook</th>
                        <th>Member Linkedin</th>
                        <th>Member Image</th>
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
                <h5 class="modal-title h4" id="myLargeModalLabel">Add New Team</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('team.store')}}" method="post" id="add-form" enctype="multipart/form-data">
              @csrf
              <div class="modal-body">
                <div class="form-group">
                  <label for="member_name" class="col-form-label pt-0">Member Name<sup class="text-size-20 top-1">*</sup></label>
                    <input type="text" class="form-control" id="member_name" name="member_name" required>
                    <small id="emailHelp" class="form-text text-muted">This is your rent property</small>
                </div>

                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Member Designation</label>
                        <select class="form-control" name="member_designation">
                            <option value="" disabled selected>Select Designation</option>
                
                            <!-- Executive & Leadership Team -->
                            <optgroup label="Executive & Leadership Team">
                                <option value="CEO" {{ old('member_designation') == 'CEO' ? 'selected' : '' }}>Chief Executive Officer (CEO)</option>
                                <option value="CTO" {{ old('member_designation') == 'CTO' ? 'selected' : '' }}>Chief Technology Officer (CTO)</option>
                                <option value="COO" {{ old('member_designation') == 'COO' ? 'selected' : '' }}>Chief Operating Officer (COO)</option>
                                <option value="CFO" {{ old('member_designation') == 'CFO' ? 'selected' : '' }}>Chief Financial Officer (CFO)</option>
                            </optgroup>
                
                            <!-- Development & Engineering Team -->
                            <optgroup label="Development & Engineering Team">
                                <option value="Software Engineer" {{ old('member_designation') == 'Software Engineer' ? 'selected' : '' }}>Software Engineer / Developer</option>
                                <option value="Frontend Developer" {{ old('member_designation') == 'Frontend Developer' ? 'selected' : '' }}>Frontend Developer</option>
                                <option value="Backend Developer" {{ old('member_designation') == 'Backend Developer' ? 'selected' : '' }}>Backend Developer</option>
                                <option value="Full-Stack Developer" {{ old('member_designation') == 'Full-Stack Developer' ? 'selected' : '' }}>Full-Stack Developer</option>
                                <option value="Mobile App Developer" {{ old('member_designation') == 'Mobile App Developer' ? 'selected' : '' }}>Mobile App Developer</option>
                                <option value="DevOps Engineer" {{ old('member_designation') == 'DevOps Engineer' ? 'selected' : '' }}>DevOps Engineer</option>
                                <option value="QA Engineer" {{ old('member_designation') == 'QA Engineer' ? 'selected' : '' }}>QA Engineer / Tester</option>
                            </optgroup>
                
                            <!-- Design & Creative Team -->
                            <optgroup label="Design & Creative Team">
                                <option value="UI/UX Designer" {{ old('member_designation') == 'UI/UX Designer' ? 'selected' : '' }}>UI/UX Designer</option>
                                <option value="Graphic Designer" {{ old('member_designation') == 'Graphic Designer' ? 'selected' : '' }}>Graphic Designer</option>
                                <option value="Product Designer" {{ old('member_designation') == 'Product Designer' ? 'selected' : '' }}>Product Designer</option>
                            </optgroup>
                
                            <!-- Project Management & Operations Team -->
                            <optgroup label="Project Management & Operations Team">
                                <option value="Project Manager" {{ old('member_designation') == 'Project Manager' ? 'selected' : '' }}>Project Manager (PM)</option>
                                <option value="Scrum Master" {{ old('member_designation') == 'Scrum Master' ? 'selected' : '' }}>Scrum Master</option>
                                <option value="Product Owner" {{ old('member_designation') == 'Product Owner' ? 'selected' : '' }}>Product Owner</option>
                                <option value="Business Analyst" {{ old('member_designation') == 'Business Analyst' ? 'selected' : '' }}>Business Analyst (BA)</option>
                            </optgroup>
                
                            <!-- Marketing & Sales Team -->
                            <optgroup label="Marketing & Sales Team">
                                <option value="Marketing Manager" {{ old('member_designation') == 'Marketing Manager' ? 'selected' : '' }}>Marketing Manager</option>
                                <option value="Digital Marketing Specialist" {{ old('member_designation') == 'Digital Marketing Specialist' ? 'selected' : '' }}>Digital Marketing Specialist</option>
                                <option value="Sales Executive" {{ old('member_designation') == 'Sales Executive' ? 'selected' : '' }}>Sales Executive</option>
                                <option value="Content Writer" {{ old('member_designation') == 'Content Writer' ? 'selected' : '' }}>Content Writer</option>
                            </optgroup>
                
                            <!-- Support & IT Team -->
                            <optgroup label="Support & IT Team">
                                <option value="Technical Support Specialist" {{ old('member_designation') == 'Technical Support Specialist' ? 'selected' : '' }}>Technical Support Specialist</option>
                                <option value="System Administrator" {{ old('member_designation') == 'System Administrator' ? 'selected' : '' }}>System Administrator</option>
                                <option value="Database Administrator" {{ old('member_designation') == 'Database Administrator' ? 'selected' : '' }}>Database Administrator</option>
                            </optgroup>
                
                            <!-- Human Resources & Admin Team -->
                            <optgroup label="Human Resources & Admin Team">
                                <option value="HR Manager" {{ old('member_designation') == 'HR Manager' ? 'selected' : '' }}>HR Manager</option>
                                <option value="Recruiter" {{ old('member_designation') == 'Recruiter' ? 'selected' : '' }}>Recruiter</option>
                                <option value="Office Administrator" {{ old('member_designation') == 'Office Administrator' ? 'selected' : '' }}>Office Administrator</option>
                            </optgroup>
                
                            <!-- Optional Specialized Roles -->
                            <optgroup label="Optional Specialized Roles">
                                <option value="Cybersecurity Specialist" {{ old('member_designation') == 'Cybersecurity Specialist' ? 'selected' : '' }}>Cybersecurity Specialist</option>
                                <option value="Data Scientist" {{ old('member_designation') == 'Data Scientist' ? 'selected' : '' }}>Data Scientist</option>
                                <option value="AI/ML Engineer" {{ old('member_designation') == 'AI/ML Engineer' ? 'selected' : '' }}>AI/ML Engineer</option>
                                <option value="Cloud Engineer" {{ old('member_designation') == 'Cloud Engineer' ? 'selected' : '' }}>Cloud Engineer</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                

                <div class="form-group">
                    <label for="social_face" class="col-form-label pt-0">Member Facebook<sup class="text-size-20 top-1">*</sup></label>
                      <input type="text" class="form-control" id="social_face" name="social_face" required>
                      <small id="emailHelp" class="form-text text-muted">This is your rent property</small>
                  </div>

                  <div class="form-group">
                    <label for="social_linked" class="col-form-label pt-0">Member Linkedin<sup class="text-size-20 top-1">*</sup></label>
                      <input type="text" class="form-control" id="social_linked" name="social_linked" required>
                      <small id="emailHelp" class="form-text text-muted">This is your rent property</small>
                  </div>


                <div class="col-md-12">
                  <label for="member_image" class="col-form-label pt-0">Member Image<sup class="text-size-20 top-1">*</sup></label>
                  <input type="file" class="dropify" data-height="200" name="member_image" required />
                  <small id="imageHelp" class="form-text text-muted">This is your Banner image</small>
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
              <h5 class="modal-title" id="editModalLabel">Edit Team</h5>
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
    $(function team(){
      var table=$('.ytable').DataTable({
        processing: true,
            serverSide: true,
            ajax: "{{ route('team.index') }}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'member_name', name: 'member_name' },
                { data: 'member_designation', name: 'member_designation' },
                { data: 'social_face', name: 'social_face' },
                { data: 'social_linked', name: 'social_linked' },
                { data: 'member_image', name: 'member_image' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
      });
    });
// For Edit team 
    $('body').on('click', '.edit', function() {
        let id = $(this).data('id');
        $.get("team/" + id + "/edit", function(data) {
            $('.modal-body').html(data);
        });
    });

  </script>
  
@endsection