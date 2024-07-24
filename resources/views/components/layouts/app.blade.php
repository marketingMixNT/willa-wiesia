@props(['title', 'description', 'noFollow' => false])


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- Cookie Yes --}}
    <script id="cookieyes" type="text/javascript" src="https://cdn-cookieyes.com/client_data/945450879eae20641043e865/script.js"></script>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-T4D6TCX7');</script>
    <!-- End Google Tag Manager -->

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
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T4D6TCX7"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <x-preloader/>

<x-shared.header>{{$header}}</x-shared.header>

<main>

    {{ $main }}
</main>

<x-shared.footer />
@livewireScripts()
@vite('resources/js/app.js')
</body>

</html>
</body>

</html>
