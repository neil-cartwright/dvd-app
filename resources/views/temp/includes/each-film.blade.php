  <div class="w-full p-6 border-b border-1 border-solid border-gray-400 flex flex-col items-around">

      <div class="title flex items-baseline justify-start py-2">
          <span class="film-title text-lg font-bold mr-2 tracking-wider">{{ ucwords($film->title) }}</span>
          <span class="year hover:underline text-xs"><a
                  href="/films/search/year/{{$film->year}}">{{ $film->year }}</a></span>

          @if(Auth::check())
          <a class="ml-auto delete-film cursor-pointer" data-id="{{ $film->id }}" data-title="{{ $film->title }}">Delete
              from database</a>
          @endif
      </div>

      <div class=" credits mt-2">
          <span class="text-normal font-semibold mr-2"><a class="hover:underline"
                  href="/films/search/director/{{$film->director}}">{{ $film->director ? $film->director : 'Director unknown' }}</a></span>
          <span class="text-sm italic mr-2"><a class="hover:underline"
                  href="/films/search/leading_actor/{{$film->leading_actor}}">{{ $film->leading_actor }}</a></span>
          <span class="text-sm italic mr-2"><a class="hover:underline"
                  href="/films/search/supporting_actor/{{$film->supporting_actor}}">{{ $film->supporting_actor }}</a></span>
      </div>

      <div class="flex items-center justify-start border-t border-dashed border-gray-400">
          <div class="genre mt-2">
              @foreach(explode(' ', $film->genres) as $genre)
              <span><a class="hover:underline mr-2" href="/films/search/{{$genre}}">{{ $genre}}</a></span>
              @endforeach
          </div>

          <div class="flex ml-auto mr-6">
              <div class="mt-2 ml-6">
                  <a target="_blank" href="https://rottentomatoes.com/search?search={{$film->title}}"><img class="h-8"
                          src="{{ asset('/img/rotten.svg')}}" alt="rotten tomato"></a>
              </div>

              <div class="mt-2 ml-6">
                  <a target="blank" href="https://en.wikipedia.org/wiki/{{ $film->title }}"><i
                          class="fab fa-wikipedia-w"></i></a>
              </div>
          </div>
      </div>

  </div>