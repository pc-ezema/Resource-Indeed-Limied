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
                        <h4 class="mb-sm-0 font-size-18">New Job</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{route('jobs')}}">Jobs</a></li>
                                <li class="breadcrumb-item active">New Job</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">New Job</h4>
                            <p class="text-danger">Fields mark with asterisk are compulsory</p>
                            <form action="{{route('jobPost')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div>
                                    <div class="form-group row mb-4">
                                        <label for="title" class="col-form-label col-lg-2">Title <span class="text-danger">*</span></label>
                                        <div class="col-lg-10">
                                            <input id="title" name="title" type="text" class="form-control" placeholder="Enter Title..." required>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="company" class="col-form-label col-lg-2">Company <span class="text-danger">*</span></label>
                                        <div class="col-lg-10">
                                            <input id="company" name="company" type="text" class="form-control" placeholder="Enter Company..." required>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="logo" class="col-form-label col-lg-2">Logo (JPEG, PNG, JPG) <span class="text-danger">*</span></label>
                                        <div class="col-lg-10">
                                            <input id="logo" name="logo" type="file" class="form-control" accept=".jpeg, .jpg, .png" placeholder="Upload Logo..." required>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="workplace_type" class="col-form-label col-lg-2">Workplace Type <span class="text-danger">*</span></label>
                                        <div class="col-lg-10">
                                            <select id="workplace_type" name="workplace_type" type="text" class="form-control" required>
                                                <option value="">-- Select Workplace Type --</option>
                                                <option value="Remote">Remote</option>
                                                <option value="On-site">On-site</option>
                                                <option value="Hybrid">Hybrid</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="location" class="col-form-label col-lg-2">Location <span class="text-danger">*</span></label>
                                        <div class="col-lg-10">
                                            <input id="location" name="location" type="text" class="form-control" placeholder="Enter Location..." required>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="job_type" class="col-form-label col-lg-2">Job Type <span class="text-danger">*</span></label>
                                        <div class="col-lg-10">
                                            <select id="job_type" name="job_type" type="text" class="form-control" required>
                                                <option value="">-- Select Job Type --</option>
                                                <option value="Full-time">Full-time</option>
                                                <option value="Part-time">Part-time</option>
                                                <option value="Contract">Contract</option>
                                                <option value="Temporary">Temporary</option>
                                                <option value="Volunteer">Volunteer</option>
                                                <option value="Internship">Internship</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="salary" class="col-form-label col-lg-2">Salary</label>
                                        <div class="col-lg-10">
                                            <input id="salary" name="salary" type="text" class="form-control" placeholder="Enter Salary......">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="description" class="col-form-label col-lg-2">Description <span class="text-danger">*</span></label>
                                        <div class="col-lg-10">
                                            <textarea id="editor" class="form-control" name="description" ></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="apply_link" class="col-form-label col-lg-2">Apply Link(If any)</label>
                                        <div class="col-lg-10">
                                            <input id="apply_link" name="apply_link" type="text" class="form-control" placeholder="Enter Apply Link...">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="applicant_collection_email_address" class="col-form-label col-lg-2">Applicant Collection Email Address <span class="text-danger">*</span></label>
                                        <div class="col-lg-10">
                                            <input id="applicant_collection_email_address" name="applicant_collection_email_address" type="email" value="{{Auth::user()->email}}" class="form-control" placeholder="Enter Applicant Collection Email Address..." oninput="updateParagraph()" required>
                                            <p>You will receive applicants on {{config('app.name')}} and get notified at <span id="displayText">{{Auth::user()->email}}</span></p>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="rejection_emails" class="col-form-label col-lg-2">Rejection Emails <span class="text-danger">*</span></label>
                                        <div class="col-lg-10">
                                            <label>
                                                <input type="radio" name="rejection_emails" value="true" required>
                                                Yes
                                            </label>

                                            <label>
                                                <input type="radio" name="rejection_emails" value="false" required>
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-end">
                                    <div class="col-lg-10">
                                        <button type="submit" class="btn btn-primary">Post Job</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @includeIf('layouts.user_footer')
</div>
<style>
    /* Add some basic styling for the editor */
    #editor {
        width: 100%;
        height: 200px;
        padding: 10px;
    }
</style>
@endsection
