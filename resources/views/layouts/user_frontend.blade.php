<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | {{config('app.name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="{{config('app.name')}}" name="description" />
    <meta content="{{config('app.name')}}" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{URL::asset('images/icons/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{URL::asset('images/icons/favicon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{URL::asset('images/icons/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{URL::asset('images/icons/apple-touch-icon-114x114.png')}}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap Css -->
    <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{URL::asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- DataTables -->
    <link href="{{URL::asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{URL::asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <!-- dropzone css -->
    <link href="{{URL::asset('assets/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />

    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>

    <script>
        window.setTimeout(function() {
            $(".alert-timeout").fadeTo(500, 0).slideUp(1000, function(){
                $(this).remove();
            });
        }, 8000);
    </script>

</head>

<body data-sidebar="dark" data-layout-mode="light">
    <!-- Alerts  Start-->
    <div style="z-index: 100000; width: 100%; position: absolute; top: 0">
        @include('layouts.alert')
    </div>
    <!-- Alerts End -->
    <!-- Begin page -->
    <div id="layout-wrapper">
        <!-- Header -->
        @includeIf('layouts.user_header')
        <!-- Header Ends -->

        <!-- Sidebar -->
        @includeIf('layouts.user_sidebar')
        <!-- Sidebar Ends -->

        <!-- Page-Content -->
        @yield('page-content')
        <!-- Page-Content Ends -->
    </div>
    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{URL::asset('assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{URL::asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{URL::asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{URL::asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{URL::asset('assets/libs/node-waves/waves.min.js')}}"></script>

    <!-- Required datatable js -->
    <script src="{{URL::asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Buttons examples -->
    <script src="{{URL::asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{URL::asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{URL::asset('assets/libs/jszip/jszip.min.js')}}"></script>
    <script src="{{URL::asset('assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{URL::asset('assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
    <script src="{{URL::asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{URL::asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{URL::asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>

    <!-- Datatable init js -->
    <script src="{{URL::asset('assets/js/pages/datatables.init.js')}}"></script>

    <!-- apexcharts -->
    <script src="{{URL::asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- dashboard init -->
    <script src="{{URL::asset('assets/js/pages/dashboard.init.js')}}"></script>

    <!-- dropzone plugin -->
    <script src="{{URL::asset('assets/libs/dropzone/min/dropzone.min.js')}}"></script>

    <!-- App js -->
    <script src="{{URL::asset('assets/js/app.js')}}"></script>

    <script>
        // Initialize the CKEditor on the textarea
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });

        // Function to update the <p> tag content
        function updateParagraph() {
            // Get the input value
            var inputValue = document.getElementById('applicant_collection_email_address').value;

            // Update the <p> tag content
            document.getElementById('displayText').textContent = inputValue;
        }
    </script>
</body>

</html>
