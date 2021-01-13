<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ url('frontend/libraries/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Assistant:wght@300;400;600;700;800&family=Playfair+Display:wght@400;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ url('frontend/styles/main.css') }}">
</head>

<body>

    @yield('content')

    <script src="{{ url('frontend/libraries/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ url('frontend/libraries/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ url('frontend/libraries/retina/retina.min.js') }}"></script>
</body>

</html>
