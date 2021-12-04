<?php

namespace App\Http\Controllers;

use App\Film;

use GuzzleHttp\Client;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Http;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     // $client = new Client;
     // $requestMovie = $client->get('https://api.themoviedb.org/3/discover/movie?api_key=f564ef36ff270a71a2d1f769b72cd1bd&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&with_watch_monetization_types=flatrate')
     // ->getBody()->getContents();
     // $requestGenre = $client->get('https://api.themoviedb.org/3/genre/movie/list?api_key=f564ef36ff270a71a2d1f769b72cd1bd&language=ru-RU')
     // ->getBody()->getContents();
     //
     // $popularMovies = json_decode($requestMovie)->results;
     // $movieGenre = json_decode($requestGenre)->genres;



    public function index() {

      function search() {
          dd('sss');
      }

      $film = Film::paginate(20);
      return view('index', [
        'film' => $film
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
