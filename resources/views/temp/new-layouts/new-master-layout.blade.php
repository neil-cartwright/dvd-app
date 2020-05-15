<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="robots" content="noindex">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Films @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/new-app.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>

    <body>

        @yield('main')

        @include('temp/includes/confirmation-overlay')


        <script src="{{ asset('js/app.js') }}"></script>
        <script>
            let date = new Date();
            let year = date.getFullYear();
            let putYearHere = document.querySelector('.cur_year');
            putYearHere.innerHTML = year;
        </script>
        @stack('scripts-after')
        <script>
            $(document).ready(function () {
                let overlay = $('.confirmation-overlay-outer');
                overlay.hide();
                overlay.removeClass('hidden'); // removes native class which prevents fouc
                $('.right-side').on('click', '.delete-film', function () {
                    let theFilmId = $(this).data('id');
                    let theFilmTitle = $(this).data('title');
                    $('#the-film-title').html(theFilmTitle);
                    overlay.show();
                    $('#do-not-delete-film').on('click', function () {
                        overlay.hide();
                    })
                    $('#go-ahead-and-delete-film').on('click', function () {
                        window.location = '/films/delete/' + theFilmId;
                    })
                });
            })
        </script>
    </body>

</html>