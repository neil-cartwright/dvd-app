  <div class="w-full p-6 border-b border-1 border-solid border-gray-400 flex flex-col items-around">

      <div class="title flex items-baseline py-2">
          <span class="film-title text-lg font-bold mr-2 tracking-wider">${$film.title}</span>
          <span class="year hover:underline text-xs"><a href="/films/search/year/${$film.year}">${ $film.year
                  }</a></span>
      </div>

      <div class="credits
         mt-2">
          <span class="text-normal font-semibold mr-2"><a class="hover:underline"
                  href="/films/search/director/${$film.director}">${ $film.director ? $film.director :
                  'Director unknown' }</a></span>
          <span class="text-sm italic mr-2"><a class="hover:underline"
                  href="/films/search/leading_actor/${$film.leading_actor}">${ $film.leading_actor ? $film.leading_actor
                  : 'Unknown' }</a></span>
          <span class="text-sm italic mr-2"><a class="hover:underline"
                  href="/films/search/supporting_actor/${$film.supporting_actor}">
                  ${ $film.supporting_actor ?
                  $film.supporting_actor : 'Unknown'
                  }</a></span>
      </div>

      <div class="flex items-center border-t border-dashed border-gray-400">
          <div class="genre mt-2">
              <!-- https://stackoverflow.com/questions/48368299/template-literals-with-a-foreach-in-it  -->

              ${ Object.keys(genres).map(function(key) {
              return '<span><a class="hover:underline mr-2" href="/films/search/' + genres[key] + '">' + genres[key]
                      + '</a></span>' }).join('')}

          </div>
          <div class="mt-2 ml-6">
              <a target="_blank" href="https://rottentomatoes.com/search?search=${$film.title}"><img class="h-8"
                      src="{{ asset('/img/rotten.svg')}}" alt="rotten tomato"></a>
          </div>

          <div class="mt-2 ml-6">
              <a target="blank" href="https://en.wikipedia.org/wiki/${ $film.title }}"><i
                      class="fab fa-wikipedia-w"></i></a>
          </div>
      </div>

  </div>



  </div>