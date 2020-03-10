@extends('layouts.master-layout')
@section('title', 'index')

@section('main')

      <div class="message">
        @if(session('message'))
          <p>{{ session('message') }}</p>
        @endif
      </div>

      <div class="index">
        <h5 class="title">@if(isset($genre))<span class="text-blue">{{ $genre }}</span> <span class="badge">{{ $count }}</span> @else All <span class="badge">{{ $count }}</span>@endif</h5>
      </div>
      @if(request()->route()->getActionMethod() != 'searchByGenre')
      <div class="index-filter">
        <label for="alpha-filter" class="title">Filter:</label>
          <select name="alpha-filter" id="alpha-filter">
            <?php $letters = range('A', 'Z');$numbers = range('1','9'); ?>
            @foreach($letters as $letter)
              <option value="{{ $letter }}">{{ $letter }}</option>
            @endforeach
            @foreach($numbers as $number)
              <option value="{{ $number }}">{{ $number }}</option>
            @endforeach
          </select>
      </div>
      <div class="filter-result-info">
        <h5 class="title">filtered to <span class="badge">{{ count($films) }}</span></h5>
      </div>
      @endif


      <div class="search-result">
        <table class="u-full-width">
          <thead>
            <tr>
              <th>No.</th>
              <th>Title</th>
              <th class="hidden-mobile">Director</th>
              <th class="hidden-mobile">Leading Actor</th>
              <th class="hidden-mobile">Supporting Actor</th>
              <th class="hidden-mobile">Year</th>
              @auth
              <th class="hidden-mobile">Edit</th>
              @endauth
            </tr>
          </thead>
          <tbody>
            @foreach($films as $film)
            <tr>
              <td>{{ $film->id }}</td>
              <td>
                <a target="_blank" href="https://www.rottentomatoes.com/search/?search=
                {{ $film->title}}">{{ ucwords($film->title) }} </a>
              </td>
              <td class="hidden-mobile">{{ $film->director}} </td>
              <td class="hidden-mobile">{{ $film->leading_actor }}</td>
              <td class="hidden-mobile">{{ $film->supporting_actor }}</td>
              <td class="hidden-mobile">{{ $film->year }}</td>
              @auth
              <td class="hidden-mobile"><a href="/films/show/{{ $film->id }}"><span><i class="far fa-edit"></i></span></a></td>
              @endauth
            </tr>
            @endforeach
            <tr>

            </tr>
          </tbody>
        </table>
      </div>

@endsection

@if( request()->route()->getAction('controller') === 'App\Http\Controllers\FilmController@searchByGenre' )

  @push('scripts-after')
  <script>
    const genreMenu = document.querySelector('.genre-menu');
    genreMenu.style.display = 'block';
  </script>
  @endpush
@endif

@push('scripts-after')
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const alphaFilter = document.querySelector('#alpha-filter');

      if( location.pathname  !== '/') {
        alphaFilter.value = location.href.substr(location.href.lastIndexOf('/') + 1);
      }

      alphaFilter.addEventListener('change', function() {

        let letter = alphaFilter.value.toUpperCase();

        document.location = '{{ url("films/search/alpha") }}' + '/' + letter;

      });
    });
  </script>
@endpush

