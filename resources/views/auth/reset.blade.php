@extends('layouts.frontend', ['title' => 'Reset Password'])

@section('breadcrumb')
@includeIf('layouts.breadcrumb', ['title' => 'Reset Password', 'subtitle' => 'Reset Password'])
@endsection

@section('page-content')
<section class="section bg-white p-t-70 p-b-40">
    <div class="container">
        <div class="row padding-bottom">
            <div class="col-md-2"></div>
            <div class="col-md-8 wow fadeInRight animated" data-wow-delay="4500ms" style="visibility: visible; animation-delay: 450ms; animation-name: fadeInRight;">
                <h3 class="text-block text-black text-center text-bold text-med m-b-40">Reset Password</h3>
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
                <form class="m-t-30" id="myForm" method="post" action="{{ route('resetPassword') }}">
                    <!-- CROSS Site Request Forgery Protection -->
                    @csrf
                    @honeypot
                    <div class="row au-form-group">
                        <div class="form-group">
                            @if ($errors->has('code'))
                            <span class="help-block with-errors">
                                {{ $errors->first('code') }}
                            </span>
                            @endif
                            <input class="au-input au-input-2" type="text" placeholder="Code*" id="code" name="code">
                        </div>
                        <div class="form-group">
                            @if ($errors->has('new_password'))
                            <span class="help-block with-errors">
                                {{ $errors->first('new_password') }}
                            </span>
                            @endif
                            <input class="au-input au-input-2" type="password" placeholder="New Password*" id="new_password" name="new_password">
                        </div>
                        <div class="form-group">
                            @if ($errors->has('password_confirmation'))
                            <span class="help-block with-errors">
                                {{ $errors->first('password_confirmation') }}
                            </span>
                            @endif
                            <input class="au-input au-input-2" type="password" placeholder="New Password Confirmation*" id="new_password_confirmation" name="new_password_confirmation">
                        </div>
                    </div>
                    <div style="display: flex; align-content: center; justify-content: center;">
                        <button type="submit" class="au-btn au-btn-primary">
                            <span class="button-text">Reset Password</span>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>
@endsection