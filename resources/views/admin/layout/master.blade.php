
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

    <title>@yield('title')</title>
    @include('admin.layout.header')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

    <style>
*{
    margin: 0px;
    padding: 0px;
}
</style>
@yield('header')
</head>
    <body class="font-sans antialiased">








{{-- 

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>@yield('title')</title>
@include('admin.layout.header')

{{-- @vite('resources/css/app.css') --}}

{{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}


{{-- </head>
<body> --}}

@include('admin.layout.navbar')

@include('admin.layout.sidebar')

<div class="sm:ml-64" >
    <div class="rounded-lg">
        @yield('content')
    </div>
    </div>

    @yield('script')

@include('admin.layout.footer')

</body>
</html>