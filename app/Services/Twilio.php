<?php 
namespace App\Services;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class Twilio
{
    private $token, $sid, $number, $client;

    public function __construct()
    {
        $this->number = config('services.twilio.from');
        $this->token = config('services.twilio.token');
        $this->sid = config('services.twilio.sid');
        $this->client = new Client($this->sid, $this->token); 
    }

    public function send(Request $request)
    {
        $to = $request->receiver;
        $message = $request->message;
        //open connection

        $message = $this->client->messages->create($to, [
            'messagingServiceSid' => "MG2aa74446ac8a77d9775b8a90bd81b3fb",
            'from' => "ADC Logistics",
            'body' => $message
        ]);

        return $message->sid;
    }
}