<!-- チーム開発用 homeページ -->
<!-- リンク先：localhost/AMhome localhost/ad -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'エイリアン・マッチング')</title>
    <!--<link rel="stylesheet" href="{{ asset('css/style.css') }}">-->
    <link rel="stylesheet" href="{{ asset('css/AMhome.css') }}">
    <!-- FontAwesome上で追加した画像をこのHTMLに反映するためのコード -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>

    <header>
        
        <div class="site-name">エイリアン・マッチング</div>
        
       
    </header>

    <section class="main-content">
        
        
        <div class="contenthome">
          <div class="regis">
            <!--<button class="btn">background image</button>-->
            <a href="{{route('register')}}" class="button1">新規登録</a>
            <a href="{{ route('login') }}">
                @if(Auth::check())
        <!-- Display the logout button if the user is logged in -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a href="{{'login'}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="button1">
                    ログアウト
            </a>
                @else
        <!-- Display the login button if the user is logged out -->
            <a href="{{ route('login') }}" class="button1">ログイン</a>
                @endif
            </a>
            <a href="#" class="transformf"></a>
          </div>
        <div>
            <form action="#" class="search-form-5">
             <label>
                <input type="text" placeholder="Hinted search text">
            </label>
            <button type="submit" aria-label="Hinted search text"></button>
           </form>
        </div>
        <div class="Ahpictures">
          <a href="AMCPprofile" alt="企業情報1">
            <div class="picture1">
            </div>
          </a>
            <div class="picture2"></div>
            <div class="picture3"></div>
        </div> 

        <div class="searchdisplay">
         <a href="thread">
          <p class="icon1">
             <i class="fa-solid fa-plus fa-4x icon1"></i><!-- プラスボタン -->
          </p>
         </a>
         <a href="searchPage">
          <p class="icon2">
             <i class="fa-solid fa-magnifying-glass fa-4x icon2"></i><!-- 虫眼鏡ボタン -->
          </p>
         </a>
        </div>
        <div class=catchcpy><h2>扉を開けて、豊かな世界へ。</h2></div>
    </section>

    @yield('content')
  </div>
    <footer><!-- 使う予定か迷っている -->
    @isset($today)<!-- 一つのサイト上で関数を表示したい時に使うためのコード -->
       <p class="stime">Ⓒ：{{$today}}</p>
    @endisset<!-- 一つのサイト上で関数を表示したい時に使うためのコード -->
    </footer>
</body>
</html>
