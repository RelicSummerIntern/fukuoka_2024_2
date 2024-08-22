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
            width: 30%;
            height: 30px;
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
    <!-- <button class="AMhomepage-button">
        <a href="{{ route('post.index') }}">HOME</a>
        
    </button> -->
    
    <div class="profile-card">
      <a class="AMhomepage-button">
        <a href="{{ route('AMhome.ad') }}"  class="AMhomep">    
            <img src="../img/AMprofile.jpeg" width="130" height="101" alt="Profile Image">
        </a> <!-- web.phpの行71を参照 -->
      </a>
      
      <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        
        <div class="profile-image">
            <img src="../img/lena.png" alt="Profile Image">
        </div>
        <div class="profile-info">
            <h2><input type="text" id="name" name="name" class="mt-1 block w-full" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name"></h2>
            <p><input type="email" id="email" name="email" class="mt-1 block w-full" value="{{ old('email', $user->email) }}" required autocomplete="username"></p>

            <p><strong>自己PR：</strong>
                <textarea id="self_intro" name="self_intro" rows="3" class="mt-1 block w-full">{{ old('self_intro', $user->self_intro) }}</textarea>
            </p>
            <p><strong>希望業種：</strong>
                <input type="text" id="want_work" name="want_work" required minlength="4" maxlength="8" size="10" value="{{ old('want_work', $user->want_work) }}"/>
            </p>
            <p><strong>現在の職種：</strong>
                <input type="text" id="now_work" name="now_work" required minlength="4" maxlength="8" size="10" value="{{ old('now_work', $user->now_work) }}"/>
            </p>
            <p><strong>希望収入：</strong>
                <input type="text" id="want_money" name="want_money" required minlength="4" maxlength="8" size="10" value="{{ old('want_money', $user->want_money) }}"/>
                $
            </p>
            <p><strong>希望勤務地：</strong>
                <input type="text" id="want_place" name="want_place" required minlength="4" maxlength="8" size="10" value="{{ old('want_place', $user->want_place) }}"/>
            </p>
            <p><strong>現在の勤務地：</strong>
                <input type="text" id="now_place" name="now_place" required minlength="4" maxlength="8" size="10" value="{{ old('now_place', $user->now_place) }}"/>
            </p>
            <p><strong>使用言語：</strong>
                <input type="text" id="use_lang" name="use_lang" required minlength="4" maxlength="8" size="10" value="{{ old('use_lang', $user->use_lang) }}"/>
            </p>
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="edit-button">保存する</button>
            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
      </form>
    </div>
</body>
</html>
