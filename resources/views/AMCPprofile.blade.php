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
            height: 150vh;
            margin: 0;
        }
        .profile-card {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            width: 700px;  /* カードの幅を広げる */
            padding: 50px; /* パディングを大きくする */
            text-align: center;
            position: relative;
        }
        .profile-image {
            background-color: #e0e0e0;
            
            width: 450px;  /* 画像の幅を大きくする */
            height: 350px; /* 画像の高さを大きくする */
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
        /* .edit-button {
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
        }*/
        .edit-button:hover {
            background-color: #0056b3;
        } */
        /* プロフィールからホーム画面に遷移するためのコード */
        .AMhomep{
            
            position: absolute;
            bottom: 0px;
            text-align: center;
            

        }
    </style>
</head>
<body>
    <button class="AMhomepage-button">
        <a href="{{ route('post.index') }}">HOME</a>
    </button>
     
    <div class="profile-card">
        <div class="profile-image">
            <img src="../img/democp.png" alt="CPProfile Image">
        </div>
        <div class="profile-info">
            <h2>カプセルコーポレーション</h2>
            <p>capsel@co.jp</p>
            <p><strong>拠点地：</strong>西の都</p>
            <p>企業紹介文
**[企業名]**は、世界中で活躍する多様な人材と共に、新しい価値を創造し続けるグローバル企業です。私たちは、革新的なテクノロジーと優れたサービスを通じて、社会に貢献することを使命としています。創業以来、私たちは常に変革を求め、社員一人ひとりが持つポテンシャルを最大限に引き出すための環境を提供してきました。
<br>ビジョンとミッション
私たちのビジョンは、持続可能でインクルーシブな社会を実現することです。急速に変化するビジネス環境において、私たちは常に最先端の技術と専門知識を駆使し、顧客の期待を超える成果を提供します。また、ミッションとして、社員が自己成長を遂げ、社会に貢献できるような機会を提供することを掲げています。
働きやすい職場環境私たちは、多様性とインクルージョンを推進する職場環境を重視しています。社員が安心して自分らしく働けるよう、フレキシブルな勤務形態や充実した福利厚生制度を整えています。さらに、リーダーシップ育成プログラムや継続的なキャリア開発の機会を提供し、社員が自分のキャリアを自由にデザインできるようサポートしています。

**[企業名]**でのキャリアは、単なる仕事ではなく、成長と挑戦の連続です。私たちと一緒に、未来を形作る一員となりませんか？</p>
            <br>
            <p><strong>平均収入：</strong>400$</p>
            <p><strong>募集職種：</strong>エンジニア</p>
          
        </div>
        <a href="{{route('AMhome.ad')}}"  class="AMhomep">    
            <img src="../img/AMprofile.jpeg" width="130" height="101" position: absolute top: 5px
            right: 6px alt="Profile Image">
        </a> 
        <!-- <form action="{{ route('AMprofile.edit') }}" method="get">
            <button type="submit" class="edit-button">編集モード</button>
        </form> -->
    </div>

</body>
</html>
