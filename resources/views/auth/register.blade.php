@extends('layouts.frontend', ['title' => 'Register'])

@section('breadcrumb')
@includeIf('layouts.breadcrumb', ['title' => 'Register', 'subtitle' => 'Register'])
@endsection

@section('page-content')
<section class="section bg-white p-t-70 p-b-40">
    <div class="container">
        <div class="row padding-bottom">
            <div class="col-md-2"></div>
            <div class="col-md-8 wow fadeInRight animated" data-wow-delay="4500ms" style="visibility: visible; animation-delay: 450ms; animation-name: fadeInRight;">
                <h3 class="text-block text-black text-center text-bold text-med m-b-40">Register</h3>
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
                <form class="m-t-30" id="myForm" method="post" action="{{ route('authRegister') }}">
                    <!-- CROSS Site Request Forgery Protection -->
                    @csrf
                    @honeypot
                    <div class="row au-form-group">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    @if ($errors->has('first_name'))
                                    <span class="help-block with-errors">
                                        {{ $errors->first('first_name') }}
                                    </span>
                                    @endif
                                    <input class="au-input au-input-2" type="text" placeholder="First Name*" id="first_name" name="first_name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    @if ($errors->has('last_name'))
                                    <span class="help-block with-errors">
                                        {{ $errors->first('last_name') }}
                                    </span>
                                    @endif
                                    <input class="au-input au-input-2" type="text" placeholder="Last Name*" id="last_name" name="last_name">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            @if ($errors->has('email'))
                            <span class="help-block with-errors">
                                {{ $errors->first('email') }}
                            </span>
                            @endif
                            <input class="au-input au-input-2" type="email" placeholder="Email*" id="email" name="email">
                        </div>
                        <div class="form-group">
                            @if ($errors->has('password'))
                            <span class="help-block with-errors">
                                {{ $errors->first('password') }}
                            </span>
                            @endif
                            <input class="au-input au-input-2" type="password" placeholder="Password*" id="password" name="password">
                        </div>
                        <div class="form-group">
                            @if ($errors->has('password_confirmation'))
                            <span class="help-block with-errors">
                                {{ $errors->first('password_confirmation') }}
                            </span>
                            @endif
                            <input class="au-input au-input-2" type="password" placeholder="Password Confirmation*" id="password_confirmation" name="password_confirmation">
                        </div>
                    </div>
                    <div style="display: flex; align-content: center; justify-content: center;">
                        <button type="submit" class="au-btn au-btn-primary">
                            <span class="button-text">Register</span>
                        </button>
                    </div>
                    <div>
                        <p style="text-align: center;margin-top: 30px;">Already have an account ?  <a href="{{ route('login') }}">Login</a> </p>
                    </div>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>
@endsection