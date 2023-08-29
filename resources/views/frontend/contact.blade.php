@extends('frontend.layouts.main')
@section('main-container')
    <!--  PAGE HEADING -->

    <section class="page-header" data-stellar-background-ratio="1.2">

        <div class="container">

            <div class="row">

                <div class="col-sm-12 text-center">


                    <h3>
                        Contact Us
                    </h3>

                    <p class="page-breadcrumb">
                        <a href="{{ '/' }}">Home</a> / Contact
                    </p>


                </div>

            </div>
            <!-- end .row  -->

        </div>
        <!-- end .container  -->

    </section>
    <!-- end .page-header  -->

    <!--  MAIN CONTENT  -->

    <section class="section-content-block">

        <div class="container">

            <div class="row">

                <div class="col-md-12">
                    <h2 class="contact-title">Contact us</h2>
                </div>

                <div class="col-md-4">

                    <ul class="contact-info">
                        <li>
                            <span class="icon-container"><i class="fa fa-home"></i></span>
                            <span>
                                <address>3100 C/A Mouchak,Sylhet,UK</address>
                            </span>
                        </li>
                    </ul>

                </div>

                <div class="col-md-2">

                    <ul class="contact-info">

                        <li>
                            <span class="icon-container"><i class="fa fa-phone"></i></span>
                            <address><a href="#">+91 1234567890</a></address>
                        </li>

                    </ul>

                </div>

                <div class="col-md-3">
                    <ul class="contact-info">
                        <li>
                            <span class="icon-container"><i class="fa fa-envelope"></i></span>
                            <address><a href="mailto:">query@yourdomain.com</a></address>
                        </li>
                    </ul>

                </div>

                <div class="col-md-3">

                    <ul class="contact-info">
                        <li>
                            <span class="icon-container"><i class="fa fa-globe"></i></span>
                            <address><a href="#">www.yourdomain.com</a></address>
                        </li>
                    </ul>

                </div>

            </div>

        </div>

    </section>

    <section class="section-content-block section-secondary-bg">

        <div class="container">

            <div class="row">

                <div class="col-sm-6 wow fadeInLeft">

                    <div class="contact-form-block">

                        <h2 class="contact-title">Say hello to us</h2>

                        <form role="form" action="#" method="post" id="contact-form">

                            <div class="form-group">
                                <input type="text" class="form-control" id="user_name" name="user_name"
                                    placeholder="Name" data-msg="Please Write Your Name" />
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" id="user_email" name="user_email"
                                    placeholder="Email" data-msg="Please Write Your Valid Email" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="email_subject" name="email_subject"
                                    placeholder="Subject" data-msg="Please Write Your Message Subject" />
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" rows="5" name="email_message" id="email_message" placeholder="Message"
                                    data-msg="Please Write Your Message"></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-theme">Send Now</button>
                            </div>

                        </form>

                    </div>
                    <!-- end .contact-form-block  -->

                </div>
                <!--  end col-sm-6  -->

                <div class="col-sm-6 wow fadeInRight">

                    <h2 class="contact-title">Our Location</h2>


                    <div class="section-google-map-block wow fadeInUp">

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57694.266489104666!2d74.5967166755791!3d25.341416410168456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3968c2368c070a55%3A0xc92f70a42dcb5294!2sBhilwara%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1662552395321!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                    <!-- end .section-content-block  -->

                </div>
                <!--  end col-sm-6  -->

            </div>
            <!-- end row  -->

        </div>
        <!--  end .container -->

    </section>
    <!-- end .section-content-block  -->

    <!-- START FOOTER  -->
@endsection
