@extends('layouts.main')

@section('title')
    About
@endsection

@section('contents')
    <section id="subheader" class="page-about no-bottom" data-stellar-background-ratio="0.5" style="background-position: 50% 0px;">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>About Us
                            <span>United Nations Diplomatic Courier</span>
                        </h1>
                        <div class="small-border wow flipInY" data-wow-delay=".8s" data-wow-duration=".8s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.8s; animation-name: flipInY;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="clearfix"></div>

    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('main/img/pic-1.jpg') }}" class="img-responsive" alt="">
                    <div class="divider-single"></div>
                    <h2>Who We Are</h2>
                    <div class="tiny-border"></div>
                    <p>United Nations Diplomatic Courier is comprised of 6 different organizations located in 5 countries that came together to create a global logistics organization serving over 50 countries across the globe. We now employ over 500 trained logistician and local entrepreneurs, in an expanding worldwide network of locations. Since we are capitalized by private equity, we’ve grown quickly and are a non-asset-based organization that shares a single vision.<br>

                        The vision of United Nations Diplomatic Courier is to be a leading warehouse and distribution company that can support all aspects of our clients supply chain from international to domestic transport. United Nations Diplomatic Courier has been developed with a key market focus in the United States, The Netherlands, United Arab Emirates and ASEAN (Association of Southeast Asian Nations). By combining these proven local enterprises, we can offer customized value-added supply chain solutions to customers who are now increasingly challenged by sophisticated international trade requirements.</p>

                </div>
                <div class="col-md-6">
                    <img src="{{ asset('main/img/pic-2.jpg') }}" class="img-responsive" alt="">
                    <div class="divider-single"></div>
                    <h2>What We Do</h2>
                    <div class="tiny-border"></div>

                    <p>We have built an extensive network reach throughout the world. And we keep reaching! (Coming near you soon!) The United Nations Diplomatic Courier of offices allows fast and consistent communication and premium service to our customers. That’s the name of the game. No matter where your valuable product needs to go, we select the best method and cost to meet the needs of you and your customer.<br>

                        Each United Nations Diplomatic Courier is a well experienced 15+ year local market leader with strong management teams offering logistics solutions to globally recognized customers. RAK logistics office and our expanding agent partner network positions us to serve quickly and efficiently. The RAK local market teams will manage your freight from start to finish with legacy purchasing power, regulatory compliance, visibility and unique and experienced personal attention.Keep an eye on us . . . we’re growing fast!</p>
                </div>
            </div>
        </div>
    </div>

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
@endsection
