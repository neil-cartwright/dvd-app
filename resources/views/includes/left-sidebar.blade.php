<div class="left-sidebar genre-menu">
    <h3 class="genre-title">Genres <span class="badge">{{ count($genres) }}</span></h3>
    <ul>
      @foreach($genres as $genre)
        <li>
          <a href="/films/search/{{ $genre }}"> {{ $genre }}</a>
       </li>
      @endforeach
    </ul>
</div><!-- col -->
