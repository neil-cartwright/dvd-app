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
  output += `@include('app/includes/each-film-ajax')`;

  });

  $('#ajax-filtered').html(output);

  // highlight searched text
  let len = searchBox.val().length;
  console.log(len);
  console.log($('#ajax-filtered').text());


  $('#current-search-count').html($films.length + ' films');

  });$('#ajax-filtered > div').text()