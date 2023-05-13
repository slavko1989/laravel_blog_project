<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
@yield('link')
</head>
<body class="w3-light-grey">
  <div class="w3-content" style="max-width:1400px">
    
    @yield('top-3')
    
    @yield('posts')
    @yield('sidebar')

@include('layout.footer')
    
