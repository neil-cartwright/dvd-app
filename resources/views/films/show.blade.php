@extends('layouts.master-layout')
@section('title', 'show film')

@section('main')

    @if(Session::has('message'))
      <p>{{ Session::get('message') }}</p>
    @endif

        <form action="{{ url('films/update', $film->id) }}" method="POST">
          {{csrf_field()}}
          <input name="_method" type="hidden" value="PATCH">
          <div class="row">

            <div class="eight columns">
              <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

              <label for="title">Title</label>
              <input type="text" class="u-full-width" name="title" id="title" value="{{ $film->title }}" autofocus>

              <label for="director">Director</label>
              <input type="text" class="u-full-width" name="director" id="director" value="{{ $film->director}}">

              <label for="leading-actor">Leading Actor</label>
              <input type="text" class="u-full-width" name="leading_actor" id="leading_actor" value="{{ $film->leading_actor }}">

              <label for="supporting_actor">Supporting Actor</label>
              <input type="text" class="u-full-width" name="supporting_actor" id="supporting_actor" value="{{ $film->supporting_actor }}">

              <label for="year">Year</label>
              <input type="text" name="year" id="year" value="{{ $film->year }}">

              <input type="hidden" value="{{ $this_film_genres }}" id="this_film_genres">

              <button type="submit" class="button-primary u-pull-right" name="submit">Update film</button>

            </div>


            <div class="four columns">
                <label>Genre</label>
              <div class="film-genre-checkboxes">
                  @foreach($genres as $genre)
                      <label for="{{ $genre }}"  name="{{$genre}}">
                        <input type="checkbox" id="{{ $genre }}" name="genre[]" value="{{ $genre }}" class="u-pull-left">
                        <span class="label-body">{{ $genre }}</span>
                      </label>
                  @endforeach
                </div>
            </div>
          </div>
        </form>

@endsection
@push('scripts-after')
  <script>
    let genres = document.querySelector('#this_film_genres').value;
    let inputs = document.querySelectorAll('input[type="checkbox"]');
    inputs.forEach(function(input){
      let value = input.getAttribute('id');
      if(genres.includes(value)) {
        input.setAttribute('checked', 'checked');
      }
    })
  </script>
@endpush
