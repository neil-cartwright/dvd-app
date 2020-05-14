<div class="right-side">
    @foreach($films as $film)
    <div class="w-full p-2 border-b border-1 border-solid border-gray-400 flex flex-col items-around">

        <div class="title flex items-baseline">
            <span class="film-title text-lg font-bold mr-2">{{ ucwords($film->title) }}</span>
            <span class="year underline text-sm"><a
                    href="/films/search/year/{{$film->year}}">{{ $film->year }}</a></span>
        </div>

        <div class="credits mt-2">
            <span class="text-normal font-semibold mr-2"><a
                    href="/films/search/director/{{$film->director}}">{{ $film->director }}</a></span>
            <span class="text-sm italic mr-2"><a
                    href="/films/search/leading_actor/{{$film->leading_actor}}">{{ $film->leading_actor }}</a></span>
            <span class="text-sm italic mr-2"><a
                    href="/films/search/supporting_actor/{{$film->supporting_actor}}">{{ $film->supporting_actor }}</a></span>
        </div>

        <div class="genre mt-2">
            @foreach(explode(' ', $film->genres) as $genre)
            <span><a class="hover:underline mr-2" href="/films/search/{{$genre}}">{{ $genre}}</a></span>
            @endforeach
        </div>

        <div class="mt-2">
            <a target="_blank" href="https://rottentomatoes.com/search?search={{$film->title}}"><img class="h-4"
                    src="{{ asset('/img/rotten.svg')}}" alt="rotten tomato"></a>
        </div>

    </div>
    @endforeach
</div>