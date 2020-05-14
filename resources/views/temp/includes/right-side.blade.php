<div class="right-side">

    <div id="ajax-unfiltered">
        @foreach($films as $film)
        @include('temp/includes/each-film')
        @endforeach
    </div>

    <div id="ajax-filtered">

    </div>

</div>