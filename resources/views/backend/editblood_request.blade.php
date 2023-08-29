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
                                <li class="breadcrumb-item">Upadte Blood Request Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <form action="{{ '/blood_request/update_data/' . $brequest->id }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="modal-body">
                            <label for="">Name:</label>
                            <input type="text" name="name" value="{{ $brequest->name }}">

                            <label for="">Mobile:</label>
                            <input type="text" name="number" value="{{ $brequest->number }}">

                            <label for="">Location:</label>
                            <input type="text" name="location" value="{{ $brequest->location }}">

                            <label for="">DOB:</label>
                            <input type="date" name="dob" value="{{ $brequest->dob }}">

                            <div class="form-group">
                                <label for="">Blood Group:</label>
                                <select class="form-control" name="blood_group" id="">
                                    <option value="A+" {{ $brequest->blood_group === 'A+' ? 'Selected' : '' }}>A+
                                    </option>
                                    <option value="A-" {{ $brequest->blood_group === 'A-' ? 'Selected' : '' }}>A-
                                    </option>
                                    <option value="B+" {{ $brequest->blood_group === 'B+' ? 'Selected' : '' }}>B+
                                    </option>
                                    <option value="B-" {{ $brequest->blood_group === 'B-' ? 'Selected' : '' }}>B-
                                    </option>
                                    <option value="O+" {{ $brequest->blood_group === 'O+' ? 'Selected' : '' }}>O+
                                    </option>
                                    <option value="O-" {{ $brequest->blood_group === 'O-' ? 'Selected' : '' }}>O-
                                    </option>
                                    <option value="AB+" {{ $brequest->blood_group === 'AB+' ? 'Selected' : '' }}>AB+
                                    </option>
                                    <option value="AB-" {{ $brequest->blood_group === 'AB-' ? 'Selected' : '' }}>AB-
                                    </option>
                                </select>
                            </div>

                            <label for="my-input">Gender : </label>
                            <span>Male</span>
                            <input id="my-input" type="radio" name="gender" value="m"
                                {{ $brequest->gender == 'm' ? 'checked' : '' }}>
                            <span>Female</span>
                            <input id="my-input" type="radio" name="gender" value="f"
                                {{ $brequest->gender == 'f' ? 'checked' : '' }}>
                            <span>Transgender</span>
                            <input id="my-input" type="radio" name="gender" value="t"
                                {{ $brequest->gender == 't' ? 'checked' : '' }}>
                            <br>
                            <label for="">Blood Unit:</label>
                            <input type="text" name="unit" value="{{ $brequest->unit }}">

                            <div class="form-group">
                                <label for="">Status:</label>
                                <select class="form-control" name="status" id="">
                                    <option value="complete" {{ $brequest->status === 'complete' ? 'Selected' : '' }}>
                                        Complete</option>
                                    <option value="pending" {{ $brequest->status === 'pending' ? 'Selected' : '' }}>
                                        Pending</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="Save" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </div>


    <style>
        label {
            margin-top: 15px;
        }

        input {
            padding: 10px;
            width: 100%;
        }

        table,
        tr {
            margin-top: 5px;
            border: 1px solid black;
            text-align: center;
        }

        .badge-secondary {
            background-color: red;
        }

        input[type=radio] {
            width: 15px !important;
            height: 15px !important;
            display: table-caption;
        }
    </style>
@endsection
