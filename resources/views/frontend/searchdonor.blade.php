@extends('frontend.layouts.main')
@section('main-container')
    <!--  PAGE HEADING -->

    <section class="page-header" data-stellar-background-ratio="1.2">

        <div class="container">

            <div class="row">

                <div class="col-sm-12 text-center">
                    <h3>
                        Search Donor
                    </h3>
                    <p class="page-breadcrumb">
                        <a href="{{ '/' }}">Home</a> / Search Donor
                    </p>
                </div>

            </div> <!-- end .row  -->

        </div> <!-- end .container  -->

    </section> <!-- end .page-header  -->

    <!--  GALLERY CONTENT  -->

    <section class="section-content-block section-secondary-bg">

        <div class="container">

            <div class="row section-heading-wrapper">

                <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="section-heading">Search Donor</h2>
                </div> <!-- end .col-sm-10  -->

                <div class="col-md-4" style="margin-top: 15px">
                    <div class="form-group">
                      <label for="">State</label>
                      <select class="form-control" name="all_states" id="all_states">
                        <option value="">Select State</option>
                        @foreach ($all_states as $states)
                        <option value="{{$states->state_code}}">{{$states->state_name}}</option>
                        @endforeach
                      </select>
                    </div>
                </div>

                <div class="col-md-4" style="margin-top: 15px">
                    <div class="form-group">
                      <label for="">City</label>
                      <select class="form-control" name="city" id="cities">
                        <option value="">Select State First</option>
                      </select>
                    </div>
                </div>

                <div class="col-md-3" style="margin-top: 15px">
                    <div class="form-group">
                      <label for="">Blood Group</label>
                      <select class="form-control" name="blood_group">
                        <option value="">Blood Group</option>
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
                </div>
                <div class="col-md-1">
                    <a href="">
                    <i class="fa fa-search" style="margin-top:50px"></i>
                </a>
                </div>
            </div> <!-- end .row  -->

        </div> <!--  end .container -->


    </section> <!-- end .section-content-block  -->

@endsection


@push('footer_scripts')
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script>
    $(document).ready(function(){
        $("#all_states").change(function(){
            //get cities from state
            let state_code = $(this).val();
            $.ajax({
                type : "GET",
                url : "/cities",
                data : {state_code : state_code},
                success : function(response){
                    //
                    $("#cities").html(response);
                }
            });
        });
    });
</script>
@endpush
