<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="@lang('general.website.keywords')">
    <meta name="description" content="@lang('general.website.description')">
    <meta name="author" content="@lang('general.website.author')">
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="canonical" href="{{ config('app.url') }}">
    <title>@yield('title') | {{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="{{ asset('assets/css/compiled.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Dosis:200,400,500,600">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-touch-icon.png') }}">
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">

    <!--  Open Graph Tags -->
    <meta property="og:title" content="{{ config('app.name') }}">
    <meta property="og:description" content="@lang('general.website.description')">
    <meta property="og:image" content="{{ asset('assets/img/og-fornax-studio-img.jpg') }}">
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="shortcut icon" href="{{ asset("favicon.ico") }}"/>
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset("assets/img/dngo/apple-icon-57x57.png") }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset("assets/img/dngo/apple-icon-60x60.png") }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset("assets/img/dngo/apple-icon-72x72.png") }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset("assets/img/dngo/apple-icon-76x76.png") }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset("assets/img/dngo/apple-icon-114x114.png") }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset("assets/img/dngo/apple-icon-120x120.png") }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset("assets/img/dngo/apple-icon-144x144.png") }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset("assets/img/dngo/apple-icon-152x152.png") }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset("assets/img/dngo/apple-icon-180x180.png") }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset("assets/img/dngo/android-icon-192x192.png") }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset("assets/img/dngo/favicon-32x32.png") }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset("assets/img/dngo/favicon-96x96.png") }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("assets/img/dngo/favicon-16x16.png") }}">
    <link rel="manifest" href="{{ asset("assets/img/dngo/manifest.json") }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset("assets/img/dngo/ms-icon-144x144.png") }}">
    <meta name="theme-color" content="#ffffff">
</head>

<body class="@stack('body-class')">
@yield('page')
<script src="{{ asset('assets/js/compiled.js') }}"></script>
{!! NoCaptcha::renderJs() !!}
@stack('scripts')
<script>@stack('code')</script>
</body>
</html>