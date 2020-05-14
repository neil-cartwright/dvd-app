<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use View;

class BaseController extends Controller
{

    protected $genres = [
        'Action',
        'Health',
        'Adventure',
        'Thriller',
        'Documentary',
        'Martial-arts',
        'Christmas',
        'Western',
        'Court-room-drama',
        'Romantic-comedy',
        'Comedy',
        'James-Bond',
        'Prison',
        'Crime',
        'Romance',
        'Chiller',
        'Science-fiction',
        'British',
        'Epic',
        'Fantasy',
        'Historical-drama',
        'Superhero',
        'Foreign-language',
        'Family',
        'Political-thriller',
        'Drama',
        'Animation',
        'Gangster',
        'British-TV-series',
        'American-TV-series',
        'Classic',
        'Childrens',
        'Disney',
        'War',
        'Supernatural',
        'Horror',
        'Suspense',
        'Musical',
        'Pixar',
        'Black-and-white'
    ];

    public function get_genres()
    {
        return $this->genres;
    }

    public function __construct()
    {
        $genres = $this->get_genres();
        sort($genres);
        $films = Film::orderBy('title')->get();
        $count = count($films);

        View::share('genres', $genres);
        View::share('films', $films);
        View::share('count', $count);
    }
}
