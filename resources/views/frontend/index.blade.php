@extends('frontend.layouts.main')
@section('main-container')
    <!--  HOME SLIDER BLOCK  -->

    <div class="slider-wrap">
        <div id="slider_1" class="owl-carousel" data-nav="true" data-dots="false" data-autoplay="true"
            data-autoplaytimeout="17000">

            @foreach ($slider as $slideritem)
                <div class="slider_item_container" data-bg_img="{{ asset('/backend/images/' . $slideritem->image) }}"
                    data-bg_color="#555555" data-bg_opacity="0.0">
                    <div class="item">
                        <div class="slider-content">
                            <div class="container text-left">
                                <div class="row">
                                    <div class="slider-bg">
                                        <div class="col-sm-12 wow zoomInUp" data-wow-duration="1s">
                                            <h3>{{ $slideritem->paragraph }}</h3>
                                            <h2>{{ $slideritem->heading }}
                                            </h2>
                                            {{-- <a href="{{'/campes'}}" class="btn btn-theme margin-top-24">Donate Now</a> --}}

                                            <button type="button" class="btn btn-theme btn-lg margin-top-24"
                                                data-toggle="modal" data-target="#modelId">
                                                Need Blood ?
                                            </button>

                                            <button type="button" class="btn btn-theme btn-lg margin-top-24"
                                                data-toggle="modal" data-target="#modelId2">
                                                Become A Donor
                                            </button>
                                        </div>
                                    </div>
                                    <!-- end .col-sm-12  -->
                                </div>
                                <!-- end .row  -->
                            </div>
                            <!-- end .container -->
                        </div>
                        <!--  end .slider-content -->
                    </div>
                    <!-- end .item  -->
                </div>
                <!-- end .slider_item_container  -->
            @endforeach
            <!-- end .slider_item_container  -->

        </div>
        <!-- end .slider_1  -->
    </div>
    <!-- end .slider-wrap.  -->

    <!--  FEATURED ABOUT US SECTION-->

    <section class="section-content-block">

        <div class="container">

            <div class="row">

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">

                    <div class="about-us-container theme-custom-box-shadow">

                        <div class="row section-heading-wrapper margin-bottom-11">

                            <div class="col-lg-12 col-md-12 col-sm-12 text-left no-img-separator">
                                <h2><strong>Who We Are?</strong></h2>
                                <span class="heading-separator heading-separator-horizontal"></span>
                            </div>
                            <!-- end .col-sm-10  -->

                        </div>

                        <div class="about-details">
                            <p>Blood Buddies is for public donation center with blood donation members in the changing
                                health care system.</p>
                            <ul class="custom-bullet-list">
                                <li>Specialist blood donors and clinical supervision.</li>
                                <li>Increasing communication with our members.</li>
                                <li>High quality assessment, diagnosis and treatment.</li>
                                <li>Examine critically to ensure alignment.</li>
                                <li>The extra care of a multi-disciplinary team.</li>
                            </ul>

                        </div>
                        <!--  end .about-details -->

                    </div>

                </div>
                <!--  end .col-lg-6 col-md-6 col-sm-12 col-xs-12 -->


                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">

                    <figure class="about-img theme-custom-box-shadow">
                        <a class="venobox wow bounceIn" data-vbtype="video" data-autoplay="true"
                            href="https://youtu.be/kOISEM6L4xk"><i class="fa fa-play"></i></a>
                        <img src="{{ url('frontend/images/about_feat_bg.jpg') }}" alt="about" />
                    </figure>
                    <!-- end .cause-img  -->

                </div>
                <!--  end .col-lg-6 col-md-6 col-sm-12 col-xs-12  -->

            </div>
            <!--  end .row  -->
        </div>

    </section>
    <!--  end .section-about-us -->

    <!-- SECTION TESTIMONIAL   -->

    <section class=" section-custom-bg" data-bg_position='top center' data-bg_opacity="0">
        <div class="container ">
            <div class="row ">
                <div class="col-md-12 col-sm-12 text-center no-img-separator">
                    <h2 class="extra-large">Soical Media Posts</h2>
                    <span class="heading-separator heading-separator-horizontal"></span>
                    <div class="row">
                        <h4>Facebook Posts</h4>
                        <div class="col-lg-3">
                            <img src="{{ url('frontend/images/testimony_feat_img.jpg') }}" alt="">
                        </div>

                    </div>

                    {{-- <div class="row">
                        <h4>Instagram Posts</h4>
                        <div class="col-lg-2">
                            <img src="{{ url('frontend/images/testimony_feat_img.jpg') }}" alt="">
                        </div>
                        <div class="col-lg-2">
                            <img src="{{ url('frontend/images/testimony_feat_img.jpg') }}" alt="">
                        </div>
                        <div class="col-lg-2">
                            <img src="{{ url('frontend/images/testimony_feat_img.jpg') }}" alt="">
                        </div>
                        <div class="col-lg-2">
                            <img src="{{ url('frontend/images/testimony_feat_img.jpg') }}" alt="">
                        </div>
                        <div class="col-lg-2">
                            <img src="{{ url('frontend/images/testimony_feat_img.jpg') }}" alt="">
                        </div>
                        <div class="col-lg-2">
                            <img src="{{ url('frontend/images/testimony_feat_img.jpg') }}" alt="">
                        </div>
                    </div> --}}
                </div>
                <!-- end .col-sm-10  -->
            </div>
        </div>
        <!-- end .container  -->
    </section>



    <!--  SECTION GALLERY  -->

    <section class="section-content-block section-pure-white-bg">

        <div class="container">

            <div class="row section-heading-wrapper">

                <div class="col-md-12 col-sm-12 text-center no-img-separator">
                    <h2>CAMPAIGN GALLERY</h2>
                    <span class="heading-separator"></span>
                    <h4>our prestigious voluntary work on campaigns by the team</h4>
                </div>
                <!-- end .col-sm-10  -->


            </div>
            <!-- end .row  -->

        </div>
        <!--  end .container -->

        <div class="container wow fadeInUp">

            <div class="row no-padding-gallery">

                @foreach ($gallery as $gallerydata)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                        <a class="gallery-light-box" data-gall="myGallery"
                            href="{{ asset('/backend/images/' . $gallerydata->image) }}">
                            <figure class="gallery-img">
                                <img src="{{ asset('/backend/images/' . $gallerydata->image) }}" alt="gallery image" />
                            </figure>
                            <!-- end .gallery-img  -->
                        </a>
                    </div>
                @endforeach

                <!-- end .col-sm-3  -->

            </div>
            <!-- end .container-fluid  -->

    </section>
    <!-- end .section-content-block  -->

    <!-- HIGHLIGHT CTA  -->


    <!-- START FOOTER  -->

    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Need Blood ?</h5>
                </div>
                <div class="modal-body">
                    @if (session('status'))
                        <h6 class="alert alert-success">{{ session('status') }}</h6>
                    @endif

                    <form action="{{ '/' }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group col-md-12">
                            <label for="">Patient Name</label>
                            <input id="your_name" class="form-control" placeholder=" Patient Name" type="text"
                                name="name">
                            <div style="color: red">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Care Taker</label>
                            <input id="your_name" class="form-control" placeholder="Care Taker Name " type="text"
                                name="cname">
                            <div style="color: red">
                                @error('cname')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="">Blood Group</label>
                            <select class="form-control" name="blood_group" id="your_email">
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                            </select>
                            <div style="color: red">
                                @error('blood_group')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Mobile Number</label>
                            <input id="your_phone" class="form-control" placeholder="Phone" type="text"
                                name="number">
                            <div style="color: red">
                                @error('number')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="">State</label>
                            <select class="form-control states" name="state" id="all_states">
                                <option value="">Select State</option>
                                @foreach ($all_states as $states)
                                    <option value="{{ $states->state_code }}">{{ $states->state_name }}</option>
                                @endforeach
                            </select>
                            <div style="color: red">
                                @error('image')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="">City</label>
                            <select class="form-control cities" name="city" id="cities">
                                <option value="">Select State First</option>
                            </select>
                            <div style="color: red">
                                @error('city')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>


                        <div class="form-group col-md-12">
                            <label for="">Blood Need Date</label>
                            <input id="your_time" class="form-control" placeholder="Date Of Birth" type="date"
                                name="need_date">
                            <div style="color: red">
                                @error('need_date')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="">Blood Unit</label>
                            <input id="your_time" class="form-control" placeholder="Blood Unit" type="text"
                                name="unit">
                            <div style="color: red">
                                @error('unit')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="">Gender</label>
                            <select class="form-control" name="gender" id="">
                                <option value="m">Male</option>
                                <option value="f">Female</option>
                                <option value="t">Transgender</option>
                            </select>
                            <div style="color: red">
                                @error('gender')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="save" class="btn btn-theme">Request
                        Send</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modelId2" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Become A Donor</h5>
                </div>
                <div class="modal-body">
                    @if (session('status'))
                        <h6 class="alert alert-success">{{ session('status') }}</h6>
                    @endif

                    <form action="{{ '/' }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group col-md-12">
                            <label for="">Donor Name</label>
                            <input id="your_name" class="form-control" placeholder="Donor Name" type="text"
                                name="name">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>

                        <div class="form-group col-md-12">
                            <label for="">Blood Group</label>
                            <select class="form-control" name="blood_group" id="your_email">
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                            </select>
                            @error('blood_group')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Mobile Number</label>
                            <input id="your_phone" class="form-control" placeholder="Phone" type="text"
                                name="number">
                            @error('number')
                                {{ $message }}
                            @enderror
                        </div>

                        <div class="form-group col-md-12">
                            <label for="">State</label>
                            <select class="form-control states" name="state" id="all_states">
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

                        <div class="form-group col-md-12">
                            <label for="">City</label>
                            <select class="form-control cities" name="city" id="cities">
                                <option value="">Select State First</option>
                            </select>
                            <div style="color: red">
                                @error('city')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="">Last Date Blood Donation</label>
                            <input id="your_time" class="form-control" placeholder="Date Of Birth" type="date"
                                name="ldb">
                            @error('ldb')
                                {{ $message }}
                            @enderror
                        </div>

                        <div class="form-group col-md-12">
                            <label for="">Blood Unit</label>
                            <input id="your_time" class="form-control" placeholder="Blood Unit" type="text"
                                name="unit">
                            @error('unit')
                                {{ $message }}
                            @enderror
                        </div>

                        <div class="form-group col-md-12">
                            <label for="">Gender</label>
                            <select class="form-control" name="gender" id="">
                                <option value="m">Male</option>
                                <option value="f">Female</option>
                                <option value="t">Transgender</option>
                            </select>
                            @error('gender')
                                {{ $message }}
                            @enderror
                        </div>

                        <div class="form-group col-md-12">
                            <label for="">Choose File</label>
                            <input id="your_time" class="form-control" placeholder="Blood Unit" type="file"
                                name="image">
                            @error('image')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="save" class="btn btn-theme">Request Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        .btn-theme:focus {
            outline: none;
        }
    </style>
@endsection

@push('footer_scripts')
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script>
        $(document).ready(function() {
            $(".states").change(function() {
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
                        $(".cities").html(response);
                    }
                });
            });
        });
    </script>
@endpush
