<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;
use DB;

class FilmController extends BaseController
{

    /**
     * check BaseController for all the data which is shared across this controller
     */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('temp.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('temp/create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Film $film)
    {
        $validatedDate = $request->validate([
            'title' => 'required',
            'genre' => 'required'
        ]);

        $film = new Film;
        $film->title = $request->input('title');
        $film->director = $request->input('director');
        $film->leading_actor = $request->input('leading_actor');
        $film->supporting_actor = $request->input('supporting_actor');
        $film->genres = implode(' ', $request->input('genre'));
        $film->year = $request->input('year');
        $film->save();

        return redirect()->back()->with('message', 'Film has been saved to database');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show($id, Film $film)
    {

        $film = Film::find($id);

        $this_film_genres = Film::where('id', $id)->pluck('genres');
        $this_film_genres = $this_film_genres[0];

        return view('temp.create', compact('film', 'this_film_genres'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Film $film)
    {
        $film = Film::find($id);

        $this_film_genres = Film::where('id', $id)->pluck('genres');
        $this_film_genres = explode(' ', $this_film_genres[0]);


        return view('temp.update', compact('film', 'this_film_genres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Film $film, $id)
    {


        $title = $request->input('title');
        $director = $request->input('director');
        $leading_actor = $request->input('leading_actor');
        $supporting_actor = $request->input('supporting_actor');
        $genres = implode(' ', $request->input('genre'));
        $year = $request->input('year');

        $update = DB::table('films')->where('id', $id)->update([
            'title' => $title,
            'director' => $director,
            'leading_actor' => $leading_actor,
            'supporting_actor' => $supporting_actor,
            'genres' => $genres,
            'year' => $year
        ]);

        return redirect()->route('index')->with('message', 'Film details for ' . $title . ' have been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film, $id)
    {
        $film = Film::find($id);
        $removed_film_title = $film->title;
        $film->delete();

        return redirect('/')->with('message', 'Film ' . $removed_film_title . ' was deleted');
    }

    public function search()
    {
        return view('films/search');
    }

    public function searchFilms(Request $request)
    {

        $wild_search = '%' . $request->search_term . '%';

        $films = DB::table('films')
            ->where('title', 'LIKE', $wild_search)
            ->orWhere('director', 'LIKE', $wild_search)
            ->orWhere('leading_actor', 'LIKE', $wild_search)
            ->orWhere('supporting_actor', 'LIKE', $wild_search)
            ->orWhere('genres', 'LIKE', $wild_search)
            ->orWhere('year', 'LIKE', $wild_search)
            ->orderBy('title')
            ->get();

        return response()->json($films);
    }

    public function searchByGenre($genre = null)
    {

        $films = Film::where('genres', 'LIKE', '%' . $genre . '%')->orderBy('title')->get();

        $count = count($films);

        $genre = $genre;

        return view('temp.index', compact('films', 'genre', 'count'));
    }

    public function searchByAlpha(Request $request, $letter = null)
    {

        $letter = $request->segment(count(request()->segments()));

        $films = Film::where('title', 'LIKE', $letter . '%')->orderBy('title')->get();

        return view('films.index', compact('films'));
    }


    public function showLoginForm()
    {
        return view('auth.login');
    }


    public function searchDetail(Request $request, $what, $who_when)
    {

        $films = Film::where($what, 'LIKE', $who_when . '%')->orderBy('title')->get();
        return view('temp.index')->with('films', $films);
    }
}
