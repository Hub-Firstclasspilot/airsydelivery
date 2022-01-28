<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TrackingController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            "tracking_id" => "required|string"
        ]);

        $package = Package::where("tracking_id", $request->trakcing_id)->first();

        if (!$package) {
            Session::flash("message", "Package does not exist");
        }

        $status = $package->status->latest();

        return view();
    }
}
