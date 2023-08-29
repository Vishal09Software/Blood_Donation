@extends('backend.layouts.main')
@section('main-container')
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
                                <li class="breadcrumb-item">Blood Request</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Care Taker</th>
                        <th>Mobile</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Need Date</th>
                        <th>Blood Group</th>
                        <th>Blood Unit</th>
                        <th>Gender</th>
                        <th>Status</th>
                        <th>Action</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($show as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->cname }}</td>
                            <td>{{ $data->number }}</td>
                            <td>{{ $data->city }}</td>
                            <td>{{ $data->state }}</td>
                            <td>{{ $data->need_date }}</td>
                            <td>{{ $data->blood_group }}</td>
                            <td>{{ $data->unit }} Unit</td>
                            <td>{{ $data->gender }}</td>
                            <td>{{ $data->status }}</td>
                            <td> <a href="{{ 'blood_request/update-status/' . $data->id }}"><i
                                        class="fa fa-check-square"></i>
                                </a></td>
                            <td> <a href="{{ '/blood_request/edit/' . $data->id }}"><i class="fas fa-edit"></i></a></td>
                            <td><a href="{{ '/blood_request/delete/' . $data->id }}"><i class="fa fa-trash"></i></a></td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->
    <style>
        table,
        tr {
            margin-top: 5px;
            border: 1px solid black;
            text-align: center;
        }
    </style>
@endsection
