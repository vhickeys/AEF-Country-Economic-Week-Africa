<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'Africa CEO Council') | Africa CEO Council</title>
    <meta name="description"
        content="Africa CEO Council is a prestigious group of CEOs
        and business leaders from across Africa who come together to collaborate, share knowledge, and advocate for policies that promote economic growth and development on the continent.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/aef-cewa/logo/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/aef-cewa/logo/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/aef-cewa/logo/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/aef-cewa/logo/favicon/site.webmanifest') }}">
    
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

</head>

<body>

    @include('layouts.partials.preloader')
    @include('layouts.partials.header')

    <main>

        @yield('content')

    </main>

    @include('layouts.partials.footer')

</body>

</html>