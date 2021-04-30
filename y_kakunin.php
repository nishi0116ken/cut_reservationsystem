<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>カットモデル募集ページ</title>
    <meta name="viewport" content="width = device-width">
    <link rel="stylesheet" href="style5.css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Homemade+Apple rel="stylesheet">
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

    <div class="form">
        <h2>ご予約確認</h2>
        <div class="form_content">
            <form action = "y_kakunin_done.php" method="post">
                <p>
                    <label for="name1">名前(<span>必須</span>)</label><br />
                    <input type="text" name="name" id="name1" placeholder="氏名" required>
                </p>
                <p>
                    <label for="insta">インスタ(<span>必須</span>)</label><br />
                    <input type="text" name="insta" id="insta" placeholder="アカウント名" required>
                </p>
                <div class="submit"><input type="submit" value="確認"><input type="reset" value="リセット"></div>
            </form>
        </div>
        <div class="tyuigaki">
            <p>最も上に表示されているのが、最新の予約になります。</p>
            <p>誤字・脱字にお気をつけください。</p>
            <p>なにも表示されない場合は予約されてない場合がございます。</p>
            <p>担当者にご連絡頂くか、下記のボタンからお手数ですが、</p>
            <p>もう一度、ご予約ください。</p>

        </div>
    </div>
    <div class="yoyaku">
        <a href="index.php">ご予約はこちら</a>
    </div>
    <footer>
        <div class="footer-title">
            <p>© Nakamura Beauty</p>
        </div>
    </footer>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>