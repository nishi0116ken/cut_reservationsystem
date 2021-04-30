<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>カットモデル募集ページ</title>
    <meta name="viewport" content="width = device-width">
    <link href="staff_page.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/98d5fb3ff2.js" crossorigin="anonymous"></script>
</head>
<body>
    <header><a href="index.php">Nakamura　Beauty</a></header>

    <div id="menu-btn" class="menu-btn">
        <i id ="menu-button" class="fas fa-bars"></i>
    </div>

    <nav id="nav">
        <div id="close-btn">
            <i class="fa fa-2x fa-times closebtn"></i>
        </div>
        <ul>
        <li class="list"><a href="index.php">トップページ</a></li><br>
            <li class="list"><a href="about.php">サイトについて</a></li><br>
            <li class="list"><a href="staff_login.php">スタッフページ</a></li><br>
            <li class="list"><a href="yoyaku.php">予約はこちら</a></li><br>
            <li class="list"><a href="y_kakunin.php">予約確認</a></li><br>
            <li class="list"><a href="ladies.php">ladeis</a></li><br>
            <li class="list"><a href="mens.php">mens</a></li><br>
            <li class="list"><a href="privacy.php">プライバシーポリシー</a></li><br>
        </ul>
    </nav>
    <div class="top">
        <p>スタッフ様はこちらに確認コードを入力してください。</p>
        <div class="add">
            <h2>ログイン</h2>
            <form method="post" action="staff_login_check.php" >
                <p>スタッフコード</p>
                <input type="text" name="code">
                <p>パスワード</p>
                <input type="password" name="pass">
                <br>
                <input type="button" onclick="history.back()" value="戻る">
                <input type="submit" value="OK">
            </form>
        </div>
    </div>
    <footer>
        <div class="footer-title">
            <p>© Nakamura Beauty</p>
        </div>
    </footer>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>