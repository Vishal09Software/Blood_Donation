@extends('frontend.layouts.main')
@section('main-container')

    <!--  PAGE HEADING -->

    <section class="page-header" data-stellar-background-ratio="1.2">

        <div class="container">

            <div class="row">

                <div class="col-sm-12 text-center">
                    <h3>
                        Gallery
                    </h3>
                    <p class="page-breadcrumb">
                        <a href="{{ '/' }}">Home</a> / Gallery
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
                    <h2 class="section-heading"><span>Photo</span> Gallery</h2>
                    <p class="section-subheading">
                        Campaign photos of different parts of world and our prestigious voluntary work
                    </p>
                </div> <!-- end .col-sm-10  -->

            </div> <!-- end .row  -->

        </div> <!--  end .container -->

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
            </div> <!-- end .row  -->

        </div><!-- end .container-fluid  -->

    </section> <!-- end .section-content-block  -->


@endsection

