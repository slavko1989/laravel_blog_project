
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light bg-light px-5 py-2">
  <div class="container-fluid">
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        @auth
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/" active>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('admin/logout') }}">Logout</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('users_views/contact_page') }}">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Account</a>
        </li>
        
        @else
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/" active>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/register">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('users_views/contact_page') }}">Contact</a>
        </li>
       
        
        @endauth

      </ul>
      <form class="d-flex" role="search" action="{{ url('users_views/search') }}">
        <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

</header>