@extends('loyouts.main')
@section('title')
  {{ $movieSingle->title }} смотреть онлайн | 2kino
@endsection
@section('content')
  <div class="content_2">

    <div class="show_content">
      <div class="show_movie_info">
        <div class="show_movie_title"><h1>{{ $movieSingle->title }}</h1></div>
        <div class="show_movie_original_title">Оригинальное название<h2>{{ $movieSingle->original_title }}</h2></div>
        <div class="show_movie_info_list">
          <div class="info_list">
            @if ($movieSingle->tagline)
              <div class="info_list_item">
                <div class="info_list_item_name">Слоган:</div>
                <div class="info_list_item_value">{{ $movieSingle->tagline }}</div>
              </div>
            @endif
            <div class="info_list_item">
              <div class="info_list_item_name">Жанр:</div>
              <div class="info_list_item_value">{{ $movieSingle->genres[0]->name }}</div>
            </div>
            <div class="info_list_item">
              <div class="info_list_item_name">Рейтинг:</div>
              <div class="info_list_item_value">{{ $movieSingle->vote_average * 11 . '%' }}</div>
            </div>
            <div class="info_list_item">
              <div class="info_list_item_name">Дата выхода:</div>
              <div class="info_list_item_value">{{ $movieSingle->release_date }}</div>
            </div>
            @if (!$movieSingle->budget == 0)
              <div class="info_list_item">
                <div class="info_list_item_name">Бюджет:</div>
                <div class="info_list_item_value">${{ $movieSingle->budget }}</div>
              </div>
            @endif

            @if (!$movieSingle->homepage == '')
              <div class="info_list_item">
                <div class="info_list_item_name">Страница фильма:</div>
                <div class="info_list_item_value">
                  <a target="_blank" href="{{ $movieSingle->homepage }}">Детальнее</a>
                </div>
              </div>
            @endif
          </div>
        </div>
        <div class="show_movie_description">
          {{ $movieSingle->overview }}
        </div>
      </div>
      <div class="show_movie_poster">
        <img src="{{ 'https://image.tmdb.org/t/p/w780'. $movieSingle->poster_path }}" alt="">
      </div>
    </div>

    <div class="player">
      <video id="yohoho" data-title="{{ $movieSingle->original_title }}" controls>
      <source src="//yohoho.cc/yo.mp4" type="video/mp4">
      </video>
      <script src="//yohoho.cc/yo.js"></script>
    </div>



  </div>

{{-- https://api.themoviedb.org/3/movie/1550?api_key=f564ef36ff270a71a2d1f769b72cd1bd&language=ru-RU --}}
@endsection
