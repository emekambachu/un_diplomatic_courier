@extends('layouts.main')

@section('title')
    Shipment History | {{ $shipment->tracking_id }}
@endsection

@section('top-assets')
    <style>
        .shipment-header{
            background-color: #352D66;
            color: #FFFFFF;
            padding: 10px;
            border-radius: 7px;
        }
    </style>
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

    <!-- Content Mid part -->
    <div id="content">

        <div style="margin-top: 5px;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12" style="padding-bottom: 50px;">
                        <div class="row shipment-header" style="background-color: #032947;">
                            <div class="col-md-12"><h3 class="text-white text-center">Shipment Details</h3></div>
                            <div class="col-md-4">
                                <p class="text-white"><strong class="text-primary">Shipment ID:</strong> {{ $shipment->tracking_id }}</p>
                                <p class="text-white"><strong class="text-primary">Origin:</strong> {{ $shipment->userDetail->sender_country }}</p>
                                <p class="text-white"><strong class="text-primary">Destination:</strong> {{ $shipment->userDetail->receiver_country }}</p>
                                <p class="text-white"><strong class="text-primary">Parcel Type:</strong> {{ $shipment->parcel }}</p>
                                <p class="text-white"><strong class="text-primary">Parcel Weight:</strong> {{ $shipment->parcel_weight }}KG</p>
                                <p class="text-white"><strong class="text-primary">Shipment Date:</strong> {{ $shipment->created_at }}</p>
                            </div>

                            <div class="col-md-4">
                                <p style="color: #ffffff;"><strong class="text-white">Sender Information</strong></p>
                                <p class="text-white"><strong class="text-primary">Name:</strong> {{ $shipment->userDetail->sender_name }}</p>
                                <p style="color: #ffffff;"><strong class="text-primary">Mobile:</strong> <span>{{ $shipment->userDetail->sender_mobile }}</span></p>
                                <p class="text-white"><strong class="text-primary">Address:</strong> {{ $shipment->userDetail->sender_address }}</p>
                            </div>

                            <div class="col-md-4">
                                <p style="color: #ffffff;"><strong class="text-white">Receiver Information</strong></p>
                                <p class="text-white"><strong class="text-primary">Name:</strong> {{ $shipment->userDetail->receiver_name }}</p>
                                <p style="color: #ffffff;"><strong class="text-primary">Mobile:</strong> {{ $shipment->userDetail->receiver_mobile }}</p>
                                <p class="text-white"><strong class="text-primary">Address:</strong> {{ $shipment->userDetail->receiver_address }}</p>
                            </div>
                        </div>

                        <table class="table table-striped">
                            <thead>
                            <tr style="color: #0f3e68;">
                                <th scope="col">#</th>
                                <th scope="col">Country</th>
                                <th scope="col">Location</th>
                                <th scope="col">Description</th>
                                <th scope="col">Status</th>
                                <th scope="col">Date</th>
                            </tr>
                            </thead>
                            <tbody>

                            @if($checkpoints)
                                @foreach($checkpoints as $checkpoint)
                                    <tr style="color: #280302;">
                                        <th scope="row">{{$count = $checkpoints->count() - $loop->iteration + 1 }}</th>
                                        <td>{{ $checkpoint->country }}</td>
                                        <td>{{ $checkpoint->location }}</td>
                                        <td>{{ $checkpoint->description }}</td>
                                        <td>{{ $checkpoint->status }}</td>
                                        <td>{{ $checkpoint->created_at }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <p>Awaiting Shipment</p>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection
