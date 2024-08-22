<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>検索ページ</title>
    <link rel="stylesheet" href="../css/searchPage.css">

</head>


<body>
    <!-- 顶部菜单栏 -->
    <header class="header"> 
        <div class="nav-box">
            <span>検索ページ</span>
            <ul class="nav">
                <li><a href="">ホームページ</a></li>
                <li><a href="">新規登録</a></li>
                <li><a href="">ログイン／ログアウト</a></li>
            </ul>
        </div>
    </header>
    <!-- banner -->
    <!-- <div class="banner">
        検索ページ
    </div> -->
    <!-- ページここから -->
    <div class="main-box">

        <!-- 検査 -->
        <div class="search-box">
            <input class="search-text" name="inputs" placeholder="知りたいことを入力してください" >
            <a class="search-btn" onclick="search()">
                <i class="iconfont iconchazhao"></i>
            </a>
        </div>

        <!-- <div class="button-container">
            <button>1</button>
            <button>2</button>
            <button>3</button>
        </div> -->

        <!-- show  -->
        <!-- 第1行 -->
        <div class="flex-box">
            <div class="block">
                <a href="{{route('bulletinBoard')}}" target="_blank">
                    <div class="desc">1</div>
                    <img class="pic" src="../imgs/1.png" width="300" alt="Image 1">
                </a>
            </div>
            <div class="block">
                <a href="{{route('bulletinBoard')}}" target="_blank">
                    <div class="desc">2</div>
                    <img class="pic" src="../imgs/2.png" width="300" alt="Image 2">
                </a>
            </div>
            <div class="block">
                <a href="{{route('bulletinBoard')}}" target="_blank">
                    <div class="desc">3</div>
                    <img class="pic" src="../imgs/3.png" width="300" alt="Image 3">
                </a>
            </div>
        </div>
        <!-- 第2行 -->
        <div class="flex-box">
            <div class="block">
                <a href="{{route('bulletinBoard')}}" target="_blank">
                    <div class="desc">4</div>
                    <img class="pic" src="../imgs/4.png" width="300" alt="Image 4">
                </a>
            </div>
            <div class="block">
                <a href="{{route('bulletinBoard')}}" target="_blank">
                    <div class="desc">5</div>
                    <img class="pic" src="../imgs/5.png" width="300" alt="Image 5">
                </a>
            </div>
            <div class="block">
                <a href="{{route('bulletinBoard')}}" target="_blank">
                    <div class="desc">6</div>
                    <img class="pic" src="../imgs/6.png" width="300" alt="Image 6">
                </a>
            </div>
        </div>
        <!-- 第3行 -->
        <div class="flex-box">
            <div class="block">
                <a href="{{route('bulletinBoard')}}" target="_blank">
                    <div class="desc">7</div>
                    <img class="pic" src="../imgs/7.png" width="300" alt="Image 7">
                </a>
            </div>
            <div class="block">
                <a href="{{route('bulletinBoard')}}" target="_blank">
                    <div class="desc">8</div>
                    <img class="pic" src="../imgs/8.png" width="300" alt="Image 8">
                </a>
            </div>
            <div class="block">
                <a href="{{route('bulletinBoard')}}" target="_blank">
                    <div class="desc">9</div>
                    <img class="pic" src="../imgs/9.png" width="300" alt="Image 9">
                </a>
            </div>
        </div>
    </div>


    <div class="footer-images">

        <a href="{{route('bulletinBoard')}}" target="_blank">
            <img src="../imgs/Home.png" alt="Link 3">
        </a>
        <a href="{{route('thread')}}" target="_blank">
            <img src="../imgs/Plus.png" alt="Link 2">
        </a>
        <a href="{{route('bulletinBoard')}}" target="_blank">
            <img src="../imgs/account.png" alt="Link 1">
        </a>

    </div>

</body>

</html>