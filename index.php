<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>カットモデル募集ページ</title>
    <meta name="viewport" content="width = device-width">
    <link href="style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/98d5fb3ff2.js" crossorigin="anonymous"></script>
</head>
<body>
    <header><a href="index.php">Nakamura Beauty</a></header>

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

    <div class="slide-image">
        <h2 class="slide-title">Image</h2>
        <p class="p"></p>
        <div class="change-slide-btn">
            <div class="change-btn prev-btn"><i class="fas fa-chevron-left prev-btn"></i></div>
            <div class="change-btn next-btn"><i class="fas fa-chevron-right next-btn"></i></div>
            <ul class="slides">
                <li class="slide active"><img src="img/inner_beige.jpg"></li>
                <li class="slide"><img src="img/navy_bule.jpg"></li>
                <li class="slide"><img src="img/ladies-pink.jpg"></li>
                <li class="slide"><img src="img/highlight.jpg"></li>
                <li class="slide"><img src="img/dark_pink.jpg"></li>
            </ul>
        </div>
    </div>



    <section id="sec">

        <article>
            <h2>レディース</h2>
            <a href = "ladies.php">
                <figure><img src="img/ladies-deepbule.jpg"></figure>
                <p>More</p>
            </a>
        </article>

        <article>
            <h2>メンズ</h2>
            <a href = "mens.php">
                <figure><img src="img/men-pink.jpg"></figure>
                <p>More</p>
            </a>

        </article>

    </section>
    
    <div id="yoyaku" class="yoyaku">
        <a href="yoyaku.php">ご予約はこちら</a>
    </div>
    
    <footer>
        <div class="footer-title">
            <p>© Nakamura Beauty</p>
        </div>
        <div class="sns">
            <a href="https://www.instagram.com/yuki_n__k/"><i class="fab fa-instagram sns"></i></a>
        </div>
    </footer>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>