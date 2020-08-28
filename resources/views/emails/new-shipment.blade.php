<img src="{{ asset('un_diplomatic_courier_logo.png') }}" width="120">

<h3>Hello {{ $receiver_name }}</h3>

<p>Your Shipment has been initialized<br>
    Below is your tracking code<br>
    <strong>{{ $tracking_id }}</strong><br><br><br>

    <strong>Parcel Type:</strong> {{ $parcel }}<br>
    <strong>Parcel Weight:</strong> {{ $parcel_weight }}<br>
    <strong>Sender Name:</strong> {{ $sender_name }}<br>
    <strong>Origin:</strong> {{ $sender_country }}<br>
    <strong>Destination:</strong> {{ $receiver_country }}<br>

    Use this code to track your shipment <a href="{{ url('track-shipment') }}"><strong>here</strong></a>
</p><br><br>

<p align="center">
    For more info, contact <i>info@uncourierdeliveryservices.org</i>
</p>
