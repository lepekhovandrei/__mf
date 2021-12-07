<?php

namespace App\Http\Controllers;

use App\Film;

use GuzzleHttp\Client;

use Illuminate\Http\Request;



class FilmController extends Controller
{

     // $client = new Client;
     // $requestMovie = $client->get('https://api.themoviedb.org/3/discover/movie?api_key=f564ef36ff270a71a2d1f769b72cd1bd&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&with_watch_monetization_types=flatrate')
     // ->getBody()->getContents();
     // $requestGenre = $client->get('https://api.themoviedb.org/3/genre/movie/list?api_key=f564ef36ff270a71a2d1f769b72cd1bd&language=ru-RU')
     // ->getBody()->getContents();
     //
     // $popularMovies = json_decode($requestMovie)->results;
     // $movieGenre = json_decode($requestGenre)->genres;



    public function index() {

      $film = Film::orderBy('created_at', 'desc')->paginate(20);

      return view('index', [
        'film' => $film,
      ]);
    }

    public function films() {

      $film = Film::where('genre', '!=', '16')->orderBy('created_at', 'desc')->paginate(20);

      return view('films', [
        'film' => $film,
      ]);
    }

    public function cartoons() {

      // $film = Film::orderBy('created_at', 'desc')->paginate(20);
      $film = Film::where('genre', '=', '16')->orderBy('created_at', 'desc')->paginate(20);

      return view('cartoons', [
        'film' => $film,
      ]);


    }

    public function search(Request $request) {

      $s = $request->s;

      $film = Film::where('title', 'LIKE', "%{$s}%")->orderBy('title')->paginate(20);

      // dd($film);

      return view('search', [
        'film' => $film,
      ]);


    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $film = Film::paginate(20);
        $client = new Client;
        $movie = $client
        ->get('https://api.themoviedb.org/3/movie/'. $id .'?api_key=f564ef36ff270a71a2d1f769b72cd1bd&language=ru-RU')
        ->getBody()->getContents();

        $movieSingle = json_decode($movie);

        return view('show', [
          'movieSingle' => $movieSingle,
          'film' => $film
        ]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
