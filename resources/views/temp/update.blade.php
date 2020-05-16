@extends('temp/layouts.master-layout')
@section('title', 'update film')

@section('main')

@include('temp/includes/navbar')

<h1 class="px-8 py-4 font-bold">Change film records</h1>

@if(Session::has('message'))
<p class="bg-red-400 p-2 w-full">{{ Session::get('message') }}</p>
@endif


@if ($errors->any())
<div>
    <ul class="bg-red-200 p-6">
        @foreach ($errors->all() as $error)
        <li class="text-red-800">{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<form action="/films/update/{{ $film->id }}" method="POST">

    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    <div class="flex flex-col md:flex-row justify-around p-4">

        <div class="left flex flex-col p-2 md:w-1/2">

            <p class="font-bold p-2">Details</p>

            <div class="contains-inputs bg-gray-200 p-4 rounded">

                <input name="_token" type="hidden" value="{{ csrf_token() }}" />

                <div class="flex items-center">
                    <label class="w-1/2 font-bold" for="title">Title</label>
                    <input type="text" value="{{ $film->title }}"
                        class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 w-full appearance-none leading-normal"
                        name="title" id="title" placeholder="Raiders of the lost ark" autofocus required>
                </div>

                <div class="flex items-center mt-2"><label class="w-1/2 font-bold" for="director">Director</label>
                    <input type="text" value="{{ $film->director }}"
                        class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 w-full appearance-none leading-normal"
                        name="director" id="director" placeholder="Steven Spielberg">
                </div>

                <div class="flex items-center mt-2"><label class="w-1/2 font-bold" for="leading-actor">Leading
                        Actor</label>
                    <input type="text" value="{{ $film->leading_actor }}"
                        class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 w-full appearance-none leading-normal"
                        name="leading_actor" id="leading_actor" placeholder="Harrison Ford"></div>

                <div class="flex items-center mt-2"><label class="w-1/2 font-bold" for="supporting_actor">Supporting
                        Actor</label>
                    <input type="text" value="{{ $film->supporting_actor }}"
                        class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 w-full appearance-none leading-normal"
                        name="supporting_actor" id="supporting_actor" placeholder="Denhold Elliot"></div>

                <div class="flex items-center mt-2"><label class="w-1/2 font-bold" for="year">Year</label>
                    <input type="text" value="{{ $film->year }}"
                        class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 w-full appearance-none leading-normal"
                        name="year" id="year" placeholder="1983"></div>

                <button type="submit" class="rounded p-2 bg-red-400 hover:bg-red-500 text-white mt-4 "
                    name="submit">Update film</button>

            </div>

        </div>

        <div class="right flex flex-col md:w-1/2 p-2 rounded">
            <p class="font-bold mb-4">Genre</p>
            <div class="film-genre-checkboxes flex flex-col">

                @foreach($genres as $genre)
                <label class="flex items-center p-2 mb-2 bg-gray-200 hover:bg-gray-300 rounded" for="{{ $genre }}">
                    <input type="checkbox" id="{{ $genre }}" name="genre[]" value="{{ $genre }}"
                        class="mr-2 bg-white border border-gray-300 border-solid rounded-lg" @if(in_array($genre,
                        $this_film_genres)) checked @endif>
                    <span class="flex-grow cursor-pointer">{{ $genre }}</span>
                </label>
                @endforeach
            </div>
        </div>
    </div>
</form>

@include('temp/includes/footer')

@endsection