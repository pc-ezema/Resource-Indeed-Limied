<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>{{config('app.name')}}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .info {
            margin-bottom: 15px;
        }
        .info strong {
            display: inline-block;
            width: 180px;
            color: #555;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="#" style="display: flex; justify-content: center;">
            <img src="{{URL::asset('images/icons/ril-logo-02.png')}}" alt="{{config('app.name')}}" width="150px">
        </a>

        <h2>New Training Enrollment</h2>

        <div class="info"><strong>First Name:</strong> {{ $first_name ?? 'N/A' }}</div>
        <div class="info"><strong>Last Name:</strong> {{ $last_name ?? 'N/A' }}</div>
        <div class="info"><strong>Email:</strong> {{ $email ?? 'N/A' }}</div>
        <div class="info"><strong>Phone Number:</strong> {{ $phone_number ?? 'N/A' }}</div>
        <div class="info"><strong>Date of Birth:</strong> {{ $date_of_birth ?? 'N/A' }}</div>
        <div class="info"><strong>Address:</strong> {{ $address ?? 'N/A' }}</div>
        <div class="info"><strong>Course:</strong> {{ $course ?? 'Not Provided' }}</div>
        <div class="info"><strong>Gender:</strong> {{ $gender ?? 'N/A' }}</div>
        <div class="info"><strong>Current Grade:</strong> {{ $current_grade ?? 'N/A' }}</div>
        <div class="info"><strong>Nationality:</strong> {{ $nationality ?? 'N/A' }}</div>
        <div class="info"><strong>Parent Name:</strong> {{ $parent_name ?? 'N/A' }}</div>
        <div class="info"><strong>Relationship:</strong> {{ $relationship ?? 'N/A' }}</div>
        <div class="info"><strong>Medical Conditions:</strong> {{ $medical_conditions ?? 'N/A' }}</div>
        <div class="info"><strong>Medical Details:</strong> {{ $medical_details ?? 'N/A' }}</div>
        <div class="info"><strong>Medications:</strong> {{ $medications ?? 'N/A' }}</div>
        <div class="info"><strong>Medication Details:</strong> {{ $medication_details ?? 'N/A' }}</div>
        <div class="info"><strong>Start Date:</strong> {{ $start_date ?? 'N/A' }}</div>
        <div class="info"><strong>Special Needs:</strong> {{ $special_needs ?? 'N/A' }}</div>
        <div class="info"><strong>Special Needs Details:</strong> {{ $special_needs_details ?? 'N/A' }}</div>
        <div class="info"><strong>Online Recording Consent:</strong> {{ $online_recording_consent ?? 'N/A' }}</div>
        <div class="info"><strong>Photo/Video Consent:</strong> {{ $photo_video_consent ?? 'N/A' }}</div>
        <div class="info"><strong>Payment Plan:</strong> {{ $payment_plan ?? 'N/A' }}</div>
        <div class="info"><strong>Signature Name:</strong> {{ $signature_name ?? 'N/A' }}</div>
        <div class="info"><strong>Signature Date:</strong> {{ $signature_date ?? 'N/A' }}</div>
        <div class="info"><strong>Submitted At:</strong> {{ $created_at ?? now() }}</div>

        <div class="footer">
            <p>Thank you for your enrollment.</p>
        </div>
    </div>

</body>
</html>
