@extends('layouts.frontend', ['title' => 'Jobs'])

@section('breadcrumb')
@includeIf('layouts.breadcrumb', ['title' => 'Jobs', 'subtitle' => 'Jobs'])
@endsection

@section('page-content')
<div class="page-content p-t-80 p-b-30">
    <div class="container">
        <div class="row">
            @if(Session::has('success'))
            <div class="alert alert-success messages" id="status">
                {{Session::get('success')}}
            </div>
            @endif
            @if(Session::has('danger'))
            <div class="alert alert-danger messages" id="status">
                {{Session::get('danger')}}
            </div>
            @endif
            <div class="col-lg-12">
                <div class="card job-filter">
                    <div class="card-body">
                        <form onsubmit="searchJobs(); return false;">
                            <div class="row g-3">
                                <div class="col-xl-4 col-lg-4 m-b-20">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="searchJob" autocomplete="off" placeholder="Job title, workplace type, job type, or company">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-xl-4 col-lg-4 m-b-20">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="locationInput" autocomplete="off" placeholder="City, state or country">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-xl-4 col-lg-4 m-b-20">
                                    <div class="position-relative h-100 hstack gap-3">
                                        <button type="submit" class="btn btn-primary h-100 w-100"><i class="bx bx-search-alt align-middle"></i> Find Jobs</button>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </form>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>

        <div class="row" id="jobList" >
            <!-- <div class="col-xl-4 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img src="assets/images/companies/adobe.svg" alt="" height="50" class="m-b-3" style="vertical-align: middle;">
                        <h5 class="f-s-17 m-b-2"><a href="job-details.html" class="text-black">Magento Developer</a> <small class="text-muted fw-normal">(0-2 Yrs Exp.)</small></h5>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <p class="text-muted fs-14 mb-1">Skote Technology Pvt.Ltd</p>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i> California</p>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                            </li>
                        </ul>
                        <div class="mt-3 hstack gap-2">
                            <span class="badge rounded-1 badge-soft-success">Full Time</span>
                            <span class="badge rounded-1 badge-soft-warning">Urgent</span>
                            <span class="badge rounded-1 badge-soft-info">Private</span>
                        </div>
                        <div class="mt-4 hstack gap-2">
                            <a href="job-details.html" class="view-job-details-btn">View Job</a>
                            <a href="#applyJobs" data-bs-toggle="modal" class="apply-now-btn">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div> -->
            <!--end col-->
        </div>
        <!-- Modal -->
        <div class="modal fade" id="applyJobs" style="z-index: 100000000;" tabindex="-1" role="dialog" aria-labelledby="applyJobsLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="applyJobsLabel">Apply for the Job</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="applyForm" action="{{ route('submitApplication') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @honeypot
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="m-b-20">
                                        <input type="hidden" id="jobId" name="jobId">
                                        <label for="fullnameInput" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="fullnameInput" name="name" placeholder="Enter your name" required>
                                    </div>
                                </div><!--end col-->
                                <div class="col-lg-6">
                                    <div class="m-b-20">
                                        <label for="emailInput" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="emailInput" name="email" placeholder="Enter your email" required>
                                    </div>
                                </div><!--end col-->
                                <div class="col-lg-6">
                                    <div class="m-b-20">
                                        <label for="phoneNumberInput" class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control" id="phoneNumberInput" name="phone" placeholder="Enter your number" required>
                                    </div>
                                </div><!--end col-->
                                <div class="col-lg-12">
                                    <div class="m-b-20">
                                        <label for="uploadResume" class="form-label">Upload Resume</label>
                                        <input type="file" class="form-control" id="uploadResume" name="resume" placeholder="Upload resume" accept=".pdf, .doc, .docx" required>
                                    </div>
                                </div><!--end col-->
                                <div class="col-lg-12">
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-success">Send Application <i class="bx bx-send align-middle"></i></button>
                                        <a class="btn btn-danger" data-dismiss="modal">Cancel</a>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="viewJob" class="modal fade" tabindex="-1"  style="z-index: 100000000;" aria-labelledby="#viewJobLabel" role="dialog" aria-hidden="true">
            <div class="modal-dialog" style="width: 80%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="viewJobLabel">Job Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="fw-semibold">Overview</h5>

                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th scope="col">Job Title</th>
                                                        <td scope="col" class="job-title"></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Workplace Type</th>
                                                        <td class="job-workplace_type"></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Job Type</th>
                                                        <td><span class="badge badge-soft-success job-job_type"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Salary</th>
                                                        <td class="job-salary"></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Posted Date</th>
                                                        <td class="job-created_at"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-md-9">
                                <div class="card">
                                    <div class="card-body border-bottom">
                                        <div class="d-flex">
                                            <img src="" class="job-logo" alt="" height="50">
                                            <div class="flex-grow-1 ms-3">
                                                <h5 class="fw-semibold job-title"></h5>
                                                <ul class="list-unstyled hstack gap-2 mb-0">
                                                    <li>
                                                        <span class="text-muted job-company"></span>
                                                    </li>
                                                    <li>
                                                       <span class="text-muted job-location"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="fw-semibold mb-3">Description</h5>
                                        <p class="job-description text-muted"></p>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
    </div>
</div>

<div class="section bg-primary p-t-25 p-b-25 cta-section-1 cta-section-2">
    <div class="container">
        <div class="block-left">
            <p class="text-block text-med">We are your partners in driving success.</p>
        </div>
        <div class="block-right">
            <a class="au-btn au-btn-border au-btn-border-light" href="/contact">Talk With Us</a>
        </div>
    </div>
</div>

<style>
    .card {
        box-shadow: 0 0.75rem 1.5rem rgba(18,38,63,.03);
        margin-bottom: 24px;
    }
    .card-body {
        -webkit-box-flex: 1;
        flex: 1 1 auto;
        padding: 1.25rem 1.25rem;
    }

    /* Apply specific styles to View Job Details button */
    .view-job-details-btn {
        text-decoration: none;
        display: inline-block;
        padding: 2px 5px;
        margin: 10px;
        border: 2px solid #3498db;
        color: #3498db;
        border-radius: 5px;
        font-weight: bold;
        text-align: center;
        transition: background-color 0.3s, color 0.3s;
        background-color: #3498db;
        color: #fff;
    }

    .view-job-details-btn:hover {
        background-color: #fff;
        color: #3498db;
    }

    /* Apply specific styles to Apply Now button */
    .apply-now-btn {
        text-decoration: none;
        display: inline-block;
        padding: 2px 5px;
        margin: 10px;
        border: 2px solid #f58634;
        color: #3498db;
        border-radius: 5px;
        font-weight: bold;
        text-align: center;
        transition: background-color 0.3s, color 0.3s;
        background-color: #f58634;
        color: #fff;
    }

    .apply-now-btn:hover {
        background-color: #fff;
        color: #f58634;
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function searchJobs() {
        var searchQuery = $('#searchJob').val();
        var locationQuery = $('#locationInput').val();

        // Perform AJAX request to your Laravel backend
        $.ajax({
            url: '/search/jobs', // Replace with your Laravel route for job search
            type: 'GET',
            data: {
                searchQuery: searchQuery,
                locationQuery: locationQuery
            },
            dataType: 'json',
            success: function (data) {
                // Handle the returned data (update job listings, etc.)
                if (data.success && data.jobs.length > 0) {
                    // Clear existing job cards
                    $('#jobList').empty();
                    // console.log(data)
                    // Loop through the jobs and append job cards to the container
                    data.jobs.forEach(function (job) {
                        appendJobCard(job);
                    });
                } else {
                    $('#jobList').html('<div class="col-12"><div class="card"><div class="card-body"><p>No jobs available at the moment.</p></div></div></div>');
                }
            },
            error: function (xhr, status, error) {
                console.error('Error:', status, error);
            }
        });
    }

    // Function to append a job card to the container
    function appendJobCard(job) {
        // Format the created_at date using JavaScript (you can adjust the format as needed)
        const postedAt = new Date(job.created_at).toLocaleDateString('en-US', {
            year: 'numeric',
            month: 'long',
            day: 'numeric',
        });

        var jobCard = `
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <img src="${job.company_logo}" alt="" height="50" class="m-b-3" style="vertical-align: middle;">
                        <h5 class="f-s-17 m-b-2"><a href="#" class="text-black">${job.title}</a></h5>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <p class="text-muted fs-14 mb-1">${job.company}</p>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i> ${job.location}</p>
                            </li>
                            <li class="list-inline-item">
                                ${job.salary ? `<p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i>${job.salary}</p>` : ''}
                            </li>
                        </ul>
                        <div class="mt-3 hstack gap-2">
                            <span class="badge rounded-1 badge-soft-success">${job.job_type}</span>
                            <span class="badge rounded-1 badge-soft-warning">${job.workplace_type}</span>
                            <span class="badge rounded-1 badge-soft-warning">Posted at ${postedAt}</span>
                        </div>
                        <div class="mt-4 hstack gap-2">
                            <a href="#" class="view-job-details-btn" data-job-id="${job.id}">View Job</a>
                            <button type="button" class="apply-now-btn" data--toggle="modal" data--target="#applyJobs" data-job-id="${job.id}">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>
        `;

        // Append the job card to the container
        $('#jobList').append(jobCard);
    }

    $(document).ready(function () {
        // Make an AJAX request to retrieve job data from Laravel backend
        $.ajax({
            url: '/api/jobs', // Replace with your Laravel API endpoint
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                // Check if the response is successful and data is available
                if (data.success && data.jobs.length > 0) {
                    // console.log(data)
                    // Loop through the jobs and append job cards to the container
                    data.jobs.forEach(function (job) {
                        appendJobCard(job);
                    });
                } else {
                    $('#jobList').html('<div class="col-12"><div class="card"><div class="card-body"><p>No jobs available at the moment.</p></div></div></div>');
                }
            },
            error: function (xhr, status, error) {
                console.error('Error:', status, error);
            }
        });

        // Function to append a job card to the container
        function appendJobCard(job) {
            // Format the created_at date using JavaScript (you can adjust the format as needed)
            const postedAt = new Date(job.created_at).toLocaleDateString('en-US', {
                year: 'numeric',
                month: 'long',
                day: 'numeric',
            });
            
            var jobCard = `
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="${job.company_logo}" alt="" height="50" class="m-b-3" style="vertical-align: middle;">
                            <h5 class="f-s-17 m-b-2"><a href="#" class="text-black">${job.title}</a></h5>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <p class="text-muted fs-14 mb-1">${job.company}</p>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i> ${job.location}</p>
                                </li>
                                <li class="list-inline-item">
                                    ${job.salary ? `<p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i>${job.salary}</p>` : ''}
                                </li>
                            </ul>
                            <div class="mt-3 hstack gap-2">
                                <span class="badge rounded-1 badge-soft-success">${job.job_type}</span>
                                <span class="badge rounded-1 badge-soft-warning">${job.workplace_type}</span>
                                <span class="badge rounded-1 badge-soft-warning">Posted at ${postedAt}</span>
                            </div>
                            <div class="mt-4 hstack gap-2">
                                <a href="#" class="view-job-details-btn" data-job-id="${job.id}">View Job</a>
                                <button type="button" class="apply-now-btn" data--toggle="modal" data--target="#applyJobs" data-job-id="${job.id}">Apply Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            `;

            // Append the job card to the container
            $('#jobList').append(jobCard);
        }
    });

    // Event handler for showing the modal and setting the job ID
    $(document).on('click', '.apply-now-btn', function () {
        var jobId = $(this).data('job-id');
        $('#jobId').val(jobId);
        $('#applyJobs').modal('show');
    });

    $(document).on('click', '.view-job-details-btn', function () {
        var jobId = $(this).data('job-id');
        // Fetch and display job details
        fetchJobDetails(jobId);
    });

    function fetchJobDetails(jobId) {
        $.ajax({
            method: 'GET',
            url: '/view/job/' + jobId, // Replace with your actual backend endpoint
            success: function(response) {
                // Display job details in the modal
                const postedAt = new Date(response.created_at).toLocaleDateString('en-US', {
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric',
                });


                $('#viewJob .job-title').text(response.title);
                $('#viewJob .job-company').html(response.company);
                $('#viewJob .job-location').html(response.location);
                $('#viewJob .job-logo').attr('src', response.logo);
                $('#viewJob .job-description').html(html_entity_decode(response.description));
                $('#viewJob .job-workplace_type').text(response.workplace_type);
                $('#viewJob .job-job_type').html(response.job_type);
                $('#viewJob .job-salary').html(response.salary);
                $('#viewJob .job-created_at').html(postedAt);

                $('#viewJob').modal('show');
            },
            error: function(error) {
                console.error("Error fetching job details:", error);
            }
        });
    }
    
    // Function to decode HTML entities
    function html_entity_decode(str) {
        var textarea = document.createElement("textarea");
        textarea.innerHTML = str;
        return textarea.value;
    }

</script>
@endsection