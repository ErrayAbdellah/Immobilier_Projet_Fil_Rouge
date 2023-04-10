<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('Home.layouts.header')   
</head>
<body class="flex flex-col">
    
  @include('Home.layouts.navBar')
  {{-- @include('Home.layouts.CarouselWrapper')--}}
  
  @yield('content')
  @include('Home.layouts.footerPage')
  @include('Home.layouts.footer')

</body>
</html>