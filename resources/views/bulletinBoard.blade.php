<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>掲示板添付</title>
    <link rel="stylesheet" href="../css/bulletinBoard.css">
</head>
<body>
    <!-- 顶部菜单栏 -->
    <header class="header"> 
        <div class="nav-box">
            <span>掲示板添付</span>
            <ul class="nav">
                <li><a href="">ホームページ</a></li>
                <li><a href="">新規登録</a></li>
                <li><a href="">ログイン／ログアウト</a></li>
            </ul>
        </div>
    </header>

    <div class="bulletinBoard">

        <div class="bulletinBoard-main">
            <div class="l">
                <!-- 头像 -->
                <img src="./imgs/photo.JPG" width="220">
            </div>
            <div class="r">
                <p>名 前：高　華宇</p>
                <p>メール：koukau77@gmail.com</p>
                <p>年 齢：18</p>
            </div>
        </div>

        <div class="container">
            <div class="list-container">
                <ul class="list">
                    <li>1. xxxxxxxxxxxxxx</li>
                    <li>2. sssssssssss</li>
                    <li>3. 444444444444</li>
                    <li>4. yyyyyyyyyyyyy</li>
                    <li>5. zzzzzzzzzzzzz</li>
                    <li>6. aaaaaaaaaaaaa</li>
                    <li>7. bbbbbbbbbbbbb</li>
                    <li>8. ccccccccccccc</li>
                </ul>
            </div>

        </div>

        <form class="myform" method="post" action="#">
            <div class="inp-box">
                <textarea name="message" class="msg" placeholder="入力してください"></textarea>
            </div>
            <button class="but" type="submit">submit</button>
        </form>

    </div>

    <div class="footer-images">
        <a href="https://example.com/link3" target="_blank">
            <img src="../imgs/Home.png" alt="Link 3">
        </a>
    </div>

</body>
</html>