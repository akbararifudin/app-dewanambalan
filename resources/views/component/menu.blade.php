<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <!-- Logo di bagian kiri navbar -->
    <a class="navbar-brand" href="#">
      <img src="assets/image/logo_dewan.png" alt="Logo" style="width: 75px; height: auto;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('profile') }}">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('event') }}">Event</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contact') }}">Contact</a>
        </li>
      </ul>
    </div>
    <div class="d-flex">
      @if(!Auth::check())
        <a href="{{ route('signup') }}" class="btn btn-light mx-2">SignUp</a>
        <a href="{{ route('signin') }}" class="btn btn-light">SignIn</a>
      @else
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('users') }}">Data Users</a>
              </li>

            </ul>
          </div>
        <a href="{{ route('logout') }}" class="btn btn-outline-light">Logout</a>
    @endif
      </div>
    </div>
  </nav>

