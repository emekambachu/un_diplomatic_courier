@extends('layouts.main')

@section('title')
Home
@endsection

@section('contents')
    <!-- slider -->
    <div id="slider">
        <!-- revolution slider begin -->
        <div class="fullwidthbanner-container">
            <div id="revolution-slider">
                <ul>
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="2500" data-delay="5000">
                        <!--  BACKGROUND IMAGE -->
                        <img src="{{ asset('main/img-rev-slider/bg-1.jpg') }}" alt="">

                        <div class="tp-caption h-line lft"
                             data-x="20"
                             data-y="130"
                             data-speed="800"
                             data-start="1000"
                             data-easing="easeInOutCubic"
                             data-endspeed="300">
                        </div>

                        <div class="tp-caption sfr custom-font-1"
                             data-x="20"
                             data-y="180"
                             data-speed="800"
                             data-start="800"
                             data-easing="easeInOutCubic">
                            BY LAND
                        </div>

                        <div class="tp-caption sfr custom-font-1"
                             data-x="20"
                             data-y="235"
                             data-speed="800"
                             data-start="1000"
                             data-easing="easeInOutCubic">
                            BY SEA
                        </div>

                        <div class="tp-caption sfr custom-font-1"
                             data-x="20"
                             data-y="290"
                             data-speed="800"
                             data-start="1200"
                             data-easing="easeInOutCubic">
                            BY AIR
                        </div>

                        <div class="tp-caption sfb custom-font-2"
                             data-x="20"
                             data-y="345"
                             data-speed="800"
                             data-start="1400"
                             data-easing="easeInOutCubic">
                            Freight Solutions For All Industry
                        </div>

                        <div class="tp-caption sfb text-left"
                             data-x="20"
                             data-y="415"
                             data-speed="800"
                             data-start="1600"
                             data-easing="easeInOutCubic">
                            <a class="btn btn-slider" href="{{ url('about-us') }}">About us</a>
                            <a class="btn btn-border-slider" href="{{ url('track-shipment') }}">Track</a>
                        </div>
                    </li>

                    <li data-transition="fade" data-slotamount="7" data-masterspeed="2500" data-delay="5000">
                        <!--  BACKGROUND IMAGE -->
                        <img src="{{ asset('main/img-rev-slider/bg-2.jpg') }}" alt="">

                        <div class="tp-caption h-line lft"
                             data-x="center"
                             data-y="170"
                             data-speed="800"
                             data-start="1000"
                             data-easing="easeInOutCubic"
                             data-endspeed="300">
                        </div>

                        <div class="tp-caption lft custom-font-1"
                             data-x="center"
                             data-y="220"
                             data-speed="800"
                             data-start="800"
                             data-easing="easeInOutCubic">
                            Delivering Excellence
                        </div>

                        <div class="tp-caption sfb custom-font-2"
                             data-x="center"
                             data-y="270"
                             data-speed="800"
                             data-start="1400"
                             data-easing="easeInOutCubic">
                            We Deliver Fast International Cargo Services
                        </div>

                        <div class="tp-caption sfb text-left"
                             data-x="center"
                             data-y="330"
                             data-speed="800"
                             data-start="1600"
                             data-easing="easeInOutCubic">
                            <a class="btn btn-slider" href="{{ url('services') }}">Services</a>
                        </div>
                    </li>

                    <li data-transition="fade" data-slotamount="7" data-masterspeed="2500" data-delay="5000">
                        <!--  BACKGROUND IMAGE -->
                        <img src="{{ asset('main/img-rev-slider/bg-5.jpg') }}" alt="">

                        <div class="tp-caption h-line lft"
                             data-x="center"
                             data-y="170"
                             data-speed="800"
                             data-start="1000"
                             data-easing="easeInOutCubic"
                             data-endspeed="300">
                        </div>

                        <div class="tp-caption lft custom-font-1"
                             data-x="center"
                             data-y="220"
                             data-speed="800"
                             data-start="800"
                             data-easing="easeInOutCubic">
                            Makes You Smile
                        </div>

                        <div class="tp-caption sfb custom-font-2"
                             data-x="center"
                             data-y="270"
                             data-speed="800"
                             data-start="1400"
                             data-easing="easeInOutCubic">
                            On Time Delivery Don't Worry Be Happy
                        </div>

                        <div class="tp-caption sfb text-left"
                             data-x="center"
                             data-y="330"
                             data-speed="800"
                             data-start="1600"
                             data-easing="easeInOutCubic">
                            <a class="btn btn-slider" href="{{ url('track-shipment') }}">Track Shipment</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- revolution slider close -->
    </div>
    <!-- slider close -->

    <div class="clearfix"></div>

    <!-- section begin -->
    <section id="section-tracking">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="cta-form wow fadeIn" data-wow-delay="0s" data-wow-duration="1s">

                        @include('includes.alerts')

                        <form method="post" action="{{ url('track-shipment') }}">
                            @csrf
                            <input type="text" name="tracking_id"
                                   placeholder="Insert tracking number here..." required>
                            <input type="submit" name="submit" value="TRACK IT">
                        </form>
                        <div class="clearfix"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- section close -->

    <!-- content begin -->
    <div id="content" class="no-padding">
        <div class="box-container">
            <div id="bg-service-1" class="box-one-third light-text">
                <div class="inner wow" data-wow-delay="0s">
                    <h2 class="wow fadeIn" data-wow-delay=".2s">Ocean Freight</h2>
                    <p class="wow fadeIn" data-wow-delay=".3s">Wherever your cargo is going, we can arrange the shipment for you and remain competitive with the market.</p>
                    <div class="divider-single"></div>
                    <a href="{{ url('services') }}" class="btn-border-light wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".3s">Read More</a>
                </div>
            </div>

            <div id="bg-service-3" class="box-one-third light-text">
                <div class="inner">
                    <h2 class="wow fadeIn" data-wow-delay=".4s">Logistics</h2>
                    <p class="wow fadeIn" data-wow-delay=".5s">We work close with strategic partners to ensure our domestic trucking offers clients everything they need.</p>
                    <div class="divider-single"></div>
                    <a href="{{ url('services') }}" class="btn-border-light wow fadeInUp" data-wow-delay=".5s"
                       data-wow-duration=".3s">Read More</a>
                </div>
            </div>

            <div id="bg-service-2" class="box-one-third light-text">
                <div class="inner">
                    <h2 class="wow fadeIn" data-wow-delay=".6s">Air Freight</h2>
                    <p class="wow fadeIn" data-wow-delay=".7s">United Nations Diplomatic Courier partners with airlines and freight forwarders to offer seamless air freight solutions to clients globally.</p>
                    <div class="divider-single"></div>
                    <a href="{{ url('services') }}" class="btn-border-light wow fadeInUp" data-wow-delay=".6s" data-wow-duration=".3s">Read More</a>
                </div>
            </div>

            <div id="bg-service-1" class="box-one-third light-text">
                <div class="inner wow" data-wow-delay="0s">
                    <h2 class="wow fadeIn" data-wow-delay=".2s">Containerization</h2>
                    <p class="wow fadeIn" data-wow-delay=".3s">United Nations Diplomatic Courier Delivery Services are experts in the area of Containerization. We make sure a system of intermodal freight transport using intermodal containers.</p>
                    <div class="divider-single"></div>
                    <a href="{{ url('services') }}" class="btn-border-light wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".3s">Read More</a>
                </div>
            </div>

            <div id="bg-service-3" class="box-one-third light-text">
                <div class="inner">
                    <h2 class="wow fadeIn" data-wow-delay=".4s">Re-packaging</h2>
                    <p class="wow fadeIn" data-wow-delay=".5s">United Nations Diplomatic Courier Delivery Services has a different and unique way of repackaging parcels to meet international standard.</p>
                    <div class="divider-single"></div>
                    <a href="{{ url('services') }}" class="btn-border-light wow fadeInUp" data-wow-delay=".5s"
                       data-wow-duration=".3s">Read More</a>
                </div>
            </div>

            <div id="bg-service-2" class="box-one-third light-text">
                <div class="inner">
                    <h2 class="wow fadeIn" data-wow-delay=".6s">Consolidation</h2>
                    <p class="wow fadeIn" data-wow-delay=".7s">We do our delivery services in a more coherent way thereby putting smiles on the faces of our client and building a stronger customer relationship with them.</p>
                    <div class="divider-single"></div>
                    <a href="{{ url('services') }}" class="btn-border-light wow fadeInUp" data-wow-delay=".6s" data-wow-duration=".3s">Read More</a>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <!-- section begin -->
        <section id="section-features">
            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <h2 class="wow fadeIn" data-wow-delay="0">Why Choose Us?
                            <span>Find reasons to choose us as your freight partner</span>
                        </h2>
                        <div class="small-border wow flipInY" data-wow-delay=".2s" data-wow-duration=".8s"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-box">
                            <i class="icon-tools wow zoomIn" data-wow-delay="0s"></i>
                            <div class="text wow fadeIn" data-wow-delay=".2s">
                                <h3>Customer Satisfaction Tools</h3>
                                <p>he highest levels of customer service and personalized shipments in the industry.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="feature-box">
                            <i class="icon-bargraph wow zoomIn" data-wow-delay=".2s"></i>
                            <div class="text wow fadeIn" data-wow-delay=".4s">
                                <h3>Management &amp; Reporting</h3>
                                <p>The word cargo refers in particular to goods or produce being conveyed generally for commercial gain by ship, boat, or aircraft, although the term is now often extended to cover all types of freight, including that carried by train, van, truck, or intermodal container.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="feature-box">
                            <i class="icon-pricetags wow zoomIn" data-wow-delay=".4s"></i>
                            <div class="text wow fadeIn" data-wow-delay=".6s">
                                <h3>Connected</h3>
                                <p>The shortest transit time between seaport, airport and industrial zones in the Gulf.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="feature-box">
                            <i class="icon-refresh wow zoomIn" data-wow-delay=".6s"></i>
                            <div class="text wow fadeIn" data-wow-delay=".8s">
                                <h3>Compliance Solutions</h3>
                                <p>Partnerships with more than 120+ carriers spanning across all of North America.</p>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                </div>
            </div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        <section id="section-gallery">
            <div class="container">
                <div class="row">


                    <div class="col-md-12">
                        <div id="gallery" class="gallery full-gallery ex-gallery zoom-gallery">

                            <!-- gallery item -->
                            <div class="item">
                                <div class="picframe">
                                    <a href="{{ asset('main/img/gallery/pic-1.jpg') }}" data-source="img/gallery/pic-1.jpg" title="Service with a Smile">
                                        <span class="overlay"></span>

                                        <span class="pf_text">
                                                <span class="project-name">Service with a Smile</span>
                                                <span class="small-border"></span>
                                            </span>

                                        <img src="{{ asset('main/img/gallery/pic-1.jpg') }}" alt="" />
                                    </a>

                                </div>
                            </div>
                            <!-- close gallery item -->

                            <!-- gallery item -->
                            <div class="item">
                                <div class="picframe">
                                    <a href="{{ asset('main/img/gallery/pic-2.jpg') }}"
                                       data-source="{{ asset('main/img/gallery/pic-2.jpg') }}" title="Land Delivery by Truck">
                                        <span class="overlay"></span>

                                        <span class="pf_text">
                                                <span class="project-name">Land Delivery by Truck</span>
                                                <span class="small-border"></span>
                                            </span>

                                        <img src="{{ asset('main/img/gallery/pic-2.jpg') }}" alt="" />
                                    </a>

                                </div>
                            </div>
                            <!-- close gallery item -->

                            <!-- gallery item -->
                            <div class="item">
                                <div class="picframe">
                                    <a href="{{ asset('main/img/gallery/pic-3.jpg') }}" data-source="img/gallery/pic-3.jpg" title="Land Delivery by Train">
                                        <span class="overlay"></span>

                                        <span class="pf_text">
                                                <span class="project-name">Land Delivery by Train</span>
                                                <span class="small-border"></span>
                                            </span>

                                        <img src="{{ asset('main/img/gallery/pic-3.jpg') }}" alt="" />
                                    </a>

                                </div>
                            </div>
                            <!-- close gallery item -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        <section id="explore-1" class="side-bg light-text">
            <div class="col-md-6 col-md-offset-6 pull-right image-container">
                <div class="background-image"></div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="inner-padding">
                            <div id="testi-carousel" class="testi-slider wow fadeIn" data-wow-delay="0s" data-wow-duration="1s">
                                <div class="item">
                                    <blockquote>
                                        Multi-modal container units, designed as reusable carriers to facilitate unit load handling of the goods contained, are also referred to as cargo, specially by shipping lines and logistics operators.
                                    </blockquote>
                                    <span class="testi-by">Aline Drummond</span>
                                </div>
                                <div class="item">
                                    <blockquote>
                                        Multi-modal container units, designed as reusable carriers to facilitate unit load handling of the goods contained, are also referred to as cargo, specially by shipping lines and logistics operators.

                                    </blockquote>
                                    <span class="testi-by">Mortimer Elmo</span>
                                </div>
                                <div class="item">
                                    <blockquote>
                                        Multi-modal container units, designed as reusable carriers to facilitate unit load handling of the goods contained, are also referred to as cargo, specially by shipping lines and logistics operators.

                                    </blockquote>

                                    <span class="testi-by">Marina Leopold</span>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        <section id="section-partners">
            <div class="container">
                <div class="row">

                    <div class="logo-partners">
                        <div class="col-md-2 col-xs-4">
                            <img class="wow fadeInRight" data-wow-delay=".2s" data-wow-duration=".6s"
                                 src="{{ asset('main/img/logo/1.jpg') }}" alt="">
                        </div>

                        <div class="col-md-2 col-xs-4">
                            <img class="wow fadeInRight" data-wow-delay=".5s" data-wow-duration=".5s"
                                 src="{{ asset('main/img/logo/2.jpg') }}" alt="">
                        </div>

                        <div class="col-md-2 col-xs-4">
                            <img class="wow fadeInRight" data-wow-delay=".8s" data-wow-duration=".5s"
                                 src="{{ asset('main/img/logo/3.jpg') }}" alt="">
                        </div>

                        <div class="col-md-2 col-xs-4">
                            <img class="wow fadeInRight" data-wow-delay="1.1s" data-wow-duration=".5s"
                                 src="{{ asset('main/img/logo/4.jpg') }}" alt="">
                        </div>

                        <div class="col-md-2 col-xs-4">
                            <img class="wow fadeInRight" data-wow-delay="1.4s" data-wow-duration=".5s"
                                 src="{{ asset('main/img/logo/5.jpg') }}" alt="">
                        </div>

                        <div class="col-md-2 col-xs-4">
                            <img class="wow fadeInRight" data-wow-delay="1.7s" data-wow-duration=".5s"
                                 src="{{ asset('main/img/logo/6.jpg') }}" alt="">
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
