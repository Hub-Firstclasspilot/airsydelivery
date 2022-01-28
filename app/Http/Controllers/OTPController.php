<?php

namespace App\Http\Controllers;

use App\OTP;
use App\User;
use Illuminate\Http\Request;
use App\Notifications\ResendOTPToUser;

class OTPController extends Controller
{
    public function resendOTP(Request $request)
    {
        $user = User::find($request->id);

        $token = OTP::generate($user);

        $user->notify(new ResendOTPToUser($token));

        return response()->json([
            'successful' => true,
            'message' => "otp has been sent to user"
        ]);
    }

    public function verifyOTP(Request $request)
    {
        $request->validate([
            "token" => 'required|numeric|min:4'
        ]);

        return response(OTP::verify($request->token));


        if (OTP::verify($request->token)) {
            return response()->json([
                'successful' => true,
                'message' => 'token has been verified'
            ]);
        }

        return response()->json([
            'successful' => false,
            'message' => 'token has expired'
        ]);
    }
}
