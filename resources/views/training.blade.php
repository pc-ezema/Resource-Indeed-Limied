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
                @if(Session::has('danger'))
                <div class="alert alert-danger messages" id="status">
                    {{Session::get('danger')}}
                </div>
                @endif
                <form class="m-t-30" id="myForm" method="post" action="{{ route('training') }}">
                    <!-- CROSS Site Request Forgery Protection -->
                    @csrf
                    @honeypot
                    <div class="row au-form-group">
                        <div class="form-group">
                            @if ($errors->has('course'))
                            <span class="help-block with-errors">
                                {{ $errors->first('course') }}
                            </span>
                            @endif
                            <select id="course" name="course" class="au-input au-input-2">
                                <option value="">Select Training Courses<sup>*</sup></option>
                                <option value="LEVEL 5 DIPLOMA IN LEADERSHIP FOR HEALTH AND SOCIAL CARE AND CHILDREN AND YOUNG PEOPLE’S SERVICES (ENGLAND) (RQF)">LEVEL 5 DIPLOMA IN LEADERSHIP FOR HEALTH AND SOCIAL CARE AND CHILDREN AND YOUNG PEOPLE’S SERVICES (ENGLAND) (RQF) - 9-12 months</option>
                                <option value="LEVEL 5 DIPLOMA IN LEADERSHIP AND MANAGEMENT FOR RESIDENTIAL CHILDCARE">LEVEL 5 DIPLOMA IN LEADERSHIP AND MANAGEMENT FOR RESIDENTIAL CHILDCARE - 9-12 months</option>
                                <option value="LEVEL 5 DIPLOMA IN LEADERSHIP AND MANAGEMENT FOR ADULT CARE">LEVEL 5 DIPLOMA IN LEADERSHIP AND MANAGEMENT FOR ADULT CARE - 9-12 months</option>
                                <option value="LEVEL 5 DIPLOMA IN LEADERSHIP FOR HEALTH AND SOCIAL CARE AND CHILDREN AND YOUNG PEOPLE'S SERVICES (ENGLAND) (CHILDREN AND YOUNG PEOPLE'S MANAGEMENT)">LEVEL 5 DIPLOMA IN LEADERSHIP FOR HEALTH AND SOCIAL CARE AND CHILDREN AND YOUNG PEOPLE'S SERVICES (ENGLAND) (CHILDREN AND YOUNG PEOPLE'S MANAGEMENT) - 9-12 months</option>
                                <option value="LEVEL 5 DIPLOMA IN EDUCATION AND TRAINING">LEVEL 5 DIPLOMA IN EDUCATION AND TRAINING - 9-12 months</option>
                                <option value="LEVEL 3 DIPLOMA IN ADULT CARE">LEVEL 3 DIPLOMA IN ADULT CARE - 4-6 months</option>
                                <option value="FOCUS AWARDS LEVEL 3 DIPLOMA FOR THE CHILDREN AND YOUNG PEOPLE’S WORKFORCE (RQF)">FOCUS AWARDS LEVEL 3 DIPLOMA FOR THE CHILDREN AND YOUNG PEOPLE’S WORKFORCE (RQF) - 9-12 months</option>
                                <option value="LEVEL 2 DIPLOMA IN CARE">LEVEL 2 DIPLOMA IN CARE - 3-4 months</option>
                                <option value="LEVEL 2 FUNCTIONAL SKILLS IN MATH">LEVEL 2 FUNCTIONAL SKILLS IN MATH - 55 hours</option>
                                <option value="LEVEL 2 FUNCTIONAL SKILLS IN ENGLISH">LEVEL 2 FUNCTIONAL SKILLS IN ENGLISH - 55 hours</option>
                                <option value="LEVEL 3 AWARD IN EMERGENCY FIRST AID AT WORK">LEVEL 3 AWARD IN EMERGENCY FIRST AID AT WORK - 1 day</option>
                                <option value="LEVEL 3 AWARD IN FIRST AID AT WORK">LEVEL 3 AWARD IN FIRST AID AT WORK - 3 days</option>
                                <option value="LEVEL 3 AWARD IN PAEDIATRICS FIRST AID">LEVEL 3 AWARD IN PAEDIATRICS FIRST AID - 2 days</option>
                                <option value="LEVEL 2 SAFEGUARDING OF CHILDREN">LEVEL 2 SAFEGUARDING OF CHILDREN - 3 months</option>
                                <option value="LEVEL 2 FOOD HYGIENE">LEVEL 2 FOOD HYGIENE - 4 weeks</option>
                                <option value="UNDERSTAND HOW TO SET UP A HOME-BASED CHILDCARE SERVICE + Safeguarding children + Food Hygiene">UNDERSTAND HOW TO SET UP A HOME-BASED CHILDCARE SERVICE + Safeguarding children + Food Hygiene - 4 weeks</option>
                                <option value="LEVEL 3 AWARD IN EMERGENCY PAEDIATRICS FIRST AID">LEVEL 3 AWARD IN EMERGENCY PAEDIATRICS FIRST AID - 1 day</option>
                                <option value="HEALTH AND SOCIAL CARE MANDATORY TRAINING">HEALTH AND SOCIAL CARE MANDATORY TRAINING - 1 day</option>
                                <option value="LEVEL 2 AWARD FOR WORKING AS A SECURITY OFFICER WITHIN THE PRIVATE SECURITY INDUSTRY + FIRST AID">LEVEL 2 AWARD FOR WORKING AS A SECURITY OFFICER WITHIN THE PRIVATE SECURITY INDUSTRY + FIRST AID - 6 days</option>
                                <option value="LEVEL 2 AWARD FOR WORKING AS A DOOR SUPERVISOR WITHIN THE PRIVATE SECURITY INDUSTRY + FIRST AID">LEVEL 2 AWARD FOR WORKING AS A DOOR SUPERVISOR WITHIN THE PRIVATE SECURITY INDUSTRY + FIRST AID - 6 days</option>
                                <option value="LEVEL 2 AWARD FOR UPSKILLING A DOOR SUPERVISOR WITHIN THE PRIVATE SECURITY INDUSTRY + FIRST AID">LEVEL 2 AWARD FOR UPSKILLING A DOOR SUPERVISOR WITHIN THE PRIVATE SECURITY INDUSTRY + FIRST AID - 3 days</option>
                                <option value="PREVENTION AND MANAGEMENT OF VIOLENCE AND AGGRESSION (PMVA)">PREVENTION AND MANAGEMENT OF VIOLENCE AND AGGRESSION (PMVA) - 3 days</option>
                            </select>
                        </div>
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
                                    @if ($errors->has('middle_name'))
                                    <span class="help-block with-errors">
                                        {{ $errors->first('middle_name') }}
                                    </span>
                                    @endif
                                    <input class="au-input au-input-2" type="text" placeholder="Middle Name*" id="middle_name" name="middle_name">
                                </div>
                            </div>
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
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    @if ($errors->has('phone_number'))
                                    <span class="help-block with-errors">
                                        {{ $errors->first('phone_number') }}
                                    </span>
                                    @endif
                                    <input class="au-input au-input-2" type="tel" placeholder="Phone Number*" id="phone_number" name="phone_number">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    @if ($errors->has('date_of_birth'))
                                    <span class="help-block with-errors">
                                        {{ $errors->first('date_of_birth') }}
                                    </span>
                                    @endif
                                    <input class="au-input au-input-2" type="text" placeholder="Date of birth*" id="date_of_birth" name="date_of_birth">
                                </div>
                            </div>
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
                                <!-- <option value="Complex and Special Care Training - Module 1& II">Complex and Special Care Training - Module 1& II</option>
                                <option value="Mental Health Training">Mental Health Training</option> -->
                            </select>
                            <p id="Healthcare" style="display: none;"><span style="color: red;">Note:</span> The training fee is <span style="font-weight: 700;">£75</span> (Exc.VAT).</p>
                        </div>
                    </div>
                    <button type="button" class="au-btn au-btn-primary" id="myBtn">
                        <span class="button-text">Register</span>
                    </button>
                    <!-- The Modal -->
                    <div id="myModal" class="modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <div class="row">
                                <input type="submit" class="au-btn au-btn-primary loading-button" name="pay_by_transfer" value="Pay By Transfer" style="margin-bottom: 10px;">
                                <button type="submit" class="au-btn au-btn-primary loading-button" style="margin-bottom: 10px;">
                                    <span class="button-text">Pay By Card</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>
<script>
    // Get references to the select element and divs
    const dropdown = document.getElementById("course");
        const div1 = document.getElementById("Healthcare");

        // Add an event listener to the dropdown
        dropdown.addEventListener("change", function() {
        // Get the selected value
        const selectedValue = dropdown.value;

        // Hide all divs
        div1.style.display = "none";

        // Display the selected div
        if (selectedValue === "Healthcare Mandatory Courses") {
            div1.style.display = "block";
        } else {
            div1.style.display = "none";
        }
    });

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

    // Get the modal
    var modal = document.getElementById("myModal");
    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
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
