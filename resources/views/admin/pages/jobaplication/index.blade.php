@extends('layouts.admin')
@section('title', 'Job Applications')

@section('admin_content')
<div class="pc-container">
    <div class="pc-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-auto">
                        <div class="page-header-title">
                            <h5 class="mb-0">Job Applications</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>All job Application List</h5>
                    </div>
                    <div class="card-body">
                        @if($applications->isEmpty())
                            <div class="alert alert-info">No job applications found.</div>
                        @else
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Cover Later</th>
                                            <th>Ressume</th>
                                       
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($applications as $application)
                                        <tr>
                                            <td>{{ $application->id }}</td>
                                            <td>{{ $application->name }}</td>
                                            <td>{{ $application->email }}</td>
                                            <td>{{ $application->phone }}</td>
                                            <td>{{ $application->cover_letter }}</td>

                                   <!-- Image with click event -->

                                   <td>
                                    @if($application->resume)
                                        <a href="{{ asset($application->resume) }}" download class="btn btn-sm btn-success">
                                            Download Resume
                                        </a>
                                    @else
                                        <span>No Resume</span>
                                    @endif
                                </td>
                                

                                

                                 

                                            <!-- Signature Image in Table -->




                                   
                                         
                                         

                                      

                                            <td>
                                                <!-- Approve and Reject buttons -->
                                                @if($application->status == 'pending')
                                                    <form action="{{ route('job.approve', $application->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button class="btn btn-success btn-sm" type="submit">Approve</button>
                                                    </form>
                                                    <form action="{{ route('job.reject', $application->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button class="btn btn-danger btn-sm" type="submit">Reject</button>
                                                    </form>
                                                {{-- @else
                                                    <span class="text-muted">Actions Disabled</span> --}}
                                                @endif

                                                    <!-- Delete button -->
                                                    {{-- <form action="{{ route('admin.loan.destroy', $application->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm" type="submit">
                                                            <i class="fas fa-trash-alt"></i> Delete
                                                        </button>
                                                    </form> --}}
                                                    
                                                    
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- Pagination links -->
                            {{-- <div class="d-flex justify-content-center mt-3">
                                {{ $applications->links('pagination::bootstrap-4') }}
                            </div> --}}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
