@extends('layouts.auth.back')

@section('content')
<div class="grid grid-cols-6 gap-12 mt-5">
    <div class="intro-y col-span-6 lg:col-span-6 mx-auto">
        <!-- BEGIN: Vertical Form -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                <h2 class="font-medium text-base mr-auto">
                    Create Shipment
                </h2>
            </div>
            <div class="p-5" id="vertical-form">
                <form action="{{ route('package.create.post') }}" method="post">
                    @csrf
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
                            <textarea class="input w-full border mt-2" name="sender_address" required>
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
                        <div class="mt-3">
                            <label>Receiver's Location</label>
                            <textarea class="input w-full border mt-2"  name="receiver_location" required>
                            </textarea>
                        </div>
                        <div class="mt-3">
                            <label>Package Type</label>
                            <input type="text" class="input w-full border mt-2" placeholder="Enter package type" name="type" required>
                        </div>
                        <div class="mt-3">
                            <label>Package Weight</label>
                            <input type="number" class="input w-full border mt-2" placeholder="Enter package weight" name="weight" required>
                        </div>
                        <div class="mt-3">
                            <label>Location</label>
                            <input type="text" class="input w-full border mt-2" placeholder="Enter package location" name="location" required>
                        </div>
                        <div class="mt-3">
                            <label>Description</label>
                            <textarea name="description" cols="6" rows="6" class="input w-full border mt-2"></textarea>
                        </div>
                        <button type="submit" class="button bg-theme-1 text-white mt-5">Create Shipment</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- END: Vertical Form -->
    </div>
</div>
@endsection