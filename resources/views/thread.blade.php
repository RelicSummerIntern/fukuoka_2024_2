<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>スレッド</title>
    <link rel="stylesheet" href="../css/thread.css">
</head>
<body>
    <!-- 顶部菜单栏 -->
    <header class="header"> 
        <div class="nav-box">
            <span>スレッド</span>
            <ul class="nav">
                <li><a href="{{route('ad')}}">ホームページ</a></li>
                <li><a href="{{route('register')}}">新規登録</a></li>
                <li><a href="{{route('login')}}">ログイン／ログアウト</a></li>
            </ul>
        </div>
    </header>



    <div class="container">
        <div class="block">スレッド名</div>
        <div class="block">
            <textarea style="width: 100%;height: 100%;
            background-color: #f5a6a6;resize: none;
            overflow: hidden;font-size: 16px;border-radius: 8px;" placeholder="ここに入力してください"></textarea>
        </div>      
    </div>

    <div class="container">
        <div class="block">一番目のスレッド</div>
        <div class="block">
            <textarea style="width: 100%;height: 100%;
            background-color: #f5a6a6;resize: none;
            overflow: hidden;font-size: 16px;border-radius: 8px;" placeholder="ここに入力してください"></textarea>
        </div> 
    </div>

    <div class="btn">
        <a href="{{route('searchPage')}}">
            <button class="but" type="submit">作成</button>
        </a>
    </div>


    <div class="footer-images">
        <a href="{{route('ad')}}">
            <img src="../imgs/Home.png" alt="Link 3">
        </a>
    </div>

</body>
</html>