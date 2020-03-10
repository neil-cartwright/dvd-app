<div class="container navbar-container">
  <nav class="navbar">
      <ul class="navbar-list">
        <li class="navbar-item">
          <a class="navbar-link" href="/">Films</a>
        </li>
        <li class="navbar-item">
          <a class="navbar-link" href="/films/search">Search</a>
        </li>
        @auth
        <li class="navbar-item">
          <a class="navbar-link" href="{{ url('films/create') }}">Add</a>
        </li>
        @endauth
        <li class="navbar-item">
          <a class="navbar-link clickToShowGenreMenu @if(request()->route()->getActionMethod() == 'searchByGenre') text-blue @endif">Genres
          <i class="fas fa-caret-down"></i>
          </a>
        </li>
        @if(Auth::check())
          <li class="navbar-item">
            <a  class="navbar-link">{{ Auth::user()->name }}</a>
          </li>
          <li class="navbar-item">
            <a href="/logout" class="navbar-link">Logout</a>
          </li>
        @else
          <li class="navbar-item">
            <a href="/login" class="navbar-link">Login</a>
          </li>

        @endif
      </ul>

   </nav>

</div>
