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
                        <h4 class="mb-sm-0 font-size-18">Job Details</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{route('jobs')}}">Jobs</a></li>
                                <li class="breadcrumb-item active">Job</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="fw-semibold">Overview</h5>

                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        @if($job->category)
                                        <tr>
                                            <th scope="col">Job Category</th>
                                            <td scope="col">{{$job->category}}</td>
                                        </tr>
                                        @endif
                                        <tr>
                                            <th scope="col">Job Title</th>
                                            <td scope="col">{{$job->title}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Workplace Type</th>
                                            <td>{{$job->workplace_type}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Job Type</th>
                                            <td><span class="badge badge-soft-success">{{$job->job_type}}</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Status</th>
                                            <td>
                                                @if($job->status == 'Active')
                                                <span class="badge badge-soft-success">{{$job->status}}</span>
                                                @elseif($job->status == 'Draft')
                                                <span class="badge badge-soft-info">{{$job->status}}</span>
                                                @else
                                                <span class="badge badge-soft-danger">{{$job->status}}</span>
                                                @endif
                                            </td>
                                        </tr>
                                        @if($job->salary)
                                        <tr>
                                            <th scope="row">Salary</th>
                                            <td>{{$job->salary}}</td>
                                        </tr>
                                        @endif
                                        <tr>
                                            <th scope="row">Posted Date</th>
                                            <td>{{$job->updated_at->toDayDateTimeString()}}</td>
                                        </tr>
                                        @if($job->status == 'Closed')
                                        <tr>
                                            <th scope="row">Close Date</th>
                                            <td>{{$job->updated_at->toDayDateTimeString()}}</td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            <div class="hstack gap-2">
                                <button class="btn btn-soft-primary w-100">{{$job->views ?? '0'}} Views</button>
                                <button type="button" class="btn btn-soft-danger w-100" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">{{$job->applicant->count()}} Applicants</button>
                            </div>
                        </div>
                    </div>

                    <div id="exampleModalFullscreen" class="modal fade" tabindex="-1" aria-labelledby="#exampleModalFullscreenLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-fullscreen">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalFullscreenLabel">All Applicants</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        @foreach($job->applicant as $applicant)
                                        <div class="col-xl-3 col-sm-6">
                                            <div class="card text-center" style="border: 1px solid #f58634;">
                                                <div class="card-body">
                                                    <h5 class="font-size-15 mb-1"><a href="javascript: void(0);" class="text-dark">{{$applicant->name}}</a></h5>
                                                    <div>
                                                        <a href="javascript: void(0);" class="badge font-size-11 m-1" style="background: #f58634;">{{$applicant->email}}</a>
                                                        <a href="javascript: void(0);" class="badge font-size-11 m-1" style="background: #f58634;">{{$applicant->phone}}</a>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-transparent border-top">
                                                    <div class="contact-links d-flex font-size-18">
                                                        <div class="flex-fill">
                                                            <a href="{{route('downloadResume', Crypt::encrypt($applicant->id))}}" class="btn btn-soft-secondary w-90">Download CV</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{$job->logo}}" alt="" height="50" class="mx-auto d-block">
                                <h5 class="mt-3 mb-1">{{$job->company}}</h5>
                            </div>

                            <ul class="list-unstyled mt-4">
                                @if($job->user->phone_number)
                                <li>
                                    <div class="d-flex">
                                        <i class="bx bx-phone text-primary fs-4"></i>
                                        <div class="ms-3">
                                            <h6 class="fs-14 mb-2">Phone</h6>
                                            <p class="text-muted fs-14 mb-0">{{$job->user->phone_number}}</p>
                                        </div>
                                    </div>
                                </li>
                                @endif
                                <li class="mt-3">
                                    <div class="d-flex">
                                        <i class="bx bx-mail-send text-primary fs-4"></i>
                                        <div class="ms-3">
                                            <h6 class="fs-14 mb-2">Email</h6>
                                            <p class="text-muted fs-14 mb-0">{{$job->user->email}}</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mt-3">
                                    <div class="d-flex">
                                        <i class="bx bx-mail-send text-primary fs-4"></i>
                                        <div class="ms-3">
                                            <h6 class="fs-14 mb-2">Applicant Collection Email</h6>
                                            <p class="text-muted fs-14 mb-0">{{$job->applicant_collection_email_address}}</p>
                                        </div>
                                    </div>
                                </li>
                                @if($job->user->phone_number)
                                <li class="mt-3">
                                    <div class="d-flex">
                                        <i class="bx bx-globe text-primary fs-4"></i>
                                        <div class="ms-3">
                                            <h6 class="fs-14 mb-2">Apply Link</h6>
                                            <p class="text-muted fs-14 text-break mb-0">{{$job->apply_link}}</p>
                                        </div>
                                    </div>
                                </li>
                                @endif
                                <li class="mt-3">
                                    <div class="d-flex">
                                        <i class="bx bx-map text-primary fs-4"></i>
                                        <div class="ms-3">
                                            <h6 class="fs-14 mb-2">Location</h6>
                                            <p class="text-muted fs-14 mb-0">{{$job->location}}</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body border-bottom">
                            <div class="d-flex">
                                <img src="{{$job->logo}}" alt="" height="50">
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="fw-semibold">{{$job->title}}</h5>
                                    <ul class="list-unstyled hstack gap-2 mb-0">
                                        <li>
                                            <i class="bx bx-building-house"></i> <span class="text-muted">{{$job->company}}</span>
                                        </li>
                                        <li>
                                            <i class="bx bx-map"></i> <span class="text-muted">{{$job->location}}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="fw-semibold mb-3">Description</h5>
                            <p>{!! html_entity_decode($job->description) !!}</p>
                        </div>
                    </div>
                </div><!--end col-->
            </div>
        </div>
    </div>

    @includeIf('layouts.user_footer')
</div>
@endsection