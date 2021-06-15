<!doctype html>
<html lang="en">

<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}">
        <link href="{{ asset('/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset ('/libs/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
        <!-- <link rel="stylesheet" href="{{ asset('/vendor/charts/chartist-bundle/chartist.css') }}"> -->
        <link rel="stylesheet" href="{{ asset('/vendor/charts/morris-bundle/morris.css') }}">
        <link rel="stylesheet" href="{{ asset('/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/vendor/charts/c3charts/c3.css') }}">
        <link rel="stylesheet" href="{{ asset('/vendor/fonts/flag-icon-css/flag-icon.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/vendor/bootstrap-select/css/bootstrap-select.css') }}">


        <link rel="stylesheet"  href="{{ URL :: asset('/vendor/datatables/css/dataTables.bootstrap4.css') }}">
        <link rel="stylesheet"  href="{{ asset('/vendor/datatables/css/buttons.bootstrap4.css') }}">
        <link rel="stylesheet"  href="{{ asset('/vendor/datatables/css/select.bootstrap4.css') }}">
        <link rel="stylesheet"  href="{{ asset('/vendor/datatables/css/fixedHeader.bootstrap4.css') }}">

        <title>Supplier Evaluation</title>
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
    <!-- <script src="{{ asset('/vendor/jquery/jquery-3.3.1.min.js') }}"></script> -->
    <!-- bootstap bundle js -->
    <!-- <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script> -->
    <!-- slimscroll js -->
    <!-- <script src="{{ asset('/vendor/slimscroll/jquery.slimscroll.js') }}"></script> -->
    <!-- main js -->
    <!-- <script src="{{ asset('/libs/js/main-js.js') }}"></script> -->
    <!-- chart chartist js -->
    <!-- <script src="{{ asset('/vendor/charts/chartist-bundle/chartist.min.js') }}"></script> -->
    <!-- sparkline js -->
    <!-- <script src="{{ asset('/vendor/charts/sparkline/jquery.sparkline.js') }}"></script> -->
    <!-- morris js -->
    <!-- <script src="{{ asset('/vendor/charts/morris-bundle/raphael.min.js') }}"></script>
    <script src="{{ asset('/vendor/charts/morris-bundle/morris.js') }}"></script> -->
    <!-- chart c3 js -->
    <!-- <script src="{{ asset('/vendor/charts/c3charts/c3.min.js') }}"></script>
    <script src="{{ asset('/vendor/charts/c3charts/d3-5.4.0.min.js') }}"></script>
    <script src="{{ asset('/vendor/charts/c3charts/C3chartjs.js') }}"></script> -->
    <!-- <script src="{{ asset('/libs/js/dashboard-ecommerce.js') }}"></script> -->
    <!-- <script src="{{ asset('/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('/vendor/slimscroll/jquery.slimscroll.js')}}') }}"></script>
    <script src="{{ asset('/vendor/multi-select/js/jquery.multi-select.js') }}"></script>
    <script src="{{ asset('/libs/js/main-js.js') }}"></script> -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js') }}"></script>
     <script src="{{ asset('/vendor/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('/vendor/datatables/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/vendor/datatables/js/data-table.js') }}"></script>

</body>

</html>
