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
                <li><a href="">ホームページ</a></li>
                <li><a href="">新規登録</a></li>
                <li><a href="">ログイン／ログアウト</a></li>
            </ul>
        </div>
    </header>



    <div class="container">
        <div class="block">スレッド名</div>
        <div class="block" style="background-color: #f5a6a6;">今朝何食べた？</div>
        
    </div>

    <div class="container">
        <div class="block">一番目のスレッド</div>
        <div class="block" style="background-color: #f5a6a6;">目玉焼き</div>
    </div>

    <div class="btn">
        <a href="{{route('searchPage')}}">
            <button class="but" type="submit">作成</button>
        </a>
    </div>


    <div class="footer-images">
        <a href="https://example.com/link3" target="_blank">
            <img src="../imgs/Home.png" alt="Link 3">
        </a>
    </div>

</body>
</html>