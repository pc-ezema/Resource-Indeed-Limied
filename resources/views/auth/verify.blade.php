@extends('layouts.frontend', ['title' => 'Verify Account'])

@section('breadcrumb')
@includeIf('layouts.breadcrumb', ['title' => 'Verify Account', 'subtitle' => 'Verify Account'])
@endsection

@section('page-content')
<section class="section bg-white p-t-70 p-b-40">
    <div class="container">
        <div class="row padding-bottom">
            <div class="col-md-2"></div>
            <div class="col-md-8 wow fadeInRight animated" data-wow-delay="4500ms" style="visibility: visible; animation-delay: 450ms; animation-name: fadeInRight;">
                <!-- <h3 class="text-block text-black text-center text-bold text-med m-b-40">Verify Account</h3> -->
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
                <form class="m-t-30" id="verificationForm" method="post" action="{{ route('comfirmCode') }}">
                    <!-- CROSS Site Request Forgery Protection -->
                    @csrf
                    @honeypot
                    <div class="row au-form-group">
                        <div class="form-group">
                            @if ($errors->has('verificationCode'))
                            <span class="help-block with-errors">
                                {{ $errors->first('verificationCode') }}
                            </span>
                            @endif
                            <input class="au-input au-input-2" type="emaol" placeholder="Verification Code*" id="verificationCode" name="verificationCode" maxlength="4" required>
                        </div>
                    </div>
                    <div style="display: flex; align-content: center; justify-content: center;">
                        <button type="submit" class="au-btn au-btn-primary">
                            <span class="button-text">Verify</span>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function () {
        $('#verificationCode').on('input', function () {
            if ($(this).val().length === 4) {
                $('#verificationForm').submit();
            }
        });
    });
</script>
@endsection