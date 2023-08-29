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
                                <li class="breadcrumb-item">Donor Opinion</li>
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
                <i class="fa fa-plus" aria-hidden="true"></i> <span>Donor Opinion</span>
            </button>



            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Donor Opinion Name</th>
                        <th>Donor Opinion Paragraph</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($show as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ Str::limit($data->paragraph, 50) }}</td>

                            <td>
                                <img src="{{ asset('backend/images/' . $data->image) }}" alt="img" width="30px"
                                    height="30px">
                            </td>
                            <td> <a href="{{ '/testimonal_slider/edit/' . $data->id }}">
                                        <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td><a href="{{ '/testimonal_slider/delete/' . $data->id }}"><i class="fa fa-trash"></i></a></td>
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
                    <h5 class="modal-title">Donor Opinion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{'/testimonal_slider'}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <label for="my-input">Donor Opinion Name</label>
                        <input id="my-input" class="form-control formdeit" type="text" name="name"
                            placeholder="Enter Heading...">

                        <label for="my-input">Donor Opinion Detail</label>
                        <input id="my-input" class="form-control formdeit" type="text" name="paragraph"
                            placeholder="Enter Paragraph...">

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
