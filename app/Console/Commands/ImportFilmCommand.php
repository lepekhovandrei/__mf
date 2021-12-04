<?php

namespace App\Console\Commands;

use App\Components\importFilm;
use App\Film;
use Illuminate\Console\Command;

class ImportFilmCommand extends Command
{

    protected $signature = 'getfilm';

    protected $description = 'Import film from tmdb';


    public function __construct()
    {
        parent::__construct();
    }


    public function handle()
    {
        $page = 22;
        $import = new importFilm();
        $response = $import->client->request('GET', 'movie?api_key=f564ef36ff270a71a2d1f769b72cd1bd&language=ru-RU&sort_by=popularity.desc&include_adult=false&include_video=false&page='.$page.'&with_watch_monetization_types=flatrate');
        $data = json_decode($response->getBody()->getContents())->results;


        foreach ($data as $item) {

          Film::firstOrCreate([
            'title' => $item->title
          ],[
            'title' => $item->title,
            'poster_path' => $item->poster_path,
            'genre' => $item->genre_ids[0],
            'id_tmdb_film' => $item->id,
            'original_language' => $item->original_language,
            'original_title' => $item->original_title,
            'overview' => $item->overview,
            'release_date' => $item->release_date,
            'vote_average' => $item->vote_average,
          ]);
        }
        dd('All finish');
    }
}
