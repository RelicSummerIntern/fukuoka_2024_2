<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>プロフィールカード</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .profile-card {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            width: 500px;  /* カードの幅を広げる */
            padding: 50px; /* パディングを大きくする */
            text-align: center;
            position: relative;
        }
        .profile-image {
            background-color: #e0e0e0;
            border-radius: 50%;
            width: 250px;  /* 画像の幅を大きくする */
            height: 250px; /* 画像の高さを大きくする */
            margin: 0 auto 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }
        .profile-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }
        .profile-info h2 {
            font-size: 2.2em;  /* フォントサイズを大きくする */
            margin: 20px 0;
            color: #333333;
        }
        .profile-info p {
            margin: 10px 0;
            color: #777777;
            font-size: 1.2em;  /* フォントサイズを大きくする */
        }
        .profile-info p strong {
            color: #333333;
        }
        .AMhomepage-button {
            background-color: #333333;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            padding: 15px 30px;  /* ボタンを大きくする */
            cursor: pointer;
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 1.1em; /* ボタンのフォントサイズを大きくする */
        }
        .AMhomepage-button a {
            color: #ffffff;
            text-decoration: none;
        }
        .edit-button {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            padding: 15px 30px;  /* ボタンを大きくする */
            cursor: pointer;
            position: absolute;
            bottom: 20px;
            right: 20px;
            font-size: 1.1em; /* ボタンのフォントサイズを大きくする */
        }
        .edit-button:hover {
            background-color: #0056b3;
        }
        /* プロフィールからホーム画面に遷移するためのコード */
        .AMhomep{
            
            position: absolute;
            top: 5px;
            right: 6px
            

        }
        

    </style>
</head>
<body>
    <button class="AMhomepage-button">
        <a href="{{ route('post.index') }}">HOME</a>
    </button>
    <div class="profile-card">
      <a class="AMhomepage-botton">
        <a href="{{route('AMhome.ad')}}"  class="AMhomep">    
            <img src="../img/AMprofile.jpeg" width="130" height="101" position: absolute top: 5px
            right: 6px alt="Profile Image">
        </a> <!-- web.phpの行71を参照 -->
      </a>
     
        <div class="profile-image">
            <img src="../img/lena.png" alt="Profile Image">
        </div>
        <div class="profile-info">
            <h2>Hukuoka Tarou</h2>
            <p>s23a3047@co.jp</p>
            <p><strong>所在地：</strong>日本</p>
            <p>I want to be a soccerplayer</p>
            <br>
            <p><strong>希望業種：</strong>エンジニア</p>
            <p><strong>現在の職種：</strong>デザイナー</p>
            <p><strong>希望収入：</strong>400$</p>
            <p><strong>希望勤務地：</strong>イギリス</p>
            <p><strong>使用言語：</strong>日本語</p>
        </div>
        <form action="{{ route('AMprofile.edit') }}" method="get">
            <button type="submit" class="edit-button">編集モード</button>
        </form>
    </div>

</body>
</html>
