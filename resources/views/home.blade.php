<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Dynamic Title --}}
    <title>@yield('title', 'Zephyr Angels')</title>

    {{-- Metadata --}}
    <meta name="description" content="@yield('description', 'Zephyr Angels Official Website')">
    <meta name="theme-color" content="#00C4CA">

    {{-- Favicons --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('icons/favicon.svg') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('icons/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('icons/apple-touch-icon.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-ink">
    <x-layout.navbar />
    <x-sections.hero />
    <x-sections.about />
    <x-sections.impact />
    <x-sections.services />
    <x-sections.portfolio />
    <x-sections.equity />
    <x-sections.team />
    <x-sections.sponsors />
    <x-sections.cta />
    <x-layout.footer />
</body>
</html>
