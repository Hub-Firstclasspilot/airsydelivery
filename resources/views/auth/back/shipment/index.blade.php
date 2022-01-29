@extends('layouts.auth.back')

@php
    dump($packages);
@endphp

@section('content')
<div class="grid grid-cols-6 gap-12 mt-5">
    <div class="intro-y col-span-12 lg:col-span-6">
        <!-- BEGIN: Basic Table -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                <h2 class="font-medium text-base mr-auto">
                    Packages
                </h2>
            </div>
            <div class="p-5" id="basic-table">
                <div class="preview">
                    <div class="overflow-x-auto">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="border-b-2 whitespace-no-wrap">#</th>
                                    <th class="border-b-2 whitespace-no-wrap">Tracking ID</th>
                                    <th class="border-b-2 whitespace-no-wrap">Package Type</th>
                                    <th class="border-b-2 whitespace-no-wrap">Package Weight</th>
                                    <th class="border-b-2 whitespace-no-wrap">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($packages as $package)
                                <tr>
                                    <td class="border-b">{{ $package->id }}</td>
                                    <td class="border-b">{{ $package->tracking_id }}</td>
                                    <td class="border-b">{{ $package->type }}</td>
                                    <td class="border-b">{{ $package->weight }}</td>
                                    <td class="border-b flex justify-center">
                                        
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Basic Table -->
    </div>
</div>
@endsection
