<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ getenv('APP_NAME') }} | </title>

</head>


<body>
    @include('includes.navbar')
    @yield('content')

    @yield('script')

    @include('includes.footer')
</body>

</html>
