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
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert-warning">{{ $error }}</div>
                @endforeach
            @endif
            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modelId">
                <i class="fa fa-plus" aria-hidden="true"></i> <span>Add Slider</span>
            </button>



            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Heading</th>
                        <th>Paragraph</th>
                        <th>Status</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($show as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->heading }}</td>
                            <td>{{ $data->paragraph }}</td>
                            <td>{{ $data->status }}</td>
                            <td>
                                <img src="{{ asset('backend/images/' . $data->image) }}" alt="img" width="30px"
                                    height="30px">
                            </td>
                            <td> <a href="{{ '/slider/edit/' . $data->id }}">
                                        <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td><a href="{{ '/slider/delete/' . $data->id }}"><i class="fa fa-trash"></i></a></td>
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
                    <h5 class="modal-title">Slider</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{'/slider'}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <label for="my-input">Heading</label>
                        <input id="my-input" class="form-control formdeit" type="text" name="heading"
                            placeholder="Enter Heading...">

                        <label for="my-input">Paragraph</label>
                        <input id="my-input" class="form-control formdeit" type="text" name="paragraph"
                            placeholder="Enter Paragraph...">

                        <label for="my-input">Status : </label>
                        <span class="d-flex">Active</span>
                        <input id="my-input" type="radio" name="status" value="1" >
                        <span>Deactive</span>
                        <input id="my-input" type="radio" name="status" value="0" >

                        <label for="my-input">File</label>
                        <input id="my-input" type="file" name="image">

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
    </style>
@endsection
