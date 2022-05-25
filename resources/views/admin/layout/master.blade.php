<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="@yield('keywords')"> 
    <meta name="description" content="@yield('description')">
    
    <title>@yield('title')</title>

    @include('admin.layout.partials.styles')
</head>

<body>
    @include('admin.layout.partials.header')

    <main>
        @yield('content')
    </main>

    @include('admin.layout.partials.js')
</body>

</html>