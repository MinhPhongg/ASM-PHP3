<!DOCTYPE html>
<html lang="en-us">
<head>
  @include('client.layout.partial.css')
</head>
<body>
  <!-- navigation -->
  @include('client.layout.partial.header')
  <!-- /navigation -->

  <!-- start of banner -->
  @include('client.layout.partial.banner')
  <!-- end of banner -->
  @yield('content')
  
  @yield('show')

  @yield('search')

<footer>
  @include('client.layout.partial.footer')
</footer>
    <!-- JS Plugins -->
  @include('client.layout.partial.js')
</html>