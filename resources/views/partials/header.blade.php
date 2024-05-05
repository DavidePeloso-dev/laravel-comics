<header>
    <div class="top-line">
        <div class="container">
            <div class="row al-center">
                <div class="ul d-flex al-center ms-auto">
                    <li><a href="*">DC POWER&#8480; VISA&reg;</a></li>
                    <li><a href="*">ADDITIONAL DC SITES &#9660;</a></li>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row jc-between al-center">
            <div class="col">
                <div class="logo">
                    <a href="/"><img src="/images/dc-logo.png" alt=""></a>
                </div>
            </div>
            <div class="col">
                <nav class="nav">
                    <ul class="d-flex gap-3 text-up">
                        <li><a class="{{Route::currentRouteName() === 'characters' ? 'active' : ''}}" href="{{route('characters')}}">Characters</a></li>
                        <li><a class="{{Route::currentRouteName() === 'comics' ? 'active' : ''}}" href="{{route('comics')}}">Comics</a></li>
                        <li><a class="{{Route::currentRouteName() === 'movies' ? 'active' : ''}}" href="{{route('movies')}}">Movies</a></li>
                        <li><a class="{{Route::currentRouteName() === 'tv' ? 'active' : ''}}" href="{{route('tv')}}">Tv</a></li>
                        <li><a class="{{Route::currentRouteName() === 'games' ? 'active' : ''}}" href="{{route('games')}}">Games</a></li>
                        <li><a class="{{Route::currentRouteName() === 'collectibles' ? 'active' : ''}}" href="{{route('collectibles')}}">Collectibles</a></li>
                        <li><a class="{{Route::currentRouteName() === 'videos' ? 'active' : ''}}" href="{{route('videos')}}">Videos</a></li>
                        <li><a class="{{Route::currentRouteName() === 'fans' ? 'active' : ''}}" href="{{route('fans')}}">Fans</a></li>
                        <li><a class="{{Route::currentRouteName() === 'news' ? 'active' : ''}}" href="{{route('news')}}">News</a></li>
                        <li><a class="{{Route::currentRouteName() === 'shop' ? 'active' : ''}}" href="{{route('shop')}}">Shop</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col">
                <form class="dc-search" action="">
                    <input type="text" name="search" id="search" placeholder="Search">
                    <i class="fa-solid fa-magnifying-glass pointer"></i>
                </form>
            </div>
        </div>
    </div>
</header>