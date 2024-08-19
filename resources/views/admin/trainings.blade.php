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
                        <h4 class="mb-sm-0 font-size-18">Trainings</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Trainings</li>
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
                                <h4 class="card-title">All Trainings</h4>
                            </div>
                            <div class="table-responsive">
                                <table id="datatable-buttons" class="table align-middle table-nowrap table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th>S/N</th>
                                            <th>Title</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Company Name</th>
                                            <th>Position</th>
                                            <th>Phone Number</th>
                                            <th>Date of Birth</th>
                                            <th>Address</th>
                                            <th>Zip Code</th>
                                            <th>Course</th>
                                            <th>Status</th>
                                            <th>Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($trainings as $training)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>
                                                {{$training->title}}
                                            </td>
                                            <td>
                                                {{$training->last_name}} {{$training->first_name}} {{$training->middle_name}}
                                            </td>
                                            <td>{{$training->email}}</td>
                                            <td>{{$training->company}}</td>
                                            <td>{{$training->position}}</td>
                                            <td>{{$training->phone_number}}</td>
                                            <td>{{$training->date_of_birth}}</td>
                                            <td>{{$training->address}}</td>
                                            <td>{{$training->zip_code}}</td>
                                            <td>{{$training->course}}</td>
                                            <td>
                                                @if($training->status == 'Unpaid')
                                                    <span class="badge badge-soft-danger font-size-11 m-1">{{$training->status}}</span>
                                                @else
                                                    <span class="badge badge-soft-success font-size-11 m-1">{{$training->status}}</span>
                                                @endif
                                            </td>
                                            <td>{{$training->created_at->toDayDateTimeString()}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>

    @includeIf('layouts.admin_footer')
</div>
@endsection
