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
                                <li class="breadcrumb-item">Upadte Donor Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <form action="{{ '/blood_bank/update_data/' . $bloodbank->id }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="modal-body">
                            <label for="">Hospital Name:</label>
                            <input type="text" name="hname" value="{{ $bloodbank->hname }}">
                            <div style="color: red">
                                @error('hname')
                                    {{ $message }}
                                @enderror
                            </div>

                            <label for="">Camp Name</label>
                            <input type="text" name="cname" value="{{ $bloodbank->cname }}">
                            <div style="color: red">
                                @error('cname')
                                    {{ $message }}
                                @enderror
                            </div>
                            <label for="">Organised_by</label>
                            <input type="text" name="organised_by" value="{{ $bloodbank->organised_by }}">
                            <div style="color: red">
                                @error('organised_by')
                                    {{ $message }}
                                @enderror
                            </div>
                            <label for="">Mobile:</label>
                            <input type="text" name="number" value="{{ $bloodbank->number }}">
                            <div style="color: red">
                                @error('number')
                                    {{ $message }}
                                @enderror
                            </div>
                            <label for="">City:</label>
                            <input type="text" name="city" value="{{ $bloodbank->city }}">
                            <div style="color: red">
                                @error('city')
                                    {{ $message }}
                                @enderror
                            </div>
                            <label for="">State:</label>
                            <input type="text" name="state" value="{{ $bloodbank->state }}">
                            <div style="color: red">
                                @error('state')
                                    {{ $message }}
                                @enderror
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
