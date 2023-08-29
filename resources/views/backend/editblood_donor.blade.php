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
                                <li class="breadcrumb-item">Upadte blooddonors Details</li>
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

            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <form action="{{ '/blood_blooddonorss/update_data/' . $blooddonors->id }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Name:</label>
                                    <input type="text" name="name" value="{{ $blooddonors->name }}">
                                    <div style="color: red">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="">Mobile:</label>
                                    <input type="text" name="number" value="{{ $blooddonors->number }}">
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
                                        <label for="">State</label>
                                        <select class="form-control" name="state" id="all_states"
                                            value="{{ $blooddonors->state }}">
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
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">City</label>
                                        <select class="form-control" name="city" id="cities"
                                            value="{{ $blooddonors->city }}">

                                            <option value="">Select State First</option>
                                        </select>
                                        <div style="color: red">
                                            @error('city')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Last Date of Blood:</label>
                                        <input type="date" name="ldb" value="{{ $blooddonors->ldb }}">
                                        <div style="color: red">
                                            @error('ldb')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Blood Group:</label>
                                            <select class="form-control" name="blood_group" id="">
                                                <option value="A+"
                                                    {{ $blooddonors->blood_group === 'A+' ? 'Selected' : '' }}>A+
                                                </option>
                                                <option value="A-"
                                                    {{ $blooddonors->blood_group === 'A-' ? 'Selected' : '' }}>A-
                                                </option>
                                                <option value="B+"
                                                    {{ $blooddonors->blood_group === 'B+' ? 'Selected' : '' }}>B+
                                                </option>
                                                <option value="B-"
                                                    {{ $blooddonors->blood_group === 'B-' ? 'Selected' : '' }}>B-
                                                </option>
                                                <option value="O+"
                                                    {{ $blooddonors->blood_group === 'O+' ? 'Selected' : '' }}>O+
                                                </option>
                                                <option value="O-"
                                                    {{ $blooddonors->blood_group === 'O-' ? 'Selected' : '' }}>O-
                                                </option>
                                                <option value="AB+"
                                                    {{ $blooddonors->blood_group === 'AB+' ? 'Selected' : '' }}>
                                                    AB+
                                                </option>
                                                <option value="AB-"
                                                    {{ $blooddonors->blood_group === 'AB-' ? 'Selected' : '' }}>
                                                    AB-
                                                </option>

                                                {{-- comment value --}}
                                                {{-- <?php
                                                $blood_groups = ['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-'];
                                                foreach ($blood_groups as $group) {
                                                    $sel = $blooddonors->blood_group == $group ? 'selected' : '';
                                                    echo "<option $sel>$group<option>";
                                                }
                                                ?> --}}

                                                <div style="color: red">
                                                    @error('blood_group')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Blood Unit:</label>
                                        <input type="text" name="unit" value="{{ $blooddonors->unit }}">
                                        <div style="color: red">
                                            @error('unit')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="my-input">File</label>
                                        <img src="{{ asset('backend/images/' . $blooddonors->image) }}" alt="img"
                                            width="50px" height="50px">
                                        <input type="file" name="image">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="my-input">Gender : </label>
                                        <span>Male</span>
                                        <input id="my-input" type="radio" name="gender" value="m"
                                            {{ $blooddonors->gender == 'm' ? 'checked' : '' }}>
                                        <span>Female</span>
                                        <input id="my-input" type="radio" name="gender" value="f"
                                            {{ $blooddonors->gender == 'f' ? 'checked' : '' }}>
                                        <span>Transgender</span>
                                        <input id="my-input" type="radio" name="gender" value="t"
                                            {{ $blooddonors->gender == 't' ? 'checked' : '' }}>

                                        <div style="color: red">
                                            @error('gender')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
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
