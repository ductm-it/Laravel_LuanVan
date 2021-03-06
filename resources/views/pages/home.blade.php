     @extends('index')
     @section('content')
     <div class="row">
        <!-- ============================================================== -->
                                <!-- product category  -->
        <!-- ============================================================== -->
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header"> Vendor Category</h5>
                <div class="card-body">
                    <div class="ct-chart-category ct-golden-section" style="height: 315px;"></div>
                    <div class="text-center m-t-40">
                        <span class="legend-item mr-3">
                                <span class="fa-xs text-primary mr-1 legend-tile"><i class="fa fa-fw fa-square-full "></i></span><span class="legend-text">Quality</span>
                        </span>
                        <span class="legend-item mr-3">
                            <span class="fa-xs text-secondary mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                        <span class="legend-text">Price</span>
                        </span>
                        <span class="legend-item mr-3">
                            <span class="fa-xs text-info mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                        <span class="legend-text">Logistic</span>
                        <span class="legend-item mr-3">
                            <span class="fa-xs text-warning mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                        <span class="legend-text">Technology</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end product category  -->
                <!-- product sales  -->
        <!-- ============================================================== -->
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <!-- <div class="float-right">
                            <select class="custom-select">
                                <option selected>Today</option>
                                <option value="1">Weekly</option>
                                <option value="2">Monthly</option>
                                <option value="3">Yearly</option>
                            </select>
                        </div> -->
                    <h5 class="mb-0"> Vendor Chart</h5>
                </div>
                <div class="card-body">
                    <div class="ct-chart-product ct-golden-section"></div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end product sales  -->
        <!-- ============================================================== -->
        <div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12">
            <!-- ============================================================== -->
            <!-- top perfomimg  -->
            <!-- ============================================================== -->
            <div class="card">
                <center><h5 class="card-header">Top List Vendor</h5></center>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table no-wrap p-table">
                            {{-- <thead class="bg-light"> --}}
                                {{-- <tr class="border-0"> --}}
                                    {{-- <th class="border-0">Name vendor</th> --}}
                                    {{-- <th class="border-0">Point</th>
                                    <th class="border-0">Rank</th> --}}
                                {{-- </tr> --}}
                            {{-- </thead>  --}}
                            <tbody>
                            @if (isset($ranking))
                            @foreach ($ranking as $rank)
                                <tr>
                                    <td>{{ $rank->name_vendor}}</td>
                                    {{-- <td>{{$rank->total_point}}</td>
                                    <td>{{ $rank->rank  }}</td> --}}

                                </tr>
                            @endforeach
                            @endif
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end top perfomimg  -->
            <!-- ============================================================== -->
        </div>
    </div>
    @endsection
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
