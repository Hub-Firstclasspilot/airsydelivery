<?php

namespace App\Http\Controllers;

use App\Mail\OrderCreated;
use App\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class PackageController extends Controller
{
    public function index()
    {
        $title = "Packages";

        $packages = Package::all();

        return view('auth.back.shipment.index', compact('title', 'packages'));
    }

    public function create()
    {
        $title = "Create Shipment";

        return view("auth.back.shipment.create", compact("title"));
    }

    public function store(Request $request)
    {
        
        $request->validate([
            "type" => "required|string",
            "weight" => "required|numeric",
            "sender_name" => "required|string",
            "sender_phone" => "nullable|string",
            "sender_email" => "nullable|email",
            "sender_address" => "required|string",
            "receiver_name" => "required|string",
            "receiver_phone" => "nullable|string",
            "receiver_email" => "nullable|email",
            "receiver_location" => "required|string",
            "location" => "nullable|string",
            "description" => "nullable|string"
        ]);

        $package = Package::create([
            "type" => $request->type,
            "weight" => $request->weight,
            "sender_name" => $request->sender_name,
            "sender_phone" => $request->sender_phone,
            "sender_email" => $request->sendder_email,
            "sender_location" => $request->sender_address,
            "receiver_name" => $request->receiver_name,
            "receiver_location" => $request->receiver_location,
            "receiver_phone" => $request->receiver_phone,
            "receiver_email" => $request->receiver_email,
        ]);

        $package->status()->create([
            "location" => $request->location,
            "description" => $request->description
        ]);

        Session::flash("message", "your order has been successfully created. You will get a confirmatin email soon");

       //Mail::to($package->sender_email)->send(new OrderCreated());

        return redirect('/packages');
    }

    public function edit(Package $package)
    {
        $title = "Edit Package Details";

        return view("", compact("package"));
    }

    public function update(Package $package, Request $request)
    {
        
    }

    public function delete(Package $package)
    {
        $package->delete();

        return view();
    }
}
