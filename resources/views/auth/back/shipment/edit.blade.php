@extends('layouts.auth.back')

@section('content')
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Regular Form
    </h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-10 mx-auto">
        <!-- BEGIN: Vertical Form -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                <h2 class="font-medium text-base mr-auto">
                    Create Shipment
                </h2>
            </div>
            <div class="p-5" id="vertical-form">
                <div class="preview">
                    <div>
                        <label>Sender Name</label>
                        <input type="text" class="input w-full border mt-2" placeholder="example@gmail.com" name="sender_name" required>
                    </div>
                    <div class="mt-3">
                        <label>Sender Phone</label>
                        <input type="tel" class="input w-full border mt-2" placeholder="Enter Phone number" name="sender_phone" required>
                    </div>
                    <div class="mt-3">
                        <label>Sender Email</label>
                        <input type="email" class="input w-full border mt-2" placeholder="Enter Email address" name="sender_email" required>
                    </div>
                    <div class="mt-3">
                        <label>Sender Location</label>
                        <textarea class="input w-full border mt-2" placeholder="Enter Address" name="sender_address" required>
                        </textarea>
                    </div>
                    <div class="mt-3">
                        <label>Receiver's Name</label>
                        <input type="text" class="input w-full border mt-2" placeholder="Enter Name of the receiver" name="receiver_name" required>
                    </div>
                    <div class="mt-3">
                        <label>Receiver's Phone number</label>
                        <input type="tel" class="input w-full border mt-2" placeholder="Enter the phone number of the receiver" name="receiver_phone" required>
                    </div>
                    <div class="mt-3">
                        <label>Receiver's Email Address</label>
                        <input type="email" class="input w-full border mt-2" placeholder="Enter email address of the receiver" name="receiver_email" required>
                    </div>
                    </div>
                    <div class="mt-3">
                        <label>Receiver's Location</label>
                        <textarea class="input w-full border mt-2" placeholder="Enter address of the receiver" name="receiver_location" required>
                        </textarea>
                    </div>
                    <button type="button" class="button bg-theme-1 text-white mt-5">Login</button>
                </div>
            </div>
        </div>
        <!-- END: Vertical Form -->
    </div>
</div>
@endsection