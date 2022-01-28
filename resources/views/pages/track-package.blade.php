@php
    $title = "Tracking Results";
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADC Logistics | {{ $title ?? "" }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/logistics.css', true) }}">
    <link rel="stylesheet" href="{{ asset('css/index.css', true) }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css', true) }}">
    <script src="https://code.iconify.design/2/2.1.1/iconify.min.js"></script>

</head>
<body>
    
        @include('partials._navbar')

          <div class="logi">
            <div class="wrap-logi">
                <div class="Order">
                    <div class="TextMainSection">
                        <h1>My Orders</h1>
                        <p>here are your activities relative to your packages. You can manage
                            and track your packages from here.
                        </p>
                    </div>
                    <div class="Trackid">
                    <form action="{{ route('package.track') }}" method="POST">
                        @csrf
                        <div class="input-tracking">
                            <input type="text" name="" id="id-inputs" placeholder='Enter Tracking ID' />
                            <div class="button-signin">
                                 <button type="submit" class="link-nav-button">Search</button>
                            </div>
                        </div>
                    </div>

                    @forelse ($status as $item)
                    @empty
                        <div class="orderinfo">
                            <div class="noidgiven">
                                @if (Session::has("message"))
                                    <h1 style='font-size:18px; color:gray'>{{ Session::get("message") }}<span style='font-size:13px; color:rgb(230, 230, 230)'><p>enter an id to track</p></span> </h1>
                                @endif
                            </div>
                        </div>
                    @endforelse

                    <div class="addOrder">
                        <div class="pluswrap">
                            <div class="plusbox">
                                <span class="iconify" style='display:inline' data-icon="uil:plus" data-width="25"></span>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
    </div>
</body>
<script>
    document.getElementById('userbutton').addEventListener('click', () => {
        document.getElementById('menudrop').style.display =  'block'
        document.getElementById('menudrop').addEventListener('mouseleave', () => {
            document.getElementById('menudrop').style.display =  'none'
        })
    })
</script>
</html>