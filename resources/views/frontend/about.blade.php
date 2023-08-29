@extends('frontend.layouts.main')
@section('main-container')

        <!--  PAGE HEADING -->

        <section class="page-header">

            <div class="container">

                <div class="row">

                    <div class="col-sm-12 text-center">

                        <h3>
                            About Us
                        </h3>

                        <p class="page-breadcrumb">
                            <a href="{{'/'}}">Home</a> / About Us
                        </p>


                    </div>

                </div>
                <!-- end .row  -->

            </div>
            <!-- end .container  -->

        </section>
        <!-- end .page-header  -->

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

                                <p>Blood Buddies is for public donation center with blood donation members in the changing health care system.</p>


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
                            <a class="venobox wow bounceIn" data-vbtype="video" data-autoplay="true" href="https://www.youtube.com/watch?v=nrJtHemSPW4"><i class="fa fa-play"></i></a>
                            <img src="{{ url('frontend/images/about_feat_bg.jpg')}}" alt="about" />
                        </figure>
                        <!-- end .cause-img  -->

                    </div>
                    <!--  end .col-lg-6 col-md-6 col-sm-12 col-xs-12  -->

                </div>
                <!--  end .row  -->
            </div>

        </section>
        <!--  end .section-about-us -->

        <div class="container theme-custom-box-shadow  section-pure-white-bg margin-top-48 margin-bottom-48 wow fadeInUp">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="testimonial-container owl-carousel text-left" data-items="1">
                        @foreach ($testiomal as $test )
                        <div class="col-md-12 col-sm-12">
                            <div class="testimony-layout-1">
                                <h3 class="people-quote">Donor Opinion</h3>
                                <p class="testimony-text">
                                    {{$test->paragraph}}
                                </p>
                                <img src="{{ asset('/backend/images/' . $test->image) }}" alt="" />
                                <h6>{{$test->name}}</h6>
                            </div>
                            <!-- end .testimony-layout-1  -->
                        </div>
                        @endforeach
                        <!--  end col-md-10  -->
                    </div>
                    <!--  end .row  -->
                </div>
                <div class="col-lg-6 hidden-md hidden-xs hidden-sm no-padding">
                    <figure>
                        <img src="{{ url('frontend/images/testimony_feat_img.jpg') }}" alt="" class="db" />
                    </figure>
                </div>

            </div>



        </div>

        <!--  COUNTER SECTION 02  -->

        <section class="section-content-block section-secondary-bg">

            <div class="container wow fadeInUp">

                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-center">
                        <h2>OUR ACHIEVEMENTS</h2>
                        <h4>We have been working since 1973 with a prestigious vision to helping patient to provide blood.</h4>
                    </div>
                    <!-- end .col-sm-12  -->

                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="counter-block-1 text-left">

                            <i class="fa fa-heartbeat icon"></i>
                            <span class="counter">2578</span>
                            <h4 class="text-capitalize">Success Smile</h4>

                        </div>

                    </div>
                    <!--  end .col-lg-3  -->

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="counter-block-1 text-left">

                            <i class="fa fa-stethoscope icon"></i>
                            <span class="counter">3235</span>
                            <h4 class="text-capitalize">Happy Donors</h4>

                        </div>

                    </div>
                    <!--  end .col-lg-3  -->

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="counter-block-1 text-left">

                            <i class="fa fa-users icon"></i>
                            <span class="counter">3568</span>
                            <h4 class="text-capitalize">Happy Recipient</h4>

                        </div>

                    </div>
                    <!--  end .col-lg-3  -->

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="counter-block-1 text-left">

                            <i class="fa fa-building icon"></i>
                            <span class="counter">1364</span>
                            <h4 class="text-capitalize">Total Awards</h4>

                        </div>

                    </div>
                    <!--  end .col-lg-3  -->


                </div>
                <!-- end row  -->

            </div>
            <!--  end .container  -->

        </section>

@endsection
