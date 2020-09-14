@extends('layouts.main')

@section('title')
    Contact us
@endsection

@section('contents')
    <section id="subheader" class="page-contact no-bottom" data-stellar-background-ratio="0.5">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h1>Contact Us
                            <span>Get In Touch With Us</span>
                        </h1>
                        <div class="small-border wow flipInY" data-wow-delay=".8s" data-wow-duration=".8s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.8s; animation-name: flipInY;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="content">
        <div class="container">
            <div class="row no-gutter">

                <div class="col-md-12">
                    <div id="contact-form-wrapper">
                        <div class="contact_form_holder">
                            <form id="contact" class="row" name="form1" method="post" action="#">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your name">

                                <div id="error_email" class="error">Please check your email</div>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Your email">

                                <div id="error_message" class="error">Please check your message</div>
                                <textarea cols="10" rows="10" name="message" id="message" class="form-control" placeholder="Your message"></textarea>

                                <div id="mail_success" class="success">Thank you. Your message has been sent.</div>
                                <div id="mail_failed" class="error">Error, email not sent</div>

                                <p id="btnsubmit">
                                    <input type="submit" id="send" value="Send" class="btn btn-custom">
                                </p>



                            </form>
                        </div>
                    </div>
                </div>


            </div>

            <div class="divider-line"></div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".8s" style="visibility: hidden; animation-duration: 0.8s; animation-delay: 0.5s; animation-name: none;">Our Branch
                    </h2>
                    <div class="small-border wow flipInY" data-wow-delay=".8s" data-wow-duration=".8s" style="visibility: hidden; animation-duration: 0.8s; animation-delay: 0.8s; animation-name: none;"></div>
                </div>

                <div class="col-md-3">
                    <h3>United States</h3>
                    Head/Corporate Office: 305 East 47th Street,3 Dag Plaza,<br>
                    4th Floor United States of America.<br>
                    T. +1(650)487-0645<br>
                    E. info@uncourierdeliveryservices.org<br>
                    <div class="divider-single"></div>
                </div>

                <div class="col-md-3">
                    <h3>Afganistan</h3>
                    Branch office: 3962 Anahiem DR 3962 Anahiem Street,<br>
                    Bsarlbbx Kabul Afghanistan.<br>
                    T. +1(650)487-0645<br>
                    E. info@uncourierdeliveryservices.org<br>
                    <div class="divider-single"></div>
                </div>

                <div class="col-md-3">
                    <h3>Yemen</h3>
                    Branch office: Al Anad Air Base<br>
                    Lahij Governorate, Yemen<br>
                    T. +1(650)487-0645<br>
                    E. info@uncourierdeliveryservices.org<br>

                    <div class="divider-single"></div>
                </div>

                <div class="col-md-3">
                    <h3>Syria</h3>
                    Al-Tanf (U.S. military base) <br>
                    Damascus, Syria.<br>
                    T. +1(650)487-0645<br>
                    E. info@uncourierdeliveryservices.org<br>

                    <div class="divider-single"></div>
                </div>

            </div>


        </div>
    </div>
@endsection
