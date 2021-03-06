<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link rel="shortcut icon" href="{{ '/img/favicon.ico' }}" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>@yield('title')</title>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-214547179-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-214547179-1');
  </script>
</head>
<body>
  <div class="sidebar">
    <div class="sidebar_main">
      <nav>
        <div class="tablet">
          <div class="burg">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <div class="search">
          <form action="{{ route('film.search') }}" method="get">
            <input type="text" width="100%" id="s" name="s" placeholder="Поищи меня тут ;)">
            <button type="submit">
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="121.702px" height="122.881px" viewBox="0 0 121.702 122.881" enable-background="new 0 0 121.702 122.881" xml:space="preserve"><g><path d="M53.617,0c14.806,0,28.21,6.001,37.913,15.705c9.703,9.703,15.704,23.107,15.704,37.913 c0,10.832-3.213,20.914-8.737,29.346l23.205,25.291l-16.001,14.627L83.322,98.258c-8.503,5.67-18.718,8.977-29.705,8.977 c-14.806,0-28.21-6.002-37.913-15.705C6.001,81.826,0,68.422,0,53.617c0-14.806,6.001-28.21,15.704-37.913 C25.407,6.001,38.812,0,53.617,0L53.617,0z M87.3,19.934c-8.619-8.62-20.528-13.951-33.683-13.951s-25.063,5.332-33.683,13.951 c-8.62,8.62-13.952,20.529-13.952,33.683s5.332,25.063,13.952,33.682c8.62,8.621,20.528,13.951,33.683,13.951 S78.681,95.92,87.3,87.299c8.62-8.619,13.951-20.527,13.951-33.682S95.92,28.554,87.3,19.934L87.3,19.934z"/></g></svg>
            </button>
          </form>
          {{-- <form id="live-search" action="" class="styled" method="post">
            <input type="text" id="filter" placeholder="Живой Поиск ;) " />
          </form>
          <nav>
              <ul class="liveSearchBar">
                  @foreach ($film as $f)
                    <li><a href="/films/{{ $f->id_tmdb_film }}">
                      <img src="{{ 'https://image.tmdb.org/t/p/w780/'.$f->poster_path }}" alt="">
                      {{ $f->title }}</a>
                    </li>
                  @endforeach
              </ul>
          </nav> --}}
        </div>
        <ul class="mn">
          <li><a href="{{ route('film.films') }}">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 83.06" style="enable-background:new 0 0 122.88 83.06" xml:space="preserve"><g><path d="M2.08,0H120.8h2.08v2.08v69.2v2.08h-2.08H77.57v4.55h16.61v5.15H28.55v-5.15h16.61v-4.55H2.08H0v-2.08V2.08V0H2.08L2.08,0 L2.08,0z M22.89,17.78h11.66v13.19h12.77V17.78h11.72v37.79H47.33V40.26H34.55v15.31H22.89V17.78L22.89,17.78z M65.2,17.78h17.36 c3.41,0,6.18,0.47,8.29,1.39c2.1,0.93,3.85,2.26,5.22,3.99c1.37,1.74,2.37,3.76,2.98,6.06c0.63,2.3,0.93,4.74,0.93,7.32 c0,4.04-0.46,7.17-1.38,9.39c-0.92,2.23-2.19,4.09-3.83,5.6c-1.64,1.5-3.39,2.51-5.26,3.01c-2.56,0.69-4.88,1.03-6.96,1.03H65.2 V17.78L65.2,17.78z M76.86,26.33v20.64h2.87c2.45,0,4.19-0.27,5.22-0.81c1.03-0.54,1.84-1.49,2.43-2.83 c0.59-1.35,0.88-3.54,0.88-6.56c0-4-0.65-6.74-1.96-8.22s-3.48-2.22-6.52-2.22H76.86L76.86,26.33z M118.73,4.15H4.15V69.2h114.57 V4.15H118.73L118.73,4.15z"/></g></svg>
            <span>Фильмы</span></a></li>
          <li style="pointer-events:none; opacity: .5"><a href="#">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 110.92" style="enable-background:new 0 0 122.88 110.92" xml:space="preserve">
              <style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style><g><path class="st0" d="M61.44,35.78c5.35,0,10.2,2.17,13.71,5.68c3.51,3.51,5.68,8.36,5.68,13.71c0,5.35-2.17,10.2-5.68,13.71 c-3.51,3.51-8.36,5.68-13.71,5.68c-5.35,0-10.2-2.17-13.71-5.68c-3.51-3.51-5.68-8.36-5.68-13.71c0-5.35,2.17-10.2,5.68-13.71 C51.24,37.96,56.09,35.78,61.44,35.78L61.44,35.78z M6.32,0v6.22h12.22V0h6.32v15.45h73.15V0.57h6.32v6.22h12.22V0.57h6.32v110.35 h-6.32v-7.19h-12.22v7.19h-6.32V95.36H24.87v14.99h-6.32v-7.19H6.32v7.19H0V0H6.32L6.32,0z M24.87,21.77v67.27h73.15V21.77H24.87 L24.87,21.77z M116.56,97.41v-11.8h-12.22v11.8H116.56L116.56,97.41z M116.56,79.29v-11.8h-12.22v11.8H116.56L116.56,79.29z M116.56,61.16v-11.8h-12.22v11.8H116.56L116.56,61.16z M116.56,43.04v-11.8h-12.22v11.8H116.56L116.56,43.04z M116.56,24.92v-11.8 h-12.22v11.8H116.56L116.56,24.92z M18.54,96.84v-11.8H6.32v11.8H18.54L18.54,96.84z M18.54,78.72v-11.8H6.32v11.8H18.54 L18.54,78.72z M18.54,60.59v-11.8H6.32v11.8H18.54L18.54,60.59z M18.54,42.47v-11.8H6.32v11.8H18.54L18.54,42.47z M18.54,24.35 v-11.8H6.32v11.8H18.54L18.54,24.35z M63.37,47.55h4.72V62.8h-4.72V47.55L63.37,47.55L63.37,47.55z M54.8,47.55h4.72V62.8H54.8 V47.55L54.8,47.55L54.8,47.55z"/>
              </g>
            </svg>
            <span>Сериалы</span></a></li>
          <li><a href="{{ route('film.cartoons') }}">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 117.6" style="enable-background:new 0 0 122.88 117.6" xml:space="preserve">
              <style type="text/css">
              	.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#21181C;}
              	.st1{fill-rule:evenodd;clip-rule:evenodd;fill:#211D1E;}
              	.st2{fill-rule:evenodd;clip-rule:evenodd;fill:#24211F;}
              	.st3{fill-rule:evenodd;clip-rule:evenodd;fill:#F6CEBB;}
              </style>
              <g>
              <path class="st1" d="M42.78,36.83c11.44-5.41,23.94-5.65,37.66,0.1c-3.54-5.12-4.99-10.7-4.87-15.94 C75.91,5.83,86.58-0.58,97.69,0.67c13.67,1.54,23.01,12.95,24.9,26.11c0.97,6.75-0.36,13.47-5.54,17.6 c-5.09,4.05-13.48,4.61-24.74,2.16c26.03,22.7,6.9,70.06-29.6,71.06c-20.25,0.55-41.31-13.87-43.67-40.02 C17.98,65.9,22.35,54.09,31.1,45.81c-10.56,1.87-19.75,2-25.28-2.43c-4.32-3.46-6.06-8.88-5.8-14.72 C0.65,14.26,11.32,1.5,25.97,0.12C32.2-0.48,38.49,1.18,43.04,5.9C48.51,11.58,50.04,21.66,42.78,36.83L42.78,36.83z"/><path class="st3" d="M34.65,82.62c-1.52-5.54-2.84-11.9-2.77-18.02c0.23-20.48,18.4-29.33,29.78-13.23 C70.47,38.77,85.86,41.34,90.39,56c1.83,5.94,1.54,13.57,0.23,19.61c-0.56,2.55-1.36,5.02-2.48,7.37 c5.84-3.27,9.75-4.07,10.76-1.19c1.06,3.01-0.41,7.09-2.65,11.29c-15.09,28.3-53.99,28.78-69.25-0.24 c-1.44-2.74-5.46-11.3-0.79-12.82C28,79.42,30.87,80.36,34.65,82.62L34.65,82.62z"/><path class="st2" d="M51,65.33c3.13-0.25,6,3.63,6.41,8.68s-1.8,9.34-4.94,9.59c-3.13,0.25-6-3.63-6.41-8.68S47.87,65.58,51,65.33 L51,65.33z"/><path class="st2" d="M72.55,65.33c-3.13-0.25-6,3.63-6.41,8.68s1.8,9.34,4.94,9.59s6-3.63,6.41-8.68S75.69,65.58,72.55,65.33 L72.55,65.33z"/><path class="st0" d="M61.78,84.63c4.79,0,8.68,1.95,8.68,4.35s-3.88,4.35-8.68,4.35c-4.79,0-8.68-1.95-8.68-4.35 S56.98,84.63,61.78,84.63L61.78,84.63z"/><path class="st0" d="M35.53,90.2c14.31,16.28,38,15.96,51.48,0.29c1.7-1.97,1.68-0.39,0.78,1.03 c-12.44,19.6-44.84,16.06-52.68-0.72C34.82,90.18,34.65,89.2,35.53,90.2L35.53,90.2z"/>
            </g>
          </svg>
            <span>Мультфильмы</span></a></li>
          <li style="pointer-events:none; opacity: .5"><a href="#">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 123.38 122.69" style="enable-background:new 0 0 123.38 122.69" xml:space="preserve">
              <style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;stroke:#000000;stroke-width:0.5;stroke-miterlimit:2.6131;}</style><g><path class="st0" d="M0.8,45.21c0.22-0.98,0.46-1.95,0.71-2.91c2.39-9.01,6.16-16.81,11.52-23.23c-0.55-1.67-0.16-3.58,1.16-4.9 c1.32-1.32,3.21-1.71,4.87-1.17c6.81-5.75,15.45-9.89,26.16-12.22c1.38-0.3,2.69-1.05,3.62,0l73.68,83.09 c0.93,1.05,0.69,2.39,0,3.62c-8.57,15.29-20.17,26.53-34.34,34.34c-1.23,0.68-2.56,0.92-3.62,0L0.8,48.83 C-0.26,47.91,0.49,46.59,0.8,45.21L0.8,45.21z M30.11,30.1c6.82-6.82,17.88-6.82,24.7,0c6.82,6.82,6.82,17.88,0,24.71 c-6.82,6.82-17.88,6.82-24.7,0C23.29,47.99,23.29,36.93,30.11,30.1L30.11,30.1z M51.44,77.74l5.35-5.35c0.54-0.54,1.43-0.54,1.97,0 l5.1,5.1c0.54,0.54,0.54,1.43,0,1.97l-5.35,5.35c-0.54,0.54-1.43,0.54-1.97,0l-5.1-5.1C50.9,79.17,50.9,78.28,51.44,77.74 L51.44,77.74z M96.11,80.49l5.35-5.35c0.54-0.54,1.43-0.54,1.97,0l5.1,5.1c0.54,0.54,0.54,1.43,0,1.97l-5.35,5.35 c-0.54,0.54-1.43,0.54-1.97,0l-5.1-5.1C95.57,81.93,95.57,81.04,96.11,80.49L96.11,80.49z M85.63,90.97l5.35-5.35 c0.54-0.54,1.43-0.54,1.97,0l5.1,5.1c0.54,0.54,0.54,1.43,0,1.97l-5.35,5.35c-0.54,0.54-1.43,0.54-1.97,0l-5.1-5.1 C85.09,92.4,85.09,91.51,85.63,90.97L85.63,90.97z M75.15,101.45l5.35-5.35c0.54-0.54,1.43-0.54,1.97,0l5.1,5.1 c0.54,0.54,0.54,1.43,0,1.97l-5.35,5.35c-0.54,0.54-1.43,0.54-1.97,0l-5.1-5.1C74.61,102.88,74.61,101.99,75.15,101.45 L75.15,101.45z M84.25,68.64l5.35-5.35c0.54-0.54,1.43-0.54,1.97,0l5.1,5.1c0.54,0.54,0.54,1.43,0,1.97l-5.35,5.35 c-0.54,0.54-1.43,0.54-1.97,0l-5.1-5.1C83.71,70.07,83.71,69.18,84.25,68.64L84.25,68.64z M73.77,79.12l5.35-5.35 c0.54-0.54,1.43-0.54,1.97,0l5.1,5.1c0.54,0.54,0.54,1.43,0,1.97l-5.35,5.35c-0.54,0.54-1.43,0.54-1.97,0l-5.1-5.1 C73.23,80.55,73.23,79.66,73.77,79.12L73.77,79.12z M63.3,89.59l5.35-5.35c0.54-0.54,1.43-0.54,1.97,0l5.1,5.1 c0.54,0.54,0.54,1.43,0,1.97l-5.35,5.35c-0.54,0.54-1.43,0.54-1.97,0l-5.1-5.1C62.75,91.03,62.75,90.14,63.3,89.59L63.3,89.59z M72.4,56.78l5.35-5.35c0.54-0.54,1.43-0.54,1.97,0l5.1,5.1c0.54,0.54,0.54,1.43,0,1.97l-5.35,5.35c-0.54,0.54-1.43,0.54-1.97,0 l-5.1-5.1C71.85,58.21,71.85,57.33,72.4,56.78L72.4,56.78z M61.92,67.26l5.35-5.35c0.54-0.54,1.43-0.54,1.97,0l5.1,5.1 c0.54,0.54,0.54,1.43,0,1.97l-5.35,5.35c-0.54,0.54-1.43,0.54-1.97,0l-5.1-5.1C61.38,68.69,61.38,67.8,61.92,67.26L61.92,67.26z M34.21,33.96L34.21,33.96c1.3-1.3,3.44-1.3,4.74,0l3.93,3.93l3.93-3.93c1.3-1.3,3.44-1.3,4.74,0l0,0c1.3,1.3,1.3,3.44,0,4.74 l-3.93,3.93l3.93,3.93c1.3,1.3,1.3,3.44,0,4.74v0c-1.3,1.3-3.44,1.3-4.74,0l-3.93-3.93l-3.93,3.93c-1.3,1.3-3.44,1.3-4.74,0v0 c-1.3-1.3-1.3-3.44,0-4.74l3.93-3.93l-3.93-3.93C32.91,37.4,32.91,35.26,34.21,33.96L34.21,33.96z"/>
              </g>
            </svg>
            <span>ТВ Шоу</span></a></li>
        </ul>
      </nav>
    </div>
    <a href="/" class="logo"><span>2</span>KINO</a>
  </div>
  @yield('content')

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  <script>



  </script>
</body>
</html>
