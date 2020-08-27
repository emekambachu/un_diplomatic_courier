<?php

namespace App\Http\Controllers;

use App\Shipment;
use App\ShipmentHistory;
use App\User;
use App\UserDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ShipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $shipments = Shipment::paginate(15);
        return view('controlpanel.shipments.index', compact('shipments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('controlpanel.shipments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $input = $request->all();

        //Generate Tracking Number
        function TrackingId($length = 6){
            $characters = '0123456789';
            $charactersLength = strlen($characters);
            $randomString = 'TRK-';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[random_int(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        $input['tracking_id'] = TrackingId();

        $userDetails = UserDetails::create([

            'sender_name' => $input['sender_name'],
            'sender_mobile' => $input['sender_mobile'],
            'sender_country' => $input['sender_country'],
            'sender_address' => $input['sender_address'],

            'receiver_name' => $input['receiver_name'],
            'receiver_email' => $input['receiver_email'],
            'receiver_mobile' => $input['receiver_mobile'],
            'receiver_country' => $input['receiver_country'],
            'receiver_address' => $input['receiver_address'],

        ]);

        $shipment = Shipment::create([
            'user_detail_id' => $userDetails->id,
            'parcel' => $input['parcel'],
            'parcel_weight' => $input['parcel_weight'],
            'tracking_id' => $input['tracking_id'],
        ]);

        //Add all values to data array
        $data = [
            'parcel' => $shipment->parcel,
            'parcel_weight' => $shipment->parcel,
            'sender_name' => $userDetails->sender_name,
            'sender_email' => $userDetails->sender_email,
            'sender_mobile' => $userDetails->sender_mobile,
            'sender_country' => $userDetails->sender_country,
            'receiver_name' => $userDetails->receiver_name,
            'receiver_email' => $userDetails->receiver_email,
            'receiver_country' => $userDetails->receiver_country,
            'tracking_id' => $input['tracking_id'],
        ];

        //send email to user
        Mail::send('emails.new-shipment', $data, static function($message) use ($data){
            $message->from('info@alphadiplomaticcourier.com', 'Alpha Diplomatic Courier');
            $message->to($data['receiver_email'], $data['receiver_name']);
            $message->replyTo('info@alphadiplomaticcourier.com', 'Alpha Diplomatic Courier');
            $message->subject('Your shipment has been initiated');
        });

        //flash notification
        Session::flash('success', 'Shipment for '.$data['receiver_name'].' has been initiated');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function show(Shipment $shipment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shipment  $shipment
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $shipment = Shipment::findOrFail($id);
        $userDetail = UserDetails::where('id', $shipment->user_detail_id)->get()->first();
        return view('controlpanel.shipments.edit', compact('shipment', 'userDetail' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shipment  $shipment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        //get ID
        $shipment = Shipment::findOrFail($id);
        $userDetail = UserDetails::where('id', $shipment->user_detail_id)->get()->first();

        $shipment->update([

            'parcel' => $request->input('parcel'),
            'parcel_weight' => $request->input('parcel_weight'),
            'tracking_id' => $request->input('tracking_id'),

        ]);

        $userDetail->update([

            'sender_name' => $request->input('sender_name'),
            'sender_mobile' => $request->input('sender_mobile'),
            'sender_country' => $request->input('sender_country'),
            'sender_address' => $request->input('sender_address'),

            'receiver_name' => $request->input('receiver_name'),
            'receiver_email' => $request->input('receiver_email'),
            'receiver_mobile' => $request->input('receiver_mobile'),
            'receiver_country' => $request->input('receiver_country'),
            'receiver_address' => $request->input('receiver_address'),

        ]);

        //session notification
        Session::flash('success', 'Updated');

        return redirect()->back();
    }

    public function insertCheckpoint($id)
    {
        $shipment = Shipment::findOrFail($id);
        return view('controlpanel.shipments.insert-checkpoint', compact('shipment' ));
    }

    public function activateShipment(Request $request, $id)
    {
        //get ID
        $shipment = Shipment::findOrFail($id);

        if($shipment->is_active){

            $shipment->is_active = false;
            $email_subject = 'Your Shipment has been Deactivated';
            Session::flash('warning', 'Your Shipment has been deactivated');

            //session notification
            Session::flash('warning', $email_subject);
        }else{

            $shipment->is_active = true;
            $email_subject = 'Your Shipment has been Activated';
            Session::flash('warning', 'Your Shipment has been Activated');

            //session notification
            Session::flash('success', $email_subject);
        }

        $shipment->save();

        $data = [
            'name' => $shipment->userDetail->receiver_name,
            'email' => $shipment->userDetail->receiver_name,
            'tracking_id' => $shipment->tracking_id,
            'email_subject' => $email_subject,
            'is_active' => $shipment->is_active,
        ];

        Mail::send('emails.verify-shipment', $data, static function ($message) use ($data) {
            $message->from('info@alphadiplomaticcourier.com', 'Alpha Diplomatic Courier');
            $message->to($data['email'], $data['name']);
            $message->replyTo('Info@alphadiplomaticcourier.com', 'Alpha Diplomatic Courier');
            $message->subject($data['email_subject']);
        });

        return redirect()->back();
    }

    public function trackShipment(Request $request){

        $tracking_id = $request->input('tracking_id');

        // Check Tracking Status
        $checkTrackingStatus = Shipment::where([
            ['tracking_id', '=', $tracking_id],
            ['is_active', '=', true]
        ])->first();

        $validateTrackingId = Shipment::where([
            ['tracking_id', '=', $tracking_id]
        ])->first();

        // Check tracking Status
        if(!$checkTrackingStatus){
            Session::flash('warning', 'Your Shipment is not active');
            return redirect()->back();
        }

        // Check tracking Id Validity
        if(!$validateTrackingId){
            Session::flash('warning', 'This tracking ID does not exist');
            return redirect()->back();
        }

        return redirect('shipment-history/'.$checkTrackingStatus->tracking_id);
    }

    public function shipmentHistory($tracking_id){

        $shipment = Shipment::where([
            ['tracking_id', '=', $tracking_id],
            ['is_active', '=', true]
        ])->get()->first();

        $lastCheckpoint = ShipmentHistory::where('shipment_id', $shipment->id)->orderBy('created_at', 'desc')->get()->first();

        $checkpoints = ShipmentHistory::where('shipment_id', $shipment->id)->orderBy('created_at', 'desc')->paginate();

        return view('shipment-history', compact('shipment', 'checkpoints', 'lastCheckpoint'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shipment  $shipment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        //find Category and delete
        Shipment::findOrFail($id)->delete();

        //flash notification
        Session::flash('warning', 'Deleted');

        return redirect()->back();
    }
}
