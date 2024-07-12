@props(['title', 'description', 'noFollow' => false])


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">

    {{-- No Follow --}}
    @if ($noFollow)
        <meta name="robots" content="noindex, nofollow">
    @endisset

    <!--Title-->
    <title>{{ isset($title) ? $title : '' }}</title>
    <meta name="description" content="{{ isset($description) ? $description : '' }}">


    <!--Cannonical-->
    <link rel="canonical" href="{{ url()->current() }}" />

    <!--Favicon-->
    @include('partials.favicon')

    <!--Fonts-->

    @include('partials.fonts')
    <!--Facebook-->
    @include('partials.facebook')




    @livewireStyles
    @vite('resources/scss/app.scss')

</head>

<body class="overflow-x-hidden">

<x-shared.header />

<main>

    {{ $slot }}
</main>

<x-shared.footer />
@livewireScripts()
@vite('resources/js/app.js')
</body>

</html>
</body>

</html>
