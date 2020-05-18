<div class="right-side">

    <div id="ajax-unfiltered">
        @foreach($films as $film)
        @include('app/includes/each-film')
        @endforeach
    </div>

    <div id="ajax-filtered">

    </div>

</div>