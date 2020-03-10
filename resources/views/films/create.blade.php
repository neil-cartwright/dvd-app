@extends('layouts.master-layout')
@section('title', 'add film')

@section('main')

    @if(Session::has('message'))
      <p>{{ Session::get('message') }}</p>
    @endif

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color:red;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <form action="{{ action('FilmController@store') }}" method="POST">

          <div class="row">

            <div class="six columns">
              <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

              <label for="title">Title</label>
              <input type="text" class="u-full-width" name="title" id="title" placeholder="Raiders of the lost ark" autofocus>

              <label for="director">Director</label>
              <input type="text" class="u-full-width" name="director" id="director" placeholder="Steven Spielberg">

              <label for="leading-actor">Leading Actor</label>
              <input type="text" class="u-full-width" name="leading_actor" id="leading_actor" placeholder="Harrison Ford">

              <label for="supporting_actor">Supporting Actor</label>
              <input type="text" class="u-full-width" name="supporting_actor" id="supporting_actor" placeholder="Denhold Elliot">

              <label for="year">Year</label>
              <input type="text" name="year" id="year" placeholder="1983">

              <button type="submit" class="button-primary u-pull-right" name="submit">Add film</button>

            </div>

            <div class="six columns">
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
