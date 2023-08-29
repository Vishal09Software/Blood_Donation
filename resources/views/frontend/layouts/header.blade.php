<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Blood Buddies</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Reddrop Buddies - Blood Donation Campaign & Multi-Concept Activism Template">
    <meta name="author" content="xenioushk">
    <link rel="shortcut icon" href="{{ url('frontend/images/favicon.png') }}" />

    <!-- The styles -->
    <link rel="stylesheet" href="{{ url('frontend/css/bootstrap.min.css') }}" />
    <link href="{{ url('frontend/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('frontend/css/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('frontend/css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('frontend/css/venobox.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ url('frontend/css/styles.css') }}" />

<body>

    {{-- <div id="preloader">
            <span class="margin-bottom"><img src="{{ url('frontend/images/loader.gif') }}" alt="" /></span>
        </div> --}}

    <!--  HEADER -->

    <header class="main-header clearfix" data-sticky_header="true">

        <div class="top-bar clearfix">

            <div class="container">

                <div class="row">

                    <div class="col-md-8 col-sm-12">

                        <p>
                            <span><i class="fa fa-building-o"></i> <strong>Contact: </strong> East Shibgonj, Sylhet,
                                3100</span>
                            <span>&nbsp;<i class="fa fa-phone"></i> <strong>Call Us:</strong> +880-1891-82709</span>
                        </p>

                    </div>

                    <div class="col-md-4col-sm-12">
                        <div class="top-bar-social">
                            <a href="#"><i class="fa fa-facebook rounded-box"></i></a>
                            <a href="#"><i class="fa fa-twitter rounded-box"></i></a>
                            <a href="#"><i class="fa fa-google-plus rounded-box"></i></a>
                            <a href="#"><i class="fa fa-instagram rounded-box"></i></a>
                            <a href="#"><i class="fa fa-youtube rounded-box"></i></a>
                        </div>
                    </div>

                </div>

            </div>
            <!--  end .container -->

        </div>
        <!--  end .top-bar  -->

        <section class="header-wrapper navgiation-wrapper">

            <div class="navbar navbar-default">
                <div class="container">

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="logo" href="{{'/'}}"><img alt=""
                                src="{{ url('frontend/images/logo.png') }}"></a>
                    </div>

                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">

                            <li>
                                <a href="{{ '/' }}">Home</a>

                            </li>


                            <li><a href="{{ '/about' }}" title="About Us">About Us</a></li>

                            <li>
                                <a href="{{ '/gallery' }}">Gallery</a>
                            </li>

                            <li class="drop"><a href="">Request</a>
                                <ul class="drop-down">
                                    <li><a href="{{ '/search_donor' }}" >Search Donar</a></li>
                                    <li><a href="{{ '/campes' }}" >Campes</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ '/contact' }}">Contact</a></li>
                            <li>
                                <a class="breadcrumb-item" href="{{ route('login') }}">Login</a>
                            </li>
                            <li>
                                <a class="breadcrumb-item" href="{{ route('register') }}">Register</a>
                            </li>
                            </nav>
                        </ul>
                    </div>
                </div>
            </div>

        </section>

    </header>
    <!-- end main-header  -->
