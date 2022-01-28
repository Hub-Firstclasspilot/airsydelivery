<?php

namespace App\Http\Controllers;

use App\Mail\OrderTransactionNotification;
use App\Mail\OrderTransactionUpdateNotification;
use App\Package;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class TransactionController extends Controller
{
    public function index()
    {
        $title = "Transactions";

        $transactions = Transaction::all();

        return view("", compact("title", "transactions"));
    }

    public function show(Package $package)
    {
        $title = "Package Transaction Details";

        $package->with('transaction');

        return view("", compact("title", "package"));
    }

    public function create(Package $package, Request $request)
    {
        $request->validate([
            "amount" => "required|numeric",
            "payment_option" => "required|string"
        ]);

        $transaction = $package->transaction()->create([
            "amount" => $request->amount,
            "payment_option" => $request->payment_option
        ]);

        
        if($package->sender_email){
            $details = [
                "package" => $package,
                "transaction" => $transaction
            ];

            // TODO create invoice and append as attachment to mail


            Mail::to($package->sender_email)->send(new OrderTransactionNotification($details));
        }


        Session::flash("message", "This package's transaction has been created and a message has been sent to the user");

        return view("", compact("transaction", "package"));
    }

    public function edit(Package $package)
    {
        $title = "Edit Package Transction Details";

        $package->with("transaction");

        return view("", compact("title", "package"));
    }

    public function update(Package $package, Request $request)
    {
        $request->validate([
            "status" => "required|string"
        ]);

        $transaction = $package->transaction()->update([
            "status" => $request->status
        ]);

        
        if ($package->sender_email) {
            $details = [
                "package" => $package,
                "transaction" => $transaction
            ];

             // TODO create invoice and append as attachment to mail

            
            Mail::to($package->sender_email)->send(new OrderTransactionUpdateNotification($details));
        }


        Session::flash("message", "his package's transaction has been updated and a message sent to the sender");
    }

    public function delete(Package $package)
    {
        $package->delete();

        Session::flash("message", "The transaction for this package has been deleted");

        return view();
    }
}
