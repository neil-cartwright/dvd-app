  <div class="w-full p-6 border-b border-1 border-solid border-gray-400 flex flex-col items-around sans">

      <div class="title flex justify-between items-center py-2">
          <div><span
                  class="slab film-title text-sm md:text-lg font-bold mr-2 tracking-wider bg-gray-200 px-2 -ml-2">{{ ucwords($film->title) }}</span>
              <span class="year hover:underline text-xs"><a
                      href="/films/search/year/{{$film->year}}">{{ $film->year }}</a></span></div>

          @if(Auth::check())
          <div class="flex flex-col md:flex-row">
              <a class="ml-auto delete-film cursor-pointer text-sm hover:underline" data-id="{{ $film->id }}"
                  data-title="{{ $film->title }}">Delete</a>
              <a class="ml-2 text-sm hover:underline" href="/films/edit/{{ $film->id }}">Update</a></div>
          @endif
      </div>

      <div class="credits mt-2 flex flex-wrap">
          <span class="text-sm md:text-base font-semibold mr-4 py-1"><a class="hover:underline"
                  href="/films/search/director/{{$film->director}}">{{ $film->director ? $film->director : 'Director unknown' }}</a></span>
          <div class="flex flex-grow items-center justify-start">
              <span class="text-sm italic mr-2"><a class="hover:underline"
                      href="/films/search/leading_actor/{{$film->leading_actor}}">{{ $film->leading_actor }}</a></span>
              <span class="text-sm italic mr-2"><a class="hover:underline"
                      href="/films/search/supporting_actor/{{$film->supporting_actor}}">{{ $film->supporting_actor }}</a></span>
          </div>
      </div>

      <div class="flex flex-wrap items-center justify-between border-t border-dashed border-gray-400">
          <div class="genre mt-2 flex flex-grow flex-wrap justify-start">
              @foreach(explode(' ', $film->genres) as $genre)
              <span><a class="hover:underline mr-2" href="/films/search/{{$genre}}">{{ $genre}}</a></span>
              @endforeach
          </div>

          <div class="flex justify-end items-center flex-grow">
              <div class="mt-2 ml-6">
                  <a target="_blank" href="https://rottentomatoes.com/search?search={{$film->title}}">
                      <img class="h-6" src="{{ asset('/img/rotten.svg')}}" alt="rotten tomato"></a>
              </div>

              <div class="mt-2 ml-6">
                  <a target="blank" href="https://en.wikipedia.org/wiki/{{ $film->title }}">
                      <i class="fab fa-wikipedia-w"></i></a>
              </div>
          </div>
      </div>

  </div>