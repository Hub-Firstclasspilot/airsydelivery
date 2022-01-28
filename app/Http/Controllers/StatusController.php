<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StatusController extends Controller
{
    public function index(Package $package)
    {
        $title = "Package Status";

        $status = $package->status;

        return view("", compact("title", "status"));
    }

    public function edit(Package $package)
    {
        $status = $package->status->latest();

        $title = "Edit Package Status";

        return view("", compact("title", "status"));
    }

    public function update(Request $request, Package $package)
    {
        $request->validate([
           "status" => "required|string",
           "location" => "required|string",
           "description" => "required|string", 
        ]);

        $package->status()->create([
            "status" => $request->status,
            "location" => $request->location,
            "description" => $request->description
        ]);

        Session::flash("message", "The status of this package has been updated");
    }
}
