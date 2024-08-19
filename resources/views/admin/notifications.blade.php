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
                        <h4 class="mb-sm-0 font-size-18">Notifications</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Notifications</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Right Sidebar -->
                    <div class="mb-3">

                        <div class="card">
                            <ul class="message-list">
                                @foreach($allNotifications as $Notification)
                                    @if($Notification->status == 'Unread')
                                    <a href="{{route('admin.readNotification', Crypt::encrypt($Notification->id))}}">
                                        <li class="unread">
                                            <div class="col-mail col-mail-1">
                                            <p class="text-danger">Unread</p>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="# " data-bs-toggle="modal"  class="subject text-truncate">{{$Notification->title}} –
                                                    <span class="teaser text-truncate">{{$Notification->body}}</span>
                                                </a>
                                                <div class="date">{{$Notification->created_at->diffForHumans()}}</div>
                                            </div>
                                        </li>
                                    </a>
                                    @else
                                    <li style="padding: 10px; border-bottom: 1px solid #f58634;">
                                        <div class="col-mail col-mail-1">
                                            <p class="text-success">Read</p>
                                        </div>
                                        <div class="col-mail col-mail-2">
                                            <a href="#" data-bs-toggle="modal" class="subject text-truncate">{{$Notification->title}} –
                                                <span class="teaser">{{$Notification->body}}</span>
                                            </a>
                                            <div class="date">{{$Notification->created_at->diffForHumans()}}</div>
                                        </div>
                                    </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div><!-- card -->
                    </div> <!-- end Col-9 -->

                </div>

            </div><!-- End row -->
        </div>
    </div>

    @includeIf('layouts.admin_footer')
</div>
@endsection
