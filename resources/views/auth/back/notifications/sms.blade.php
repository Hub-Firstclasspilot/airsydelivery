@extends('layouts.auth.back')

@section('content')
<div class="grid grid-cols-12 gap-2 mt-5">
    <div class="intro-y col-span-12 lg:col-span-10 mx-auto">
        <!-- BEGIN: Vertical Form -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                <h2 class="font-medium text-base mr-auto">
                    Send SMS
                </h2>
            </div>
            <div class="p-5" id="vertical-form">
                <form action="{{ route('notifications.sms.send') }}" method="post">
                    @csrf
                    <div class="preview">
                        <div>
                            <label>Phone Number</label>
                            <input type="tel" class="input w-full border mt-2" name="receiver" required>
                        </div>
                        <div class="mt-3">
                            <label>Message</label>
                            <textarea rows="4" cols="6" class="input w-full border mt-2" name="message" required>
                            </textarea>
                        </div>
                        <button type="submit" class="button bg-theme-1 text-white mt-5">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- END: Vertical Form -->
    </div>
</div>
@endsection