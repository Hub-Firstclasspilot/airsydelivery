<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADC Logistics | {{ $title ?? "" }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="./Styles/index.css">
    <link rel="stylesheet" href="./Styles/responsive.css">
    <script src="https://code.iconify.design/2/2.1.1/iconify.min.js"></script>
</head>
<body>
    <!-- Nav Section  -->
    @include('partials._navbar')
      
    @yield('content')

    @include('partials._footer')
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