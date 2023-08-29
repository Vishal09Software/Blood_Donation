@extends('backend.layouts.main')
@section('main-container')
    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Blood Donation Portal</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ '/dashboard' }}"><i
                                            class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item">Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- table card-1 start -->
                <div class="col-md-12 col-xl-12">
                    <div class="card flat-card">
                        <div class="row-table">
                            <div class="col-sm-6 card-body br">
                                <div class="row">
                                    <div class="col-sm-12 text-md-center">
                                        <h5>{{$blooddonors}}</h5>
                                        <span>Blood Donors</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 card-body">
                                <div class="row">
                                    <div class="col-sm-12 text-md-center">
                                        <h5>{{$bloodrequest}}</h5>
                                        <span>Blood Requests</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-table">
                            <div class="col-sm-6 card-body br">
                                <div class="row">

                                    <div class="col-sm-12 text-md-center">
                                        <h5>{{$bloodbank}}</h5>
                                        <span>Blood Banks</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 card-body">
                                <div class="row">

                                    <div class="col-sm-12 text-md-center">
                                        <h5>120</h5>
                                        <span>Calls</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- table card-1 end -->
                <!-- table card-2 start -->
                {{-- <div class="col-md-12 col-xl-4">
                    <div class="card flat-card">
                        <div class="row-table">
                            <div class="col-sm-6 card-body br">
                                <div class="row">

                                    <div class="col-sm-12 text-md-center">
                                        <h5>1000</h5>
                                        <span>A+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 card-body">
                                <div class="row">

                                    <div class="col-sm-12 text-md-center">
                                        <h5>600</h5>
                                        <span>A-</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-table">
                            <div class="col-sm-6 card-body br">
                                <div class="row">

                                    <div class="col-sm-12 text-md-center">
                                        <h5>3550</h5>
                                        <span>B+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 card-body">
                                <div class="row">

                                    <div class="col-sm-12 text-md-center">
                                        <h5>100%</h5>
                                        <span>B-</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- table card-2 end -->
                <!-- Widget primary-success card start -->
                {{-- <div class="col-md-12 col-xl-4">
                    <div class="card flat-card">
                        <div class="row-table">
                            <div class="col-sm-6 card-body br">
                                <div class="row">

                                    <div class="col-sm-12 text-md-center">
                                        <h5>1000</h5>
                                        <span>O+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 card-body">
                                <div class="row">

                                    <div class="col-sm-12 text-md-center">
                                        <h5>600</h5>
                                        <span>O-</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-table">
                            <div class="col-sm-6 card-body br">
                                <div class="row">

                                    <div class="col-sm-12 text-md-center">
                                        <h5>3550</h5>
                                        <span>AB+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 card-body">
                                <div class="row">

                                    <div class="col-sm-12 text-md-center">
                                        <h5>100%</h5>
                                        <span>AB-</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- Widget primary-success card end -->

            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
@endsection
