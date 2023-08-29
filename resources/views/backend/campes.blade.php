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
                                <li class="breadcrumb-item">Campes</li>
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

            <!-- [ breadcrumb ] end -->
            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modelId">
                <i class="fa fa-plus" aria-hidden="true"></i><span>Add Campes Details</span>
            </button>

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Camp Name</th>
                        <th>Organised Name</th>
                        <th>Date</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Contact Name</th>
                        <th>Contact Number</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($show as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->organised_by }}</td>
                            <td>{{ $data->date }}</td>
                            <td>{{ $data->address }}</td>
                            <td>{{ $data->city }}</td>
                            <td>{{ $data->state }}</td>
                            <td>{{ $data->person }}</td>
                            <td>{{ $data->number }}</td>
                            <td>{{ $data->status }} </td>
                            <td> <a href="{{ '/camp/edit/' . $data->id }}">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td><a href="{{ '/camp/delete/' . $data->id }}"><i class="fa fa-trash"></i></a></td>
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
                    <h5 class="modal-title">Campes Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ '/camp' }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <label for="">Camp Name:</label>
                        <input type="text" name="name" value="{{ old('name') }}">
                        <div style="color: red">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>
                        <label for="">Organised By:</label>
                        <input type="text" name="organised_by" value="{{ old('organised_by') }}">
                        <div style="color: red">
                            @error('date')
                                {{ $message }}
                            @enderror
                        </div>

                        <label for="">Organised Date:</label>
                        <input type="date" name="date" value="{{ old('date') }}">
                        <div style="color: red">
                            @error('location')
                                {{ $message }}
                            @enderror
                        </div>

                        <label for="">Address:</label>
                        <input type="text" name="address" value="{{ old('address') }}">
                        <div style="color: red">
                            @error('location')
                                {{ $message }}
                            @enderror
                        </div>

                        <label for="">City:</label>
                        <input type="text" name="city" value="{{ old('city') }}">


                        <label for="">State:</label>
                        <input type="text" name="state" value="{{ old('state') }}">

                        <label for="">Contact Person Name :</label>
                        <input type="text" name="person" value="{{ old('person') }}">
                        <div style="color: red">
                            @error('person')
                                {{ $message }}
                            @enderror
                        </div>

                        <label for="">Contact Person Number:</label>
                        <input type="text" name="number" value="{{ old('number') }}">
                        <div style="color: red">
                            @error('number')
                                {{ $message }}
                            @enderror
                        </div>

                        <label for="my-input">Status : </label>
                        <span class="">Active</span>
                        <input id="my-input" type="radio" name="status" value="1">
                        <span>Deactive</span>
                        <input id="my-input" type="radio" name="status" value="0">
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
