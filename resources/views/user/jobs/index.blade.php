@extends('layouts.user_frontend')

@section('page-content')
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Jobs</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Jobs</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4" style="display: flex; justify-content: space-between;">
                                <h4 class="card-title">All Jobs</h4>
                                <a class="btn font-16 btn-primary" class="btn btn-primary" href="{{route('jobAdd')}}"><i class="mdi mdi-plus-circle-outline"></i>
                                    Add Job
                                </a>
                            </div>
                            <div class="table-responsive">
                                <table id="datatable-buttons" class="table align-middle table-nowrap table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th>S/N</th>
                                            <th>Title</th>
                                            <th>Company</th>
                                            <th>Workplace Type</th>
                                            <th>Location</th>
                                            <th>Job Type</th>
                                            <th>Applicants</th>
                                            <th>Status</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($jobs as $job)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>
                                                {{$job->title}}
                                            </td>
                                            <td>
                                                {{$job->company}}
                                                <p class="text-center"><img src="{{$job->logo}}" width="30" /></p>
                                            </td>
                                            <td>{{$job->workplace_type}}</td>
                                            <td>{{$job->location}}</td>
                                            <td>{{$job->job_type}}</td>
                                            <td>{{$job->applicant->count()}}</td>
                                            <td>
                                                @if($job->status == 'Active')
                                                    <span class="badge badge-soft-primary font-size-11 m-1">{{$job->status}}</span>
                                                @else
                                                    <span class="badge badge-soft-danger font-size-11 m-1">{{$job->status}}</span>
                                                @endif
                                            </td>
                                            <td>{{$job->created_at->toDayDateTimeString()}}</td>
                                            <td>
                                                <a href="{{route('jobView', Crypt::encrypt($job->id))}}" class="btn btn-primary waves-effect waves-light btn-sm mb-3">View</a>
                                                <a href="{{route('jobEdit', Crypt::encrypt($job->id))}}" class="btn btn-primary waves-effect waves-secondary btn-sm mb-3">Edit</a>
                                                @if($job->status == 'Active')
                                                <a href="#jobClose-{{$job->id}}" data-bs-toggle="modal" class="btn btn-dark waves-effect waves-dark btn-sm mb-3">Close</a>
                                                <div class="modal fade" id="jobClose-{{$job->id}}" tabindex="-1" aria-labelledby="categoryDeleteLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-md">
                                                        <div class="modal-content">
                                                            <div class="modal-body px-4 py-5 text-center">
                                                                <button type="button" class="btn-close position-absolute end-0 top-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                <div class="avatar-sm mb-4 mx-auto">
                                                                    <div class="avatar-title bg-primary bg-opacity-10 font-size-20 rounded-3" style="color: #f58634;">
                                                                        <i class="mdi mdi-trash-can-outline"></i>
                                                                    </div>
                                                                </div>
                                                                <form method="post" action="{{ route('jobClose', Crypt::encrypt($job->id))}}">
                                                                    @csrf
                                                                    <p class="text-muted font-size-16 mb-4">This action cannot be undone.</p>
                                                                    <div class="hstack gap-2 justify-content-center mb-0">
                                                                        <button type="submit" class="form-btn btn btn-primary">Close Now</button>
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                <a href="#jobDelete-{{$job->id}}" data-bs-toggle="modal" class="btn btn-danger waves-effect waves-light btn-sm mb-3">Delete</a>
                                                <div class="modal fade" id="jobDelete-{{$job->id}}" tabindex="-1" aria-labelledby="categoryDeleteLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body px-4 py-5 text-center">
                                                                <button type="button" class="btn-close position-absolute end-0 top-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                <div class="avatar-sm mb-4 mx-auto">
                                                                    <div class="avatar-title bg-primary bg-opacity-10 font-size-20 rounded-3" style="color: #f58634;">
                                                                        <i class="mdi mdi-trash-can-outline"></i>
                                                                    </div>
                                                                </div>
                                                                <form method="post" action="{{ route('jobDelete', Crypt::encrypt($job->id))}}">
                                                                    @csrf
                                                                    <p class="text-muted font-size-16 mb-4">This action cannot be undone. <br>
                                                                        This will permanently delete this job and everything thats attached to this job.</p>
                                                                    <div class="hstack gap-2 justify-content-center mb-0">
                                                                        <button type="submit" class="form-btn btn btn-danger">Delete Now</button>
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
    </div>

    @includeIf('layouts.user_footer')
</div>
@endsection
