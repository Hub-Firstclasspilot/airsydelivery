<?php

namespace App\Http\Controllers;

use App\Services\Twilio;
use Illuminate\Http\Request;

class NotifcationController extends Controller
{
    public function getEmailPage()
    {
        $title = "Send Emal";

        return view("auth.back.notifications.email", compact("title"));
    }

    public function sendEmail(Request $request)
    {

    }

    public function getSmsPage()
    {
        $title = "Send SMS";

        return view("auth.back.notifications.sms", compact("title"));
    }

    public function sendSms(Request $request)
    {
        $request->validate([
            "receiver" => "required|string",
            "message" => "required|string|max:1000"
        ]);

        $client = new Twilio;
        
        $response = $client->send($request);

        dd($response);
    }
}
