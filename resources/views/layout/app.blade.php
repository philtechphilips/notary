<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ getenv('APP_NAME') }} | </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("css/global.css") }}">
    <link rel="stylesheet" href="{{ asset("css/mod-swiper.css") }}">
    @vite('resources/css/app.css')

</head>


<body>
    @include('includes.navbar')

    @yield('content')

    @include("includes.cta")

    @include('includes.footer')




    {{-- Swiper JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    {{-- Swiper JS --}}

    @yield('script')
</body>

</html>
