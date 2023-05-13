<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @yield('link')
</head>
<body>
<div class="col-sm-9">
  @yield('main')
</div>
</body>
</html>