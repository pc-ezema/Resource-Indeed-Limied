<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="#" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{URL::asset('images/icons/favicon.png')}}" alt="{{config('app.name')}}" height="30">
                    </span>
                    <span class="logo-lg">
                        <img src="{{URL::asset('images/icons/ril-logo-02.png')}}" alt="{{config('app.name')}}" width="140" height="40">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>
        </div>

        <div class="d-flex">

            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                    <i class="bx bx-fullscreen"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-bell bx-tada"></i>
                    <span class="badge bg-danger rounded-pill">{{\App\Models\Notification::latest()->where('to', Auth::user()->id)->where('status', 'Unread')->count()}}</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0" key="t-notifications"> Notifications </h6>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        @foreach(\App\Models\Notification::latest()->where('to', Auth::user()->id)->where('status', 'Unread')->get() as $unreadNotification)
                        <a href="{{route('readNotification', Crypt::encrypt($unreadNotification->id))}}" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="avatar-xs me-3">
                                    <img style="height: 0%!important" class="avatar-title rounded-circle bg-primary" src="{{$unreadNotification->image}}" alt="{{$unreadNotification->image}}">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1" key="t-your-order">{{$unreadNotification->title}}</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1" key="t-grammer">{{$unreadNotification->body}}</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">{{$unreadNotification->created_at->diffForHumans()}}.</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if(Auth::user()->avatar)
                    <div style="display: inline-block; vertical-align: middle;">
                        <img class="rounded-circle header-profile-user" src="{{Auth::user()->avatar}}" alt="{{Auth::user()->first_name}}">
                    </div>
                    @else
                    <div class="avatar-xs" style="display: inline-block; vertical-align: middle;">
                        <span class="avatar-title rounded-circle header-profile-user">
                            {{ ucfirst(substr(Auth::user()->first_name, 0, 1)) }} {{ ucfirst(substr(Auth::user()->last_name, 0, 1)) }}
                        </span>
                    </div>
                    @endif
                    <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{Auth::user()->first_name}}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{route('admin.account')}}"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{route('logout')}}"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                </div>
            </div>
        </div>
    </div>
</header>
