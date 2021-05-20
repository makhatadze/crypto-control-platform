<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link href="{{ asset('dist/images/logo.svg') }}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Crypto admin">
    <meta name="keywords" content="admin crypto">
    <meta name="author" content="MAKHATADZE">
    @yield('head')

</head>
<body>
@yield('body')
</body>
</html>