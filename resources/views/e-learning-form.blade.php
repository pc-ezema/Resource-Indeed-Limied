@extends('layouts.frontend', ['title' => 'Contact Us'])

@section('breadcrumb')
@includeIf('layouts.breadcrumb', ['title' => 'E-Learning', 'subtitle' => 'E-Learning Sign-up'])
@endsection

@section('page-content')
<section class="section bg-white p-t-70 p-b-40">
    <div class="container">
        <div class="row padding-bottom">
            <div class="container">
                <h1 class="text-3xl font-bold mb-6">STUDENT ENROLLMENT REGISTRATION FORM</h1>
                <p class="mb-4">Please complete the following form to register your child for enrollment. All fields marked with an asterisk (*) are required.</p>
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
                <form style="margin-top: 5rem;" id="myForm"  action="{{ route('student.enroll') }}" method="POST">
                    <!-- CROSS Site Request Forgery Protection -->
                    @csrf
                    @honeypot
                    <h2 class="text-2xl font-semibold mb-4">Student Information</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                @if ($errors->has('first_name'))
                                <span class="help-block with-errors">
                                    {{ $errors->first('first_name') }}
                                </span>
                                @endif
                                <input class="au-input au-input-2" type="text" placeholder="First Name*" id="first_name" name="first_name" value="{{ old('first_name') }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                @if ($errors->has('last_name'))
                                <span class="help-block with-errors">
                                    {{ $errors->first('last_name') }}
                                </span>
                                @endif
                                <input class="au-input au-input-2" type="text" placeholder="Last Name*" id="last_name" name="last_name" value="{{ old('last_name') }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                @if ($errors->has('date_of_birth'))
                                <span class="help-block with-errors">
                                    {{ $errors->first('date_of_birth') }}
                                </span>
                                @endif
                                <input class="au-input au-input-2" type="date" placeholder="Date of Birth*" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                @if ($errors->has('gender'))
                                <span class="help-block with-errors">
                                    {{ $errors->first('gender') }}
                                </span>
                                @endif
                                <select id="gender" name="gender" class="au-input au-input-2">
                                    <option value="">Select Gender*</option>
                                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                    <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                                    <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                @if ($errors->has('current_grade'))
                                <span class="help-block with-errors">
                                    {{ $errors->first('current_grade') }}
                                </span>
                                @endif
                                <input class="au-input au-input-2" type="text" placeholder="Current Grade/Class*" id="current_grade" name="current_grade" value="{{ old('current_grade') }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                @if ($errors->has('nationality'))
                                <span class="help-block with-errors">
                                    {{ $errors->first('nationality') }}
                                </span>
                                @endif
                                <input class="au-input au-input-2" type="text" placeholder="Nationality*" id="nationality" name="nationality" value="{{ old('nationality') }}">
                            </div>
                        </div>
                    </div>

                    <h2 class="text-2xl font-semibold mb-4 mt-6">Parent/Guardian Information</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                @if ($errors->has('parent_name'))
                                <span class="help-block with-errors">
                                    {{ $errors->first('parent_name') }}
                                </span>
                                @endif
                                <input class="au-input au-input-2" type="text" placeholder="Parent/Guardian Full Name*" id="parent_name" name="parent_name" value="{{ old('parent_name') }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                @if ($errors->has('relationship'))
                                <span class="help-block with-errors">
                                    {{ $errors->first('relationship') }}
                                </span>
                                @endif
                                <select id="relationship" name="relationship" class="au-input au-input-2">
                                    <option value="">Select Relationship*</option>
                                    <option value="father" {{ old('relationship') == 'father' ? 'selected' : '' }}>Father</option>
                                    <option value="mother" {{ old('relationship') == 'mother' ? 'selected' : '' }}>Mother</option>
                                    <option value="guardian" {{ old('relationship') == 'guardian' ? 'selected' : '' }}>Guardian</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                @if ($errors->has('phone_number'))
                                <span class="help-block with-errors">
                                    {{ $errors->first('phone_number') }}
                                </span>
                                @endif
                                <input class="au-input au-input-2" type="tel" placeholder="Phone Number*" id="phone" name="phone_number" value="{{ old('phone_number') }}">
                                <span id="error-msg" style="color: red;"></span>
                                <span id="valid-msg" style="color: green;"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                @if ($errors->has('email'))
                                <span class="help-block with-errors">
                                    {{ $errors->first('email') }}
                                </span>
                                @endif
                                <input class="au-input au-input-2" type="email" placeholder="Email Address*" id="email" name="email" value="{{ old('email') }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                @if ($errors->has('address'))
                                <span class="help-block with-errors">
                                    {{ $errors->first('address') }}
                                </span>
                                @endif
                                <input class="au-input au-input-2" type="text" placeholder="Home Address*" id="address" name="address" value="{{ old('address') }}">
                            </div>
                        </div>
                    </div>

                    <h2 class="text-2xl font-semibold mb-4 mt-6">Medical Information</h2>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Does the student have any known medical conditions or allergies?</label>
                                <div>
                                    <label class="mr-4">
                                        <input type="radio" name="medical_conditions" value="yes" {{ old('medical_conditions') == 'yes' ? 'checked' : '' }}> Yes
                                    </label>
                                    <label>
                                        <input type="radio" name="medical_conditions" value="no" {{ old('medical_conditions') == 'no' ? 'checked' : '' }}> No
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input class="au-input au-input-2" type="text" placeholder="If yes, please specify" id="medical_details" name="medical_details" value="{{ old('medical_details') }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Is the student currently taking any medications?</label>
                                <div>
                                    <label class="mr-4">
                                        <input type="radio" name="medications" value="yes" {{ old('medications') == 'yes' ? 'checked' : '' }}> Yes
                                    </label>
                                    <label>
                                        <input type="radio" name="medications" value="no" {{ old('medications') == 'no' ? 'checked' : '' }}> No
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input class="au-input au-input-2" type="text" placeholder="If yes, please specify" id="medication_details" name="medication_details" value="{{ old('medication_details') }}">
                            </div>
                        </div>
                    </div>

                    <h2 class="text-2xl font-semibold mb-4 mt-6">Enrollment Details</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                @if ($errors->has('start_date'))
                                <span class="help-block with-errors">
                                    {{ $errors->first('start_date') }}
                                </span>
                                @endif
                                <input class="au-input au-input-2" type="date" placeholder="Preferred Start Date*" id="start_date" name="start_date" value="{{ old('start_date') }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Special Educational Needs (if applicable)</label>
                                <div>
                                    <label class="mr-4">
                                        <input type="radio" name="special_needs" value="yes" {{ old('special_needs') == 'yes' ? 'checked' : '' }}> Yes
                                    </label>
                                    <label>
                                        <input type="radio" name="special_needs" value="no" {{ old('special_needs') == 'no' ? 'checked' : '' }}> No
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input class="au-input au-input-2" type="text" placeholder="If yes, please provide details" id="special_needs_details" name="special_needs_details" value="{{ old('special_needs_details') }}">
                            </div>
                        </div>
                    </div>

                    <h2 class="text-2xl font-semibold mb-4 mt-6">Consent and Acknowledgments</h2>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Do you give consent for your child to be recorded during online classes (for educational purposes only)?</label>
                                <div>
                                    <label class="mr-4">
                                        <input type="radio" name="online_recording_consent" value="yes" {{ old('online_recording_consent') == 'yes' ? 'checked' : '' }}> Yes
                                    </label>
                                    <label>
                                        <input type="radio" name="online_recording_consent" value="no" {{ old('online_recording_consent') == 'no' ? 'checked' : '' }}> No
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Do you give consent for the school to take photographs/videos of your child for school activities, events, and promotional purposes?</label>
                                <div>
                                    <label class="mr-4">
                                        <input type="radio" name="photo_video_consent" value="yes" {{ old('photo_video_consent') == 'yes' ? 'checked' : '' }}> Yes
                                    </label>
                                    <label>
                                        <input type="radio" name="photo_video_consent" value="no" {{ old('photo_video_consent') == 'no' ? 'checked' : '' }}> No
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 class="text-2xl font-semibold mb-4 mt-6">Payment Information</h2>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                @if ($errors->has('payment_plan'))
                                <span class="help-block with-errors">
                                    {{ $errors->first('payment_plan') }}
                                </span>
                                @endif
                                <select id="payment_plan" name="payment_plan" class="au-input au-input-2">
                                    <option value="">Select Payment Plan*</option>
                                    <option value="weekly" {{ old('payment_plan') == 'weekly' ? 'selected' : '' }}>Weekly</option>
                                    <option value="monthly" {{ old('payment_plan') == 'monthly' ? 'selected' : '' }}>Monthly</option>
                                    <option value="quarterly" {{ old('payment_plan') == 'quarterly' ? 'selected' : '' }}>Quarterly</option>
                                    <option value="annually" {{ old('payment_plan') == 'annually' ? 'selected' : '' }}>Annually</option>
                                </select>
                            </div>
                        </div>
                        <!-- <div class="col-lg-6">
                            <div class="form-group">
                                @if ($errors->has('payment_method'))
                                <span class="help-block with-errors">
                                    {{ $errors->first('payment_method') }}
                                </span>
                                @endif
                                <select id="payment_method" name="payment_method" class="au-input au-input-2">
                                    <option value="">Select Payment Method*</option>
                                    <option value="bank_transfer" {{ old('payment_method') == 'bank_transfer' ? 'selected' : '' }}>Bank Transfer</option>
                                    <option value="credit_debit_card" {{ old('payment_method') == 'credit_debit_card' ? 'selected' : '' }}>Credit/Debit Card</option>
                                    <option value="other" {{ old('payment_method') == 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                            </div>
                        </div> -->
                    </div>

                    <h2 class="text-2xl font-semibold mb-4 mt-6">Declaration and Signature</h2>
                    <p class="mb-4">I, the undersigned, declare that all the information provided in this registration form is accurate and complete to the best of my knowledge. I have read and agree to the school's terms and conditions, including the payment terms and absentee policy.</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                @if ($errors->has('signature_name'))
                                <span class="help-block with-errors">
                                    {{ $errors->first('signature_name') }}
                                </span>
                                @endif
                                <input class="au-input au-input-2" type="text" placeholder="Parent/Guardian Name*" id="signature_name" name="signature_name" value="{{ old('signature_name') }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                @if ($errors->has('signature_date'))
                                <span class="help-block with-errors">
                                    {{ $errors->first('signature_date') }}
                                </span>
                                @endif
                                <input class="au-input au-input-2" type="date" placeholder="Date*" id="signature_date" name="signature_date" value="{{ old('signature_date') }}">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-6">
                        <div class="col-lg-12">
                            <button type="submit" class="au-btn au-btn-block au-btn-primary m-b-20 loading-button" id="myBtn">
                                <span id="btnText">Submit Enrollment Form</span>
                                <span id="spinner-btn" class="spinner" style="display: none"></span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></script>
<script>
    const input = document.querySelector("#phone");
    const errorMsg = document.querySelector("#error-msg");
    const validMsg = document.querySelector("#valid-msg");
    let validationTimeout;

    // here, the index maps to the error code returned from getValidationError - see readme
    const errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

    // initialise plugin
    const iti = window.intlTelInput(input, {
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/utils.js"
    });

    const updateMessages = () => {
        clearTimeout(validationTimeout);
        reset();
        if (input.value.trim()) {
            validationTimeout = setTimeout(() => {
                if (iti.isValidNumber()) {
                    validMsg.classList.remove("hide");
                } else {
                    input.classList.add("error");
                    const errorCode = iti.getValidationError();
                    errorMsg.innerHTML = errorMap[errorCode];
                    errorMsg.classList.remove("hide");
                }
            }, 300); // Adjust the delay time as needed (in milliseconds)
        }
    };

    document.getElementById("myForm").addEventListener("submit", function (event) {
        var button = document.getElementById('myBtn');
        var btnText = document.getElementById('btnText');
        var spinner = document.getElementById('spinner-btn');

        // Show spinner, disable button, and change text
        spinner.style.display = 'inline-block';
        btnText.textContent = 'Submitting...';
        button.disabled = true;

        // Restore button if submission fails
        setTimeout(() => {
            button.disabled = false;
            btnText.textContent = 'Submit Enrollment Form';
            spinner.style.display = 'none';
        }, 5000); // Adjust timeout based on your backend response time
    });
</script>

<style>
    /* Loading Spinner */
    .spinner {
        position: absolute;
        /* top: 33%; */
        width: 15px;
        height: 15px;
        margin-left: 13px;
        border: 3px solid rgba(255, 255, 255, 0.3);
        border-top: 3px solid #fff;
        border-radius: 50%;
        display: inline-block;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>
@endsection

