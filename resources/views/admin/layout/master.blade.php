<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
@include('admin.layout.header')
    
    {{-- @vite('resources/css/app.css') --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
  
    @include('admin.layout.navbar')
  
    @include('admin.layout.sidebar')
  
    <div class="p-4 sm:ml-64 m-5" >
        <div class="p-4   rounded-lg mt-14">
          @yield('content')
        </div>
     </div>
  

@include('admin.layout.footer')


</body>
</html>