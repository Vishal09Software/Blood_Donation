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
                                <li class="breadcrumb-item">Blood Bank</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert-warning">{{ $error }}</div>
                @endforeach
            @endif

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modelId">
                <i class="fa fa-plus" aria-hidden="true"></i><span>Add Blood Bank</span>
            </button>

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Hospital Name</th>
                        <th>Camp Name</th>
                        <th>Organised_by</th>
                        <th>Hospital Contact Number</th>
                        <th>City</th>
                        <th>state</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($show as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->hname }}</td>
                            <td>{{ $data->cname }}</td>
                            <td>{{ $data->organised_by }}</td>
                            <td>{{ $data->number }}</td>
                            <td>{{ $data->city }}</td>
                            <td>{{ $data->state }}</td>
                            <td> <a href="{{ '/blood_bank/edit/' . $data->id }}">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td><a href="{{ '/blood_bank/delete/' . $data->id }}"><i class="fa fa-trash"></i></a></td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $show->links() }}
        </div>
    </div>




    <!-- add data Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Blood Bank Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ '/blood_bank' }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Hospital Name:</label>
                                <input type="text" name="hname" value="{{ old('hname') }}">
                                <div style="color: red">
                                    @error('hname')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="">Camp Name:</label>
                                <input type="text" name="cname" value="{{ old('cname') }}">
                                <div style="color: red">
                                    @error('cname')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Organised_by:</label>
                                <input type="text" name="organised_by" value="{{ old('organised_by') }}">
                                <div style="color: red">
                                    @error('organised_by')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="">Mobile:</label>
                                <input type="text" name="number" value="{{ old('number') }}">
                                <div style="color: red">
                                    @error('number')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">City:</label>
                                    <input type="text" name="city" value="{{ old('city') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">State:</label>
                                    <input type="text" name="state" value="{{ old('state') }}">
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="Save" class="btn btn-primary">Save</button>
                        </div>
                </form>
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

        .w-5 {
            display: none;
        }

        .leading-5 {
            margin-top: 10px
        }

        .z-0 {
            display: none;

        }

        input[type=radio] {
            width: 15px !important;
            height: 15px !important;
            display: table-caption;
        }
    </style>
@endsection

