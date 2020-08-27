@extends('layouts.main')

@section('title')
    Track Shipment
@endsection

@section('contents')

    <section id="subheader" class="page-track no-bottom" data-stellar-background-ratio="0.5" style="background-position: 50% 0px;">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Track Shipment
                            <span>Your Package Info</span>
                        </h1>
                        <div class="small-border wow flipInY" data-wow-delay=".8s" data-wow-duration=".8s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.8s; animation-name: flipInY;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="clearfix"></div>

    <div id="content" class="no-padding">
        <!-- section begin -->
        <section id="section-tracking">

            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="cta-form wow fadeIn" data-wow-delay="0s" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeIn;">

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
    </div>

@endsection
