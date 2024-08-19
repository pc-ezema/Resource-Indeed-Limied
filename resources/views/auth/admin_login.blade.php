@extends('layouts.frontend', ['title' => 'Login'])

@section('breadcrumb')
@includeIf('layouts.breadcrumb', ['title' => 'Admin Login', 'subtitle' => 'Admin Login'])
@endsection

@section('page-content')
<section class="section bg-white p-t-70 p-b-40">
    <div class="container">
        <div class="row padding-bottom">
            <div class="col-md-3"></div>
            <div class="col-md-6 wow fadeInRight animated" data-wow-delay="4500ms" style="visibility: visible; animation-delay: 450ms; animation-name: fadeInRight;">
                <h3 class="text-block text-black text-center text-bold text-med m-b-40">Login</h3>
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
                <form class="m-t-30" id="myForm" method="post" action="{{ route('post.admin.login') }}">
                    <!-- CROSS Site Request Forgery Protection -->
                    @csrf
                    @honeypot
                    <div class="row au-form-group">
                        <div class="form-group">
                            @if ($errors->has('email'))
                            <span class="help-block with-errors">
                                {{ $errors->first('email') }}
                            </span>
                            @endif
                            <input class="au-input au-input-2" type="emaol" placeholder="Email*" id="email" name="email">
                        </div>
                        <div class="form-group">
                            @if ($errors->has('password'))
                            <span class="help-block with-errors">
                                {{ $errors->first('password') }}
                            </span>
                            @endif
                            <input class="au-input au-input-2" type="password" placeholder="Password*" id="password" name="password">
                        </div>
                    </div>
                    <div style="display: flex; align-content: center; justify-content: center;">
                        <button type="submit" class="au-btn au-btn-primary">
                            <span class="button-text">Admin Login</span>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>
@endsection
