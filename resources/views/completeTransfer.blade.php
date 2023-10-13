@extends('layouts.frontend', ['title' => 'Contact Us'])

@section('breadcrumb')
@includeIf('layouts.breadcrumb', ['title' => 'Training', 'subtitle' => 'Complete Transfer Request'])
@endsection

@section('page-content')
<section class="section bg-white p-t-70 p-b-40">
    <div class="container">
        <div class="row padding-bottom">
            <div class="col-md-2"></div>
            <div class="col-md-8 wow fadeInRight animated" data-wow-delay="4500ms" style="visibility: visible; animation-delay: 450ms; animation-name: fadeInRight;">
                <h3 class="text-block text-black text-center text-bold text-med m-b-40">Complete Transfer Request</h3>
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
                <form class="m-t-30" id="myForm" method="post" action="{{ route('complete') }}">
                    <!-- CROSS Site Request Forgery Protection -->
                    @csrf
                    @honeypot
                    <div class="row au-form-group">
                        <div class="form-group">
                            @if ($errors->has('title'))
                            <span class="help-block with-errors">
                                {{ $errors->first('title') }}
                            </span>
                            @endif
                            <input class="au-input au-input-2" type="text" placeholder="Title*" readonly value="{{$training->title}}" id="title" name="title">
                        </div>
                        <div class="form-group">
                            @if ($errors->has('last_name'))
                            <span class="help-block with-errors">
                                {{ $errors->first('last_name') }}
                            </span>
                            @endif
                            <input class="au-input au-input-2" type="text" placeholder="Last Name*" readonly value="{{$training->last_name}}" id="last_name" name="last_name">
                        </div>
                        <div class="form-group">
                            @if ($errors->has('first_name'))
                            <span class="help-block with-errors">
                                {{ $errors->first('first_name') }}
                            </span>
                            @endif
                            <input class="au-input au-input-2" type="text" placeholder="First Name*" readonly value="{{$training->first_name}}" id="first_name" name="first_name">
                        </div>
                        <div class="form-group">
                            @if ($errors->has('middle_name'))
                            <span class="help-block with-errors">
                                {{ $errors->first('middle_name') }}
                            </span>
                            @endif
                            <input class="au-input au-input-2" type="text" placeholder="Middle Name*" readonly value="{{$training->middle_name}}" id="middle_name" name="middle_name">
                        </div>
                        <div class="form-group">
                            @if ($errors->has('email'))
                            <span class="help-block with-errors">
                                {{ $errors->first('email') }}
                            </span>
                            @endif
                            <input class="au-input au-input-2" type="email" placeholder="Email Address*" readonly value="{{$training->email}}" id="email" name="email">
                        </div>
                        <div class="form-group">
                            @if ($errors->has('phone_number'))
                            <span class="help-block with-errors">
                                {{ $errors->first('phone_number') }}
                            </span>
                            @endif
                            <input class="au-input au-input-2" type="tel" placeholder="Phone Number*" readonly value="{{$training->phone_number}}" id="phone_number" name="phone_number">
                        </div>
                        <div class="form-group">
                            @if ($errors->has('msg'))
                            <span class="help-block with-errors">
                                {{ $errors->first('msg') }}
                            </span>
                            @endif
                            <textarea class="au-input au-input-2" type="text" style="height: 170px;" placeholder="Message*" id="msg" name="msg"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="au-btn au-btn-primary loading-button" id="myButton" style="margin-bottom: 10px;">
                        <span class="button-text">Submit </span> <span id="spinner-btn" role="status" aria-hidden="true">
                    </button>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function() {
        $("#phone_number").intlTelInput({
            // preferredCountries: ["us", "ca"],
            separateDialCode: true,
            initialCountry: ""
        }).on('countrychange', function(e, countryData) {
            $("#phone_number").val('+' + ($("#phone_number").intlTelInput("getSelectedCountryData").dialCode));
        });
    });

    document.getElementById("myForm").addEventListener("submit", function (event) {
        var button = document.getElementById('myButton');
        var spinner = document.getElementById('spinner-btn');

        spinner.classList.add('loadme');
        button.disabled = true; // Disable the button
    });
</script>

<style>
    .icon-i {
        background: #004a94;
        float: left;
        height: 60px;
        width: 64px;
        text-align: center;
        font-size: 35px;
        line-height: 50px;
        border-radius: 4px;
        color: #fff;
    }

    .second {
        background: #f58634;
    }

    .address h4 {
        margin: 10px 0 0 80px;
    }

    .address p {
        display: block;
        margin: 0 0 0 80px;
    }

    /* Styles for the loading button */
    .loading-button {
        position: relative;
        overflow: hidden;
        transition: background-color 0.3s ease-in-out;
        cursor: pointer;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
    }

    /* Styles for the button text */
    .button-text {
        display: inline-block;
        vertical-align: middle;
        margin-right: 15px;
        /* Adjust as needed to control spacing */
    }

    /* Styles for the loading animation */
    .loadme {
        display: inline-block;
        vertical-align: middle;
        position: absolute;
        top: 50%;
        width: 20px;
        /* Adjust the size of the loader icon */
        height: 20px;
        /* Adjust the size of the loader icon */
        border: 4px solid rgba(255, 255, 255, 0.3);
        border-top: 4px solid #fff;
        border-radius: 60%;
        animation: spin 1s linear infinite;
    }

    /* Keyframes for the loading animation */
    @keyframes spin {
        0% {
            transform: translate(-50%, -50%) rotate(0deg);
        }

        100% {
            transform: translate(-50%, -50%) rotate(360deg);
        }
    }

    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        width: 60%;
        text-align: center;
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
</style>
@endsection