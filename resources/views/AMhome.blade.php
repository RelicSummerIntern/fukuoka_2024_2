<!-- チーム開発用 homeページ -->
<!-- リンク先：localhost/AMhome -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'サイト名')</title>
    <!--<link rel="stylesheet" href="{{ asset('css/style.css') }}">-->
    <link rel="stylesheet" href="{{ asset('css/AMhome.css') }}">
    <!-- FontAwesome上で追加した画像をこのHTMLに反映するためのコード -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>

    <header>
        <div class="site-name">サイト名</div>
        <!--<div class="edit-mode">編集モード</div>-->
    </header>

    <section class="main-content">
        <div class=catchcpy>キャッチコピー
        </div>
        <div class="regis">
            <!--<button class="btn">background image</button>-->
            <a href="#" class="button1">新規登録</a>
            <a href="{{route('post.index')}}" class="button1">
                @if(Auth::check())
                    ログアウト
                @else
                    ログイン
                @endif
            </a>
            <button class="btn globe"><img src="{{ asset('images/globe-icon.png') }}" alt="Globe"></button>
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
            <div class="picture1">picture1</div>
            <div class="picture2">picture2</div>
            <div class="picture3">picture3</div>
        </div> 
        <div class="searchdisplay">
          <p class="icon1">
             <i class="fa-solid fa-plus fa-4x icon1"></i><!-- プラスボタン -->
          </p>
          <p class="icon2">
             <i class="fa-solid fa-magnifying-glass fa-4x icon2"></i><!-- 虫眼鏡ボタン -->
          </p>
        </div>
        
    </section>

    @yield('content')
    <footer>
      
       <p class="stime">Ⓒ：{{$today}}</p>
    </footer>
</body>
</html>
