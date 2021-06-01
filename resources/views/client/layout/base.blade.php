<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>SafeCrypto - Trusted and Secure Crypto Exchange</title>

    <!-- Mobile Specific Metas -->
    <META NAME="ROBOTS" CONTENT="NOINDEX, FOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link type="image/x-icon" href="/client/images/fav-icon.png" rel="icon">

    <!-- CSS -->

    <link rel="stylesheet" type="text/css" href="{{ asset('../client/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../client/css/color.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../client/css/responsive.css') }}">
    @yield('head')

</head>
<body>
@yield('body')
</body>
</html>
