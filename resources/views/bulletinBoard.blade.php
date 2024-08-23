<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>掲示板添付</title>
    <link rel="stylesheet" href="../css/bulletinBoard.css">
    <script defer src="./js/script.js"></script>
</head>
<body>
    <!-- 顶部菜单栏 -->
    <header class="header"> 
        <div class="nav-box">
            <span>掲示板添付</span>
            <ul class="nav">
                <li><a href="{{route('ad')}}">ホームページ</a></li>
                <li><a href="{{route('register')}}">新規登録</a></li>
                <li><a href="{{route('login')}}">ログイン／ログアウト</a></li>
            </ul>
        </div>
    </header>

    <div class="bulletinBoard">

        <div class="bulletinBoard-main">
            <div class="l">
                <a href="{{route('AMprofile')}}">
                    <img id="profile-avatar" src="../imgs/p1.JPG" width="220">
                </a>
            </div>
            <div class="r">
                <p id="author-name">名 前：</p>
                <p id="email">メール：</p>
                <p id="address">アドレス：</p>
            </div>
        </div>

        <div class="container">
            <div class="list-container">
                <ul class="list" id="message-list">
                    <li>1. あなたの努力と情熱に感動しています。これからも応援しています！</li>
                    <li>2. 挑戦を恐れずに前進し続けるあなたは本当に素晴らしいです！</li>
                    <li>3. 毎日の小さな成功が大きな成果に繋がります。頑張ってください！</li>
                    <li>4. ポジティブなエネルギーで周りの人をも元気にしているあなたは素晴らしいです！</li>
                    <li>5. 自分を信じて、前向きな気持ちで進んでいけば、必ず素晴らしい結果が待っていますよ！</li>
                </ul>
            </div>
        </div>

        <form class="myform" method="post" action="{{ route('bulletinBoard') }}">
            @csrf
            <div class="inp-box">
                <textarea name="message" class="msg" placeholder="入力してください" id="message-input"></textarea>
            </div>
            <div class="button-group">
                <button class="but" type="submit">作成</button>
                <a href="{{route('searchPage')}}" class="but1">戻す</a>
            </div>
        </form>

    </div>

    <div class="footer-images">
        <a href="{{route('ad')}}">
            <img src="../imgs/Home.png" alt="Link 3">
        </a>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.querySelector('.myform');
            const messageList = document.getElementById('message-list');
            let messageCount = 5; // Initialize count to 5 for numbering

            form.addEventListener('submit', (event) => {
                event.preventDefault(); // Prevent form from submitting normally

                const messageInput = document.getElementById('message-input');
                const newMessage = messageInput.value.trim();

                if (newMessage) {
                    messageCount++; // Increment message count
                    const newListItem = document.createElement('li');
                    newListItem.textContent = `${messageCount}. ${newMessage}`;
                    messageList.appendChild(newListItem);

                    messageInput.value = ''; // Clear input field
                }
            });
        });
        const urlParams = new URLSearchParams(window.location.search);
        const avatarSrc = urlParams.get('avatar');
        const author = urlParams.get('author');
        const email = urlParams.get('email');
        const address = urlParams.get('address');


        // 如果查询参数中有头像图片 URL，则更新头像图片
        if (avatarSrc) {
            document.getElementById('profile-avatar').src = avatarSrc;
        }

        if (author) {
            document.getElementById('author-name').textContent = `名 前：${author}`;
        }

        if (email) {
                document.getElementById('email').textContent = `メール：${email}`;
            }

        if (address) {
            document.getElementById('address').textContent = `住 所：${address}`;
        }
    </script>
</body>
</html>
