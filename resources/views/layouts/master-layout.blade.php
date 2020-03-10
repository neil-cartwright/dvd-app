<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="robots" content="noindex">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Films @yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>
  @include('includes/navbar')

  <div class="container left-sidebar-container">
    @include('includes/left-sidebar')
  </div>

  <div class="container main-container">
    <div class="row">
      <div class="twelve columns">
        @yield('main')
      </div>
    </div><!-- row -->
  </div><!-- container -->


  <script src="{{ asset('js/app.js') }}"></script>
  <script>
    let date = new Date();
    let year = date.getFullYear();
    let putYearHere = document.querySelector('.year');
    putYearHere.innerHTML = year;
  </script>
  @stack('scripts-after')
</body>

</html>
