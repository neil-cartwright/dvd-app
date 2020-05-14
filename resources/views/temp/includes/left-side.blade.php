 <div class="left-side p-2">

     <div class="bg-gray-200 m-2 p-2 rounded flex items-center">
         <span class="mr-2 py-2">Current Search:</span>
         @if(true)
         <!-- check something -->
         <span class="p-2 rounded
             font-semibold" id="current-search">{{ request()->segment(count(request()->segments())) }}
         </span>
         <span class="ml-auto" id="current-search-count">&nbsp;{{ $films->count() }} films</span>
         @endif
     </div>
     <div class="bg-gray-200 m-2 p-2 rounded flex justify-between items-center cursor-pointer hover:bg-gray-300"
         id="show-genres">
         <a class="">Genres</a>
         <i class="fas fa-caret-square-down fa-2x ml-2 text-green-500" id="genre-caret"></i>
     </div>
     <div id="genres" class="bg-gray-200 m-2 p-2 rounded flex items-center flex-wrap">
         <a class="p-2 m-1 rounded border-solid border-gray-500 bg-green-500 hover:bg-green-600 text-white" href="/">All
             films</a>
         @foreach($genres as $genre)
         <a class="p-2 m-1 rounded border-solid border-gray-500  text-center flex-grow bg-gray-300 hover:bg-gray-400
         @if( request()->segment(count(request()->segments())) == $genre )
            bg-teal-400 font-semibold text-white
         @endif
         " href="/films/search/{{$genre}}">{{ $genre }}</a>
         @endforeach
     </div>



     <div class="bg-gray-200 m-2 p-2 rounded flex items-center">
         <label for="film-search" class="mr-4">Filter</label>
         <form class="flex-grow" action="
     ">
             <input id="film-search"
                 class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 w-full appearance-none leading-normal"
                 type="email" placeholder="Steven Spielberg" autofocus>
         </form>
     </div>

 </div>

 @push('scripts-after')
 <script>
     $(document).ready(function () {

         $('#genres').hide();
         $('#show-genres').on('click', function () {
             $('#genres').slideToggle();
             $('#genre-caret')
                 .toggleClass('fa-caret-square-up')
                 .toggleClass('fa-caret-square-down')
         });

         let searchBox = $('#film-search');

         searchBox.on('keyup', function () {

             $('#ajax-unfiltered').hide();
             $('#ajax-filtered').show();
             $('#current-search').html(searchBox.val());


             $.ajaxSetup({
                 headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 }
             });

             $.ajax({
                 type: 'POST',
                 url: "{{ url('films/search') }}",
                 data: {
                     search_term: searchBox.val()
                 }
             }).done(function ($films) {

                 let output = '';

                 $.each($films, function (key, $film) {
                     // split genres into an array ready for foreach loop
                     let genres = $film.genres.split(' ');
                     // template literal using a php include for template //
                     output += `@include('temp/includes/each-film-ajax')`;
                 });

                 $('#ajax-filtered').html(output);

                 $('#current-search-count').html($films.length + ' films');

             });

         });

     })
 </script>
 @endpush