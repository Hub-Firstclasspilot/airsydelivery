@extends('layouts.auth.back')

@section('content')
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-10 mx-auto">
        <!-- BEGIN: Vertical Form -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                <h2 class="font-medium text-base mr-auto">
                    Update Shipment Status
                </h2>
            </div>

            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                <h2 class="font-medium text-base mr-auto">
                    Current Status
                </h2>
                
            </div>
            <div class="p-5" id="vertical-form">
                <form action="{{ route('package.status.update') }}" method="post">
                    @csrf
                    <div class="preview">
                        <div>
                            <label>Tracking ID</label>
                            <input type="text" class="input w-full border mt-2" name="tracking_id" required>
                        </div>
                        
                        <div class="mt-3">
                            <label>Location</label>
                            <input type="text" class="input w-full border mt-2" name="location" required>
                        </div>
                        
                        <div class="mt-2">
                            <select class="input input--lg border mr-2">
                                <option>Select package status</option>
                                <option value="processing">Processing</option>
                                <option value="delayed">Delayed</option>
                                <option value="delivered">Delivered</option>
                                <option value="completed">Completed</option>
                            </select>
                        </div>
                        <div class="mt-3">
                            <label>Description (if any)</label>
                            <textarea class="input w-full border mt-2" required name="description">
                            </textarea>
                        </div>
                        <button type="button" class="button bg-theme-1 text-white mt-5">Update Status</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- END: Vertical Form -->
    </div>
</div>
@endsection