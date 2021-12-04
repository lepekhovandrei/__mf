<?

namespace App\Components;
/**
 *
 */
use GuzzleHttp\Client;

class importFilm
{

  public $client;

  function __construct()
  {
    $this->client = new Client([
        'base_uri' => 'https://api.themoviedb.org/3/discover/',
        'timeout'  => 2.0,
        'verify' => false
    ]);
  }
}
