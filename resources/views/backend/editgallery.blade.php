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
                                <li class="breadcrumb-item">Sliders</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <form action="{{ '/galleries/update_data/'. $edit->id }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="modal-body">
                            <label for="my-input">File</label>
                            <input id="my-input" type="file" name="image">
                           <span> <img src="{{ asset('backend/images/' . $edit->image) }}" alt="img" width="50px"
                                height="50px"></span>
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
            width: 100%;
        }

        table,
        tr {
            margin-top: 5px;
            border: 1px solid black;
            text-align: center;
        }

        .w-5 {
            display: none;
        }

        .leading-5 {
            margin-top: 10px
        }

        .z-0 {
            display: none;

        }

        .formdeit {
            border: 1px solid black !important;
            padding: 10px;
            margin-top: 5px;
        }

        input[type=radio] {
            width: 15px !important;
            height: 15px !important;
            display: table-caption;
        }
    </style>
@endsection
