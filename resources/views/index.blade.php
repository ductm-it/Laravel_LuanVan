<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ URL::asset('backend/vendor/bootstrap/css/bootstrap.min.css') }}">
        <link href="{{ URL::asset('backend/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::asset ('backend/libs/css/style.css') }}">

        <link rel="stylesheet" href="{{ URL::asset('backend/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('backend/vendor/charts/chartist-bundle/chartist.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('backend/vendor/charts/morris-bundle/morris.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('backend/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('backend/vendor/charts/c3charts/c3.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('backend/vendor/fonts/flag-icon-css/flag-icon.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('backend/vendor/bootstrap-select/css/bootstrap-select.css') }}">


        <title>vendor Evaluation</title>
    </head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        @include('layouts.header')
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        @include('layouts.nav')
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">

                    @yield('content')

                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            @include('layouts.footer')
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="{{ URL::asset('backend/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
        <!-- bootstap bundle js -->
        <script src="{{ URL::asset('backend/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
        <!-- slimscroll js -->
        <script src="{{ URL::asset('backend/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
        <!-- main js -->
        <script src="{{ URL::asset('backend/libs/js/main-js.js') }}"></script>

        <!-- <script src="{{ URL::asset('backend/assets/vendor/summernote/js/summernote-bs4.js') }}"></script> -->
        <!-- chart chartist js -->
        <script src="{{ URL::asset('backend/vendor/charts/chartist-bundle/chartist.min.js') }}"></script>
        <!-- sparkline js -->
        <script src="{{ URL::asset('backend/vendor/charts/sparkline/jquery.sparkline.js') }}"></script>
        <!-- morris js -->
        <script src="{{ URL::asset('backend/vendor/charts/morris-bundle/raphael.min.js') }}"></script>
        <script src="{{ URL::asset('backend/vendor/charts/morris-bundle/morris.js') }}"></script>
        <!-- chart c3 js -->
        <script src="{{ URL::asset('backend/vendor/charts/c3charts/c3.min.js') }}"></script>
        <script src="{{ URL::asset('backend/vendor/charts/c3charts/d3-5.4.0.min.js') }}"></script>
        <script src="{{ URL::asset('backend/vendor/charts/c3charts/C3chartjs.js') }}"></script>
        <script src="{{ URL::asset('backend/libs/js/dashboard-ecommerce.js') }}"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
        <script src="{{ URL::asset('backend/vendor/bootstrap-select/js/bootstrap-select.js') }}"></script>
</body>

</html>
