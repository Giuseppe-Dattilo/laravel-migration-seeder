<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset ('favicon.ico') }}" type="image/ico" rel="icon">
    <title>{{env('APP_NAME', 'Trains')}} | @yield('title')</title>
    
    @yield('cdns')
    @vite('resources/js/app.js')

</head>

<body>
    @include('includes.header')
    <main>
        @yield('main-content')
    </main>

    @yield('scripts')
</body>
</html>