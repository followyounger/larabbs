<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scle=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title','LaraBBS')-Laravel进阶教程</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app" class="{{ route_class()}}-page">
        @include('layouts._header')
        <div class="container">
            @yield('content')
        </div>
        @include('layouts._footer')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>