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
                        <h4 class="mb-sm-0 font-size-18">My Account</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4">
                    <div class="card overflow-hidden">
                        <div style="height: 80px; background-color: rgba(245, 134, 52, 0.3);">
                        </div>
                        <div class="card-body pt-0">
                            <div class="row text-center">
                                <div class="col-12">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        @if(Auth::user()->avatar)
                                        <img class="img-thumbnail rounded-circle" src="{{Auth::user()->avatar}}" alt="{{Auth::user()->first_name}}">
                                        @else
                                        <span class="avatar-title img-thumbnail img-fluid rounded-circle font-size-18">
                                            {{ ucfirst(substr(Auth::user()->first_name, 0, 1)) }} {{ ucfirst(substr(Auth::user()->last_name, 0, 1)) }}
                                        </span>
                                        @endif
                                    </div>
                                    <h5 class="font-size-15">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h5>
                                </div>
                                <div class="col-12">
                                    <div class="pt-4">
                                        <form method="POST" action="{{ route('uploadProfilePicture')}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="form-floating mb-1">
                                                    <input type="file" class="form-control" id="floatingemailInput" name="avatar" placeholder="Select Picture">
                                                    <label for="floatingemailInput">Picture</label>
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light btn-sm">Upload Picture</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Change Password</h4>
                            <form method="POST" action="{{ route('updatePassword')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" placeholder="Insert new password" type="password" name="new_password" required/>
                                            <label for="floatingnameInput">New Password</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input class="form-control"  placeholder="Confirm new password" type="password" name="new_password_confirmation" required/>
                                            <label for="floatingnameInput">New Password Confirmation</label>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Update Password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end card -->
                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Edit Profile</h4>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <form method="POST" action="{{ route('updateProfile')}}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" id="floatingnameInput" name="first_name" value="{{Auth::user()->first_name}}" placeholder="Enter First Name">
                                                            <label for="floatingnameInput">First Name</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" id="floatingnameInput" name="last_name" value="{{Auth::user()->last_name}}" placeholder="Enter Last Name">
                                                            <label for="floatingnameInput">Last Name</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-floating mb-3">
                                                            <input type="email" class="form-control" id="floatingemailInput" readonly value="{{Auth::user()->email}}" placeholder="Enter Email address">
                                                            <label for="floatingemailInput">Email address</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-floating mb-3">
                                                            <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example" name="gender">
                                                                <option value="{{Auth::user()->gender}}">{{Auth::user()->gender}}</option>
                                                                <option value="">-- Select Gender --</option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                            </select>
                                                            <label for="floatingSelectGrid">Gender</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-floating mb-3">
                                                            <input type="tel" class="form-control" id="floatingnameInput" name="phone_number" value="{{Auth::user()->phone_number}}" placeholder="Enter Phone Number">
                                                            <label for="floatingnameInput">Phone Number</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button type="submit" class="btn btn-primary w-md">Update Profile</button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>

    @includeIf('layouts.user_footer')
</div>
@endsection