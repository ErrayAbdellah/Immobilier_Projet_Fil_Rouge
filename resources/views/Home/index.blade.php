<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','home')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('Home.layouts.header')   
    {{-- <script src="vendors/sweetalert2/dist/sweetalert2.min.js"></script><!-- sweet alert --> --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body class="flex flex-col">
    
  @include('Home.layouts.navBar')
 
  
  @yield('content')
  
  @include('Home.layouts.footerPage')
  @include('Home.layouts.footer')
  @yield('script')
  @if ($message = Session::get('success'))
  {{-- <x-alert-success/> --}}
      <script>
              Swal.fire({
                  position: 'top-end',
                  icon: 'success',
                  title: '{{$message}} ',
                  showConfirmButton: false,
                  timer: 1500
              })
      </script> 
      @endif
</body>
</html>