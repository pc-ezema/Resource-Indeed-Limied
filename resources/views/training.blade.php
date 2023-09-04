@extends('layouts.frontend', ['title' => 'Contact Us'])

@section('breadcrumb')
@includeIf('layouts.breadcrumb', ['title' => 'Training', 'subtitle' => 'Training Course Sign-up'])
@endsection

@section('page-content')
<section class="section bg-white p-t-70 p-b-40">
    <div class="container">
        <div class="row padding-bottom">
            <div class="col-md-2"></div>
            <div class="col-md-8 wow fadeInRight animated" data-wow-delay="4500ms" style="visibility: visible; animation-delay: 450ms; animation-name: fadeInRight;">
                <h3 class="text-block text-black text-center text-bold text-med m-b-40">Training Course Sign-up</h3>
                <p class="text-center">Participant Registration Form</p>
                @if(Session::has('success'))
                <div class="alert alert-success messages" id="status">
                    {{Session::get('success')}}
                </div>
                @endif
                <form class="m-t-30" id="myForm" method="post" action="{{ route('training') }}">
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
                            <input class="au-input au-input-2" type="text" placeholder="Title*" id="title" name="title">
                        </div>
                        <div class="form-group">
                            @if ($errors->has('last_name'))
                            <span class="help-block with-errors">
                                {{ $errors->first('last_name') }}
                            </span>
                            @endif
                            <input class="au-input au-input-2" type="text" placeholder="Last Name*" id="last_name" name="last_name">
                        </div>
                        <div class="form-group">
                            @if ($errors->has('first_name'))
                            <span class="help-block with-errors">
                                {{ $errors->first('first_name') }}
                            </span>
                            @endif
                            <input class="au-input au-input-2" type="text" placeholder="First Name*" id="first_name" name="first_name">
                        </div>
                        <div class="form-group">
                            @if ($errors->has('middle_name'))
                            <span class="help-block with-errors">
                                {{ $errors->first('middle_name') }}
                            </span>
                            @endif
                            <input class="au-input au-input-2" type="text" placeholder="Middle Name*" id="middle_name" name="middle_name">
                        </div>
                        <div class="form-group">
                            @if ($errors->has('email'))
                            <span class="help-block with-errors">
                                {{ $errors->first('email') }}
                            </span>
                            @endif
                            <input class="au-input au-input-2" type="email" placeholder="Email Address*" id="email" name="email">
                        </div>
                        <div class="form-group">
                            @if ($errors->has('company'))
                            <span class="help-block with-errors">
                                {{ $errors->first('company') }}
                            </span>
                            @endif
                            <input class="au-input au-input-2" type="text" placeholder="Company" id="company" name="company">
                        </div>
                        <div class="form-group">
                            @if ($errors->has('position'))
                            <span class="help-block with-errors">
                                {{ $errors->first('position') }}
                            </span>
                            @endif
                            <input class="au-input au-input-2" type="text" placeholder="Position*" id="position" name="position">
                        </div>
                        <div class="form-group">
                            @if ($errors->has('phone_number'))
                            <span class="help-block with-errors">
                                {{ $errors->first('phone_number') }}
                            </span>
                            @endif
                            <input class="au-input au-input-2" type="tel" placeholder="Phone Number*" id="phone_number" name="phone_number">
                        </div>
                        <div class="form-group">
                            @if ($errors->has('address'))
                            <span class="help-block with-errors">
                                {{ $errors->first('address') }}
                            </span>
                            @endif
                            <textarea class="au-input au-input-2" type="text" style="height: 170px;" placeholder="Address*" id="address" name="address"></textarea>
                        </div>
                        <div class="form-group">
                            @if ($errors->has('zip_code'))
                            <span class="help-block with-errors">
                                {{ $errors->first('zip_code') }}
                            </span>
                            @endif
                            <input class="au-input au-input-2" type="text" placeholder="Zip Code*" id="zip_code" name="zip_code">
                        </div>
                        <div class="form-group">
                            @if ($errors->has('course'))
                            <span class="help-block with-errors">
                                {{ $errors->first('course') }}
                            </span>
                            @endif
                            <select id="course" name="course" class="au-input au-input-2">
                                <option value="">Select Training Courses<sup>*</sup></option>
                                <option value="Healthcare Mandatory Courses">Healthcare Mandatory Courses</option>
                                <option value="Complex and Special Care Training - Module 1& II">Complex and Special Care Training - Module 1& II</option>
                                <option value="Mental Health Training">Mental Health Training</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="au-btn au-btn-primary loading-button" id="myButton">
                        <span class="button-text">Register</span> <span id="spinner-btn" role="status" aria-hidden="true">
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
        margin-right: 15px; /* Adjust as needed to control spacing */
    }

    /* Styles for the loading animation */
    .loadme {
        display: inline-block;
        vertical-align: middle;
        position: absolute;
        top: 50%;
        width: 20px; /* Adjust the size of the loader icon */
        height: 20px; /* Adjust the size of the loader icon */
        border: 4px solid rgba(255, 255, 255, 0.3);
        border-top: 4px solid #fff;
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }

    /* Keyframes for the loading animation */
    @keyframes spin {
        0% { transform: translate(-50%, -50%) rotate(0deg); }
        100% { transform: translate(-50%, -50%) rotate(360deg); }
    }
</style>
@endsection