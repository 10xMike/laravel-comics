<header id="site_header">
    <div class="topnav">
        DC POWER ADDITIONAL SITES
    </div>
    <div class="main_menu">
        Main Menu
    </div>
<!--     <nav>
        <ul>
            @foreach(config('comics.menu') as $item)
            <li><a href="{{ route($item['href']) }}" class="{{ Route::currentRouteName() === $item['href'] ? 'active' : '' }}"> {{ $item['text']}} </a></li>
            @endforeach
        </ul>
    </nav> -->
    <div class="menu_wrapper">
    <nav class="container">
      <a href="{{route('home')}}">
        <img class="logo" src="{{asset('img/dc-logo.png')}}" alt="DC logo">
      </a>
      <ul class="main_menu list-inline">
        @foreach(config('comics.menu') as $item)
        <li>
          <a href="{{ route($item['href']) }}" class="{{ Route::currentRouteName() === $item['href'] ? 'active' : '' }}"> {{ $item['text']}} </a>
        </li>
        @endforeach

      </ul>
    </nav>
  </div>

</header>
