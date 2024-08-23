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
                <li><a href="{{route('ad')}}">ホームページ</a></li>
                <li><a href="{{route('register')}}">新規登録</a></li>
                <li><a href="{{route('login')}}">ログイン／ログアウト</a></li>
            </ul>
        </div>
    </header>
    <!-- banner -->
    <!-- <div class="banner">
        検索ページ
    </div> -->
    <!-- ページここから -->

        <!-- 検査 -->
    <div class="search-box">
        <input class="search-text" name="inputs" placeholder="知りたいことを入力してください" >
        <a class="search-btn" onclick="search()">
            <i class="iconfont iconchazhao"></i>
        </a>
    </div>

    <div class="grid-container">
        <div class="grid-item">
            <a href="{{route('bulletinBoard')}}?avatar=../imgs/p2.JPG&author=A社&email=example.user123@example.com&address=1234 Elm Street, Springfield, IL, USA">
                <img src="../imgs/k1.jpg" alt="SCP-999">
                <div class="description">
                    <div class="title">扉を開けて豊かな生活へ【企業】</div>
                    <div class="author-info">
                        <img src="../imgs/p1.JPG" alt="author avatar" class="avatar">
                        <span class="author">エイリアン・マッチング by A社</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="grid-item">
            <a href="{{route('bulletinBoard')}}?avatar=../imgs/p2.JPG&author=B社&email=jane.smith@example.org&address=5678 Oak Avenue, Vancouver, BC, Canada">
                <img src="../imgs/k2.jpg" alt="SCP-999">
                <div class="description">
                    <div class="title">扉を開けて豊かな生活へ【企業】</div>
                    <div class="author-info">
                        <img src="../imgs/p2.JPG" alt="author avatar" class="avatar">
                        <span class="author">エイリアン・マッチング by B社</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="grid-item">
            <a href="{{route('bulletinBoard')}}?avatar=../imgs/p3.JPG&author=C社&email=alice.johnson@example.net&address=91011 Maple Road, Sydney, NSW, Australia">
                <img src="../imgs/k2.jpg" alt="SCP-999">
                <div class="description">
                    <div class="title">扉を開けて豊かな生活へ【企業】</div>
                    <div class="author-info">
                        <img src="../imgs/p3.JPG" alt="author avatar" class="avatar">
                        <span class="author">エイリアン・マッチング by C社</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="grid-item">
            <a href="{{route('bulletinBoard')}}?avatar=../imgs/p4.JPG&author=D社&email=bob.brown@example.edu&address=1213 Pine Lane, Berlin, Germany">
                <img src="../imgs/k2.jpg" alt="SCP-999">
                <div class="description">
                    <div class="title">扉を開けて豊かな生活へ【企業】</div>
                    <div class="author-info">
                        <img src="../imgs/p4.jpg" alt="author avatar" class="avatar">
                        <span class="author">エイリアン・マッチング by D社</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="grid-item">
            <a href="{{route('bulletinBoard')}}?avatar=../imgs/p5.JPG&author=E社&email=carol.white@example.co&address=1415 Cedar Drive, Tokyo, Japan">
                <img src="../imgs/k1.jpg" alt="SCP-999">
                <div class="description">
                    <div class="title">扉を開けて豊かな生活へ【企業】</div>
                    <div class="author-info">
                        <img src="../imgs/p5.jpg" alt="author avatar" class="avatar">
                        <span class="author">エイリアン・マッチング by E社</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="grid-item">
            <a href="{{route('bulletinBoard')}}?avatar=../imgs/p6.JPG&author=F社&email=david.green@example.biz&address=1617 Birch Boulevard, Paris, France">
                <img src="../imgs/k2.jpg" alt="SCP-999">
                <div class="description">
                    <div class="title">扉を開けて豊かな生活へ【企業】</div>
                    <div class="author-info">
                        <img src="../imgs/p6.jpg" alt="author avatar" class="avatar">
                        <span class="author">エイリアン・マッチング by F社</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="grid-item">
            <a href="{{route('bulletinBoard')}}?avatar=../imgs/p7.JPG&author=G社&email=emily.jones@example.info&address=1819 Walnut Crescent, Cape Town, South Africa">
                <img src="../imgs/k2.jpg" alt="SCP-999">
                <div class="description">
                    <div class="title">扉を開けて豊かな生活へ【企業】</div>
                    <div class="author-info">
                        <img src="../imgs/p7.jpg" alt="author avatar" class="avatar">
                        <span class="author">エイリアン・マッチング by G社</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="grid-item">
            <a href="{{route('bulletinBoard')}}?avatar=../imgs/p8.PNG&author=H社&email=frank.miller@example.us&address=2021 Spruce Circle, Buenos Aires, Argentina">
                <img src="../imgs/k1.jpg" alt="SCP-999">
                <div class="description">
                    <div class="title">扉を開けて豊かな生活へ【企業】</div>
                    <div class="author-info">
                        <img src="../imgs/p8.png" alt="author avatar" class="avatar">
                        <span class="author">エイリアン・マッチング by H社</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="grid-item">
            <a href="{{route('bulletinBoard')}}?avatar=../imgs/p9.JPG&author=I社&email=grace.wilson@example.ca&address=2223 Fir Court, São Paulo, Brazil">
                <img src="../imgs/k2.jpg" alt="SCP-999">
                <div class="description">
                    <div class="title">扉を開けて豊かな生活へ【企業】</div>
                    <div class="author-info">
                        <img src="../imgs/p9.jpg" alt="author avatar" class="avatar">
                        <span class="author">エイリアン・マッチング by I社</span>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="footer-images">

        <a href="{{route('ad')}}">
            <img src="../imgs/Home.png" alt="Link 3">
        </a>
        <a href="{{route('thread')}}">
            <img src="../imgs/Plus.png" alt="Link 2">
        </a>
        <a href="{{route('AMprofile_edit')}}">
            <img src="../imgs/account.png" alt="Link 1">
        </a>

    </div>

</body>

</html>