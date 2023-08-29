@extends('frontend.layouts.main')
@section('main-container')
    <!--  PAGE HEADING -->

    <section class="page-header" data-stellar-background-ratio="1.2">

        <div class="container">

            <div class="row">

                <div class="col-sm-12 text-center">
                    <h3>
                        Campes
                    </h3>
                    <p class="page-breadcrumb">
                        <a href="{{ '/' }}">Home</a> / Campes
                    </p>
                </div>

            </div> <!-- end .row  -->

        </div> <!-- end .container  -->

    </section> <!-- end .page-header  -->

    <!--  GALLERY CONTENT  -->

    <section class="section-content-block section-secondary-bg">

        <div class="container">

            <div class="row section-heading-wrapper">

                <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="section-heading">Campes</h2>
                </div> <!-- end .col-sm-10  -->

            </div> <!-- end .row  -->
            <div class="row">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Camp Name</th>
                                <th>Organised By</th>
                                <th>Organised Date</th>
                                <th>Contact Person </th>
                                <th>Contact Number</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>State</th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 15px;">
                            @foreach ($campes as $camp)
                                <tr>
                                    <td>{{ $camp->id }}</td>
                                    <td>{{ $camp->name }}</td>
                                    <td>{{ $camp->organised_by }}</td>
                                    <td>{{ $camp->date }}</td>
                                    <td>{{ $camp->person }}</td>
                                    <td>{{ $camp->number }}</td>
                                    <td>{{ $camp->address }}</td>
                                    <td>{{ $camp->city }}</td>
                                    <td>{{ $camp->state }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

        </div> <!--  end .container -->


    </section> <!-- end .section-content-block  -->
    <style>
        .w-5 {
            display: none;
        }

        .leading-5 {
            margin-top: 10px
        }

        .z-0 {
            display: none;

        }
    </style>


@endsection
