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
                                <li class="breadcrumb-item">Blood Donor</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert-warning">{{ $error }}</div>
                @endforeach
            @endif


            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modelId">
                <i class="fa fa-plus" aria-hidden="true"></i> <span>Add Blood Donor</span>
            </button>

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>City</th>
                        <th>state</th>
                        <th>Blood Group</th>
                        <th>Gender</th>
                        <th>Last Date Blood</th>
                        <th>Unit</th>
                        <th>Status</th>
                        <th>Image</th>
                        <th>Action</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blooddonors as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->number }}</td>
                            <td>{{ $data->city}} </td>
                            <td>{{ $data->state =='state_name' ? '$data->state':$data->state }}</td>
                            <td>{{ $data->blood_group }}</td>
                            <td>{{ $data->gender }}</td>
                            <td>{{ $data->ldb }}</td>
                            <td>{{ $data->unit }} Unit</td>
                            <td>{{ $data->status }} </td>
                            <td>
                                <img src="{{ asset('backend/images/' . $data->image) }}" alt="img" width="20px"
                                    height="20px">
                            </td>
                            <td> <a href="{{ '/blood_donors/update-status/' . $data->id }}"><i
                                        class="fa fa-check-square"></i>
                                </a></td>
                            <td> <a href="{{ '/blood_donors/edit/' . $data->id }}">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td><a href="{{ '/blood_donors/delete/' . $data->id }}"><i class="fa fa-trash"></i></a></td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $blooddonors->links() }}
        </div>
    </div>




    <!-- add data Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Blood Donor Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ '/blood_donors' }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <label for="">Name:</label>
                        <input type="text" name="name" value="{{ old('name') }}">
                        <div style="color: red">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>

                        <label for="">Mobile:</label>
                        <input type="text" name="number" value="{{ old('number') }}">
                        <div style="color: red">
                            @error('number')
                                {{ $message }}
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">State</label>
                            <select class="form-control states" name="state" id="all_states" value="{{ old('states') }}">
                                <option value="">Select State</option>
                                @foreach ($all_states as $states)
                                    <option value="{{ $states->state_code }}">{{ $states->state_name }}</option>
                                @endforeach
                            </select>
                            <div style="color: red">
                                @error('state')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">City</label>
                            <select class="form-control cities" name="city" id="cities" value="{{ old('city') }}">
                                <option value="">Select State First</option>
                            </select>
                            <div style="color: red">
                                @error('city')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Blood Group:</label>
                            <select class="form-control" name="blood_group" id="">
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                            </select>
                        </div>
                        <label for="">Last Date Blood Donation:</label>
                        <input type="date" name="ldb" value="{{ old('ldb') }}">


                        <label for="my-input">Gender : </label>
                        <span>Male</span>
                        <input id="my-input" type="radio" name="gender" value="m">
                        <span>Female</span>
                        <input id="my-input" type="radio" name="gender" value="f">
                        <span>Transgender</span>
                        <input id="my-input" type="radio" name="gender" value="t">
                        <div style="color: red">
                            @error('gender')
                                {{ $message }}
                            @enderror
                        </div>

                        <label for="">Blood Unit:</label>
                        <input type="text" name="unit" value="{{ old('unit') }}">
                        <div style="color: red">
                            @error('unit')
                                {{ $message }}
                            @enderror
                        </div>

                        <label for="">Choose File</label>
                        <input type="file" name="image" id="">
                        <div style="color: red">
                            @error('image')
                                {{ $message }}
                            @enderror
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
    </style>
@endsection

@push('footer_scripts')
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script>
        $(document).ready(function() {
            $("#all_states").change(function() {
                //get cities from state
                let state_code = $(this).val();
                $.ajax({
                    type: "GET",
                    url: "/cities",
                    data: {
                        state_code: state_code
                    },
                    success: function(response) {
                        //
                        $("#cities").html(response);
                    }
                });
            });
        });
    </script>
@endpush
