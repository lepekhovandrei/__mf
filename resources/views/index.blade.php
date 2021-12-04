@extends('loyouts.main')
@section('title')
  Смотри онлайн на свой вкус на | 2kino
@endsection
@section('content')
  <div class="content_2">
    {{-- <video id="yohoho" data-kinopoisk="401522" controls>
    <source src="//yohoho.cc/yo.mp4" type="video/mp4">
    </video>
    <script src="//yohoho.cc/yo.js"></script> --}}
    <div class="heading">ПОПУЛЯРНЫЕ ФИЛЬМЫ</div>
    <div class="grid">
      @foreach ($film as $f)
        <a href="{{ route('film.show', $f->id_tmdb_film) }}" class="movie">
          <span class="movie_poster"><img src="{{ 'https://image.tmdb.org/t/p/w780/'.$f->poster_path }}" alt=""></span>
          <span class="movie_title">{{ $f->title }}</span>
          <span class="movie_rait">
            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 117.19"><title>black-star</title><path d="M64.39,2,80.11,38.76,120,42.33a3.2,3.2,0,0,1,1.83,5.59h0L91.64,74.25l8.92,39a3.2,3.2,0,0,1-4.87,3.4L61.44,96.19,27.09,116.73a3.2,3.2,0,0,1-4.76-3.46h0l8.92-39L1.09,47.92A3.2,3.2,0,0,1,3,42.32l39.74-3.56L58.49,2a3.2,3.2,0,0,1,5.9,0Z"/></svg>
            {{ $f->vote_average * 11 . '%' }}
          </span>
          <span class="movie_description">
            <span class="desc_icon">
              <img src="{{ asset('img/info.svg') }}" alt="">
            </span>
            <span class="desc_text">
              <span class="movie_title">{{ $f->title }}</span>
              <span class="movie_genre">
                {{ $f->genre }}
              </span>
              {{ $f->overview }}
            </span>
          </span>
        </a>
      @endforeach
    </div>
    <div class="pagination">{{ $film->links() }}</div>
  </div>
{{-- https://api.themoviedb.org/3/movie/1550?api_key=f564ef36ff270a71a2d1f769b72cd1bd&language=ru-RU --}}
@endsection
