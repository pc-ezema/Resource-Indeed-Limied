@extends('layouts.admin_frontend')

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
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
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

    @includeIf('layouts.admin_footer')
</div>
@endsection
