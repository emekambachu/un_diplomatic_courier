@extends('layouts.main')

@section('title')
    Services
@endsection

@section('contents')
    <section id="subheader" class="page-about no-bottom" data-stellar-background-ratio="0.5" style="background-position: 50% 0px;">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Services
                            <span>United Nations Diplomatic Courier</span>
                        </h1>
                        <div class="small-border wow flipInY" data-wow-delay=".8s" data-wow-duration=".8s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.8s; animation-name: flipInY;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="clearfix"></div>

    <div id="content" class="no-bottom">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-container">
                        <div class="col-md-6 wow fadeInUp" data-wow-delay="0" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="box-with-icon-left">
                                <i class="fa fa-ship icon-big"></i>
                                <div class="text">
                                    <h2>Ocean Freight</h2>
                                    <p>United Nations Diplomatic Courier has a wide selection of Ocean freight products. We ensure your cargo reaches the right destination, at the right time and at a cost effective way. Our alliances with ocean carriers handle every major container port in the world. Our volumes managed within our network provide expertise and competitive rate structures.<br>
                                        Our global integrated system provides visibility for tracking and monitoring including Issue resolution in case of supply chain challenges. We can provide customized options for you to select no matter what the commodity.<br>

                                        The ocean transport is just one sliver of the supply chain. However, we have the ability to provide the inland services by picking up your freight and delivering to origin port and delivery from destination port to the final destination. Managing the entire cargo process with competitive carrier contracts creates a fully integrated solution.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 wow fadeInUp" data-wow-delay="0" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="box-with-icon-left">
                                <i class="fa fa-send-o icon-big"></i>
                                <div class="text">
                                    <h2>Air Freight</h2>
                                    <p>Air Freight is a part of the comprehensive and efficient network that has been developed to ensure that your products will deliver on time and with zero error. RAK Logistics partners with airlines and freight forwarders to offer seamless air freight solutions to clients globally. We offer a competitive and quick service which includes our air express, high priority (24 hours) delivery, and value services. As a leading provider of air cargo services, we offer our clients an unmatched repertoire of experiences and skills in cargo freight management, and air operations.<br>

                                        Our air freight solutions offer the ideal balance between time, space, frequency and cost. Our air cargo services cover all major trading centers, and combine flexibility with speed and value to give clients a noticeable advantage. Our door-to-door service offers a multimodal service package which includes Sea Freight, Land Freight and Warehouse services if required. These solutions combined with our air freight services provide consistent and coherent logistical solutions.</p>
                                </div>
                            </div>
                        </div>

                        <div class="divider-double"></div>

                        <div class="col-md-6 wow fadeInUp" data-wow-delay="0" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="box-with-icon-left">
                                <i class="fa fa-cubes icon-big"></i>
                                <div class="text">
                                    <h2>Logistics</h2>
                                    <p>The one constant for any shipment is that there is always a land transport element to it. At some point, your shipment is in a truck.<br>

                                        The key to our success in land transportation is having the tools that allow us to keep our customer informed with accurate information. When you outsource your land transportation functions, you want a partner who gives you everything you need and at a competitive price with highly reliable door-to-door services.<br>

                                        Our extensive network becomes an extension of your business with excellent providers who know the local markets and understand all the compliance requirements. That local expertise is important when delivering quality service. That ease of business allows you to concentrate on your core business areas and we take care of the details. </p>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6 wow fadeInUp" data-wow-delay="0" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="box-with-icon-left">
                                <i class="fa fa-train icon-big"></i>
                                <div class="text">
                                    <h2>Warehousing</h2>
                                    <p>Partnering with a third party logistics (3PL) company to manage your supply chain, gives you flexibility to focus on other areas of your business. We have buildings that can provide you with distribution, storage and warehouse services, inventory management, order fulfillment, and cross-docking and transloading services . . . and everything in-between! However, no matter the service that you require, it really comes down to our service commitment. Our warehouse customer service agents only want you to experience satisfaction. </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="divider"></div>

        <section id="section-partners">
            <div class="container">
                <div class="row">

                    <div class="logo-partners">
                        <div class="col-md-2 col-xs-4">
                            <img class="wow fadeInRight" data-wow-delay=".2s" data-wow-duration=".6s" src="{{ asset('main/img/logo/1.jpg') }}" alt="" style="visibility: hidden; animation-duration: 0.6s; animation-delay: 0.2s; animation-name: none;">
                        </div>

                        <div class="col-md-2 col-xs-4">
                            <img class="wow fadeInRight" data-wow-delay=".5s" data-wow-duration=".5s" src="{{ asset('main/img/logo/2.jpg') }}" alt="" style="visibility: hidden; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: none;">
                        </div>

                        <div class="col-md-2 col-xs-4">
                            <img class="wow fadeInRight" data-wow-delay=".8s" data-wow-duration=".5s"
                                 src="{{ asset('main/img/logo/3.jpg') }}" alt=""
                                 style="visibility: hidden; animation-duration: 0.5s; animation-delay: 0.8s; animation-name: none;">
                        </div>

                        <div class="col-md-2 col-xs-4">
                            <img class="wow fadeInRight" data-wow-delay="1.1s" data-wow-duration=".5s" src="{{ asset('main/img/logo/4.jpg') }}" alt="" style="visibility: hidden; animation-duration: 0.5s; animation-delay: 1.1s; animation-name: none;">
                        </div>

                        <div class="col-md-2 col-xs-4">
                            <img class="wow fadeInRight" data-wow-delay="1.4s" data-wow-duration=".5s"
                                 src="{{ asset('main/img/logo/5.jpg') }}" alt="" style="visibility: hidden; animation-duration: 0.5s; animation-delay: 1.4s; animation-name: none;">
                        </div>

                        <div class="col-md-2 col-xs-4">
                            <img class="wow fadeInRight" data-wow-delay="1.7s" data-wow-duration=".5s"
                                 src="{{ asset('main/img/logo/6.jpg') }}" alt=""
                                 style="visibility: hidden; animation-duration: 0.5s; animation-delay: 1.7s; animation-name: none;">
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <div class="call-to-action text-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <h2>Contact us now to get quote for all your global shipping needs.</h2>
                    </div>

                    <div class="col-md-3">
                        <a href="{{ url('contact') }}" class="btn-border-light">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
