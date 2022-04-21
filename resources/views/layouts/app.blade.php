<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/app.css') }}">
</head>
<body>
@include('partials.app.nav')
@yield('content')
@include('partials.app.footer')
</body>
</html>
