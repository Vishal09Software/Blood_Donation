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
                                <li class="breadcrumb-item">Upadte Campes Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <form action="{{ '/camp/update_data/' . $campes->id }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="modal-body">
                            <label for="">Name:</label>
                            <input type="text" name="name" value="{{ $campes->name }}">

                            <label for="">Organised By:</label>
                            <input type="text" name="organised_by" value="{{ $campes->organised_by }}">

                            <label for="">Organised Date:</label>
                            <input type="date" name="date" value="{{ $campes->date }}">

                            <label for="">Address:</label>
                            <input type="text" name="address" value="{{ $campes->address }}">

                            <label for="">City:</label>
                            <input type="text" name="city" value="{{ $campes->city }}">

                            <label for="">State:</label>
                            <input type="text" name="state" value="{{ $campes->state }}">

                            <label for="">Person:</label>
                            <input type="text" name="person" value="{{ $campes->person }}">

                            <label for="">Number:</label>
                            <input type="text" name="number" value="{{ $campes->number }}">

                            <label for="my-input">Status : </label>
                            <span>Active</span>
                            <input id="my-input" class="form-control" type="radio" name="status" value="1"
                                {{ $campes->status == '1' ? 'checked' : '' }}>

                            <span>Deactive</span>
                            <input id="my-input" class="form-control" type="radio" name="status" value="0"
                                {{ $campes->status == '0' ? 'checked' : '' }}>
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
