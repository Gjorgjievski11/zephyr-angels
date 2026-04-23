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
    <x-sections.hero :hero="$hero" />
    <x-sections.about :about="$about" />
    <x-sections.impact :impact-stats="$impactStats" />
    <x-sections.services :services="$services" :services-section="$servicesSection" />
    <x-sections.portfolio :portfolio-items="$portfolioItems" />
    <x-sections.equity :equity="$equity" />
    <x-sections.team :team-members="$teamMembers" />
    <x-sections.sponsors :sponsors="$sponsors" />
    <x-sections.cta :cta="$cta" />
    <x-layout.footer :footer="$footer" />
</body>
</html>
