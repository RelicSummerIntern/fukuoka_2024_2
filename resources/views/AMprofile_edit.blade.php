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
            height: 120vh;
            margin: 0;
        }
        .profile-card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 450px;
            padding: 20px;
            margin: 20px;
            padding-bottom: 60px; /* ボタンのためのスペースを確保 */
            text-align: center;
            position: relative;
        }
        .profile-image {
            background-color: #e0e0e0;
            border-radius: 50%;
            width: 300px;
            height: 300px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .profile-image img {
            width: 60%;
        }
        .profile-info {
            margin-top: 15px;
        }
        .profile-info h2 {
            font-size: 1.5em;
            margin: 10px 0;
        }
        .profile-info p {
            margin: 10px 10;
            color: #555555;
        }
        .AMhomepage-button {
            background-color: #333333;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            padding: 20px 45px;
            cursor: pointer;
            position: absolute;
            top: 50px;
            right: 100px;
        }
        .edit-button {
            background-color: #333333;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
            position: absolute;
            bottom: 10px;
            right: 10px;
        }
        .edit-button {
            background-color: #333333;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
            position: absolute;
            bottom: 10px;
            right: 10px;
        }
        .edit-button:hover {
            background-color: #555555;
        }
    </style>
</head>
<body>
    <button class="AMhomepage-button">
        <a href="{{ route('post.index') }}">
            HOME
        </a>
    </button>

    <div class="profile-card">
        <div class="profile-image">
            <img src="https://via.placeholder.com/80" alt="プロフィール画像">
        </div>
        <div class="profile-info">
            <h2>Hukuoka Tarou</h2>
            <p>s23a3047@co.jp</p>
            <p>I want to be a soccerplayer</p>
            <p>現在の職種：
                <input type="text" id="nowwork" name="name" required minlength="4" maxlength="8" size="10" value="デザイナー"/>
            </p>
            <p>所在地：
                <input type="text" id="nowplace" name="name" required minlength="4" maxlength="8" size="10" value="日本"/>
            </p>
            <p>希望収入：
                <input type="text" id="wantmoney" name="name" required minlength="4" maxlength="8" size="10" value="400"/>
                $    
            </p>
            <p>希望業種：
                <input type="text" id="wantwork" name="name" required minlength="4" maxlength="8" size="10" value="エンジニア"/>
            </p>
            <p>希望勤務地：
                <input type="text" id="wantplace" name="name" required minlength="4" maxlength="8" size="10" value="イギリス"/>
            </p>
            <p>使用言語：
                <input type="text" id="uselang" name="name" required minlength="4" maxlength="8" size="10" value="日本語"/>
            </p>
        </div>
        <form action="{{ route('AMprofile.back') }}" method="get">
            <button type="submit" class="edit-button">
               元に戻る
            </button>
        </form>
        <form action="{{ route('AMprofile.back') }}" method="get">
            <button type="submit" class="confirm-button">
               確定する
            </button>
        </form>
    </div>

</body>
</html>
