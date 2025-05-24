<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @vite('resource/css/app.css')
</head>
<body>
    @include('partials.header')

  
    @yield('content')


    @include('partials.footer')
</body>
</html> 