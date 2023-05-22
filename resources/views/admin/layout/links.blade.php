<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="{{ asset('images/php2.jpg') }}" style="width:45px;height: 45px;border-radius: 50%;margin: -13px;"></a>
    </div>
    @auth
    <ul class="nav navbar-nav">
      <h1>Welcome, {{ auth()->user()->name }} &nbsp;
      <img src="{{ auth()->user()->profile_photo_url }}" style="width:45px;height: 45px;border-radius: 50%;margin: -13px;">
    </h1>
      <li class="active"><a href="{{ url('/') }}">Home</a></li>
      <li><a href="{{ url('admin/index') }}">Dashboard</a></li>
      <li><a href="{{ url('admin/logout') }}">Logout</a></li>
    </ul>
    
    @endauth
  </div>
</nav>

