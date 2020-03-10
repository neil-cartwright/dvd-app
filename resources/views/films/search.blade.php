@extends('layouts.master-layout')
@section('title', 'Search')

@section('left-sidebar')

@section('main')
<form class="search">
  <div>
    <label for="search_term">Search</label>
    <input class="u-full-width" type="text" id="search_box" autofocus>
  </div>
</form>

<section class="search-results" style="display:none;">
  <table class="films-index u-full-width">
    <thead>
      <tr>
        <th>No.</th>
        <th>Title</th>
        <th class="hidden-mobile">Director</th>
        <th class="hidden-mobile">Leading Actor</th>
        <th class="hidden-mobile">Supporting Actor</th>
        <th class="hidden-mobile">Year</th>
        <th class="hidden-mobile">Edit</th>
        <th class="hidden-mobile">Delete</th>
      </tr>

    </thead>
    <tbody class="films">

    </tbody>
  </table>
</section>
@endsection

@push('scripts-after')
  <script>
  $(document).ready(function() {
    let search_box = $('#search_box');

    search_box.on('keyup', function() {

      $('.search-results').show();

      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $.ajax({
          type: 'POST',
          url: "{{ url('films/search') }}",
          data: {
            search_term: search_box.val()
          }
      }).done(function($films) {

        let output = '';

        $.each($films, function(key, $film) {
          output += `
          <tr>
            <td>${$film.id}</td>
            <td>
              <a class="capitalize" target="_blank" href="https://www.rottentomatoes.com/search/?search=
              ${$film.title}">${$film.title}</a>
            </td>
            <td class="hidden-mobile">${$film.director}</td>
            <td class="hidden-mobile">${$film.leading_actor}</td>
            <td class="hidden-mobile">${$film.supporting_actor}</td>
            <td class="hidden-mobile">${$film.year}</td>
            <td class="hidden-mobile"><a href="/films/show/${$film.id}"><span><i class="far fa-edit"></i></span></a></td>
            <td class="hidden-mobile"><a id="delete-film" href="/films/delete/${$film.id}"><span><i class="fa fa-trash"></i></span></a></td>
          </tr>
          `;
        });

        $('.films').html(output);

      });// done
    });// ajax

    let deleteFilm = document.querySelector('table');
    deleteFilm.addEventListener('click', function(e) {
      if(e.target.parentElement.parentElement.id == 'delete-film') {
        confirm('Are you sure you want to delete this film from the database?');
      }
    })
  });//ready

  </script>
@endpush
