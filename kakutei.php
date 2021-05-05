<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>カットモデル募集ページ</title>
        <meta name="viewport" content="width = device-width">
        <link rel="stylesheet" href="style4.css">
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Homemade+Apple rel="stylesheet">
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
        <div class="massage">
            <?php 

            $name = $_POST['name'];
            $sex = $_POST['sex'];
            $insta = $_POST['insta'];
            $syurui = $_POST['syurui'];
            $hair_color = $_POST['hair_color'];
            $hair_style = $_POST['hair_style'];
            $remarks = $_POST['remarks'];

            $name = htmlspecialchars($name,ENT_QUOTES,'UTF-8');
            $sex = htmlspecialchars($sex,ENT_QUOTES,'UTF-8');
            $insta = htmlspecialchars($insta,ENT_QUOTES,'UTF-8');
            $syurui = htmlspecialchars($syurui,ENT_QUOTES,'UTF-8');
            $hair_color = htmlspecialchars($hair_color,ENT_QUOTES,'UTF-8');
            $hair_style = htmlspecialchars($hair_style,ENT_QUOTES,'UTF-8');
            $remarks = htmlspecialchars($remarks,ENT_QUOTES,'UTF-8');

            try{
                $dsn = 'mysql:dbname=heroku_faaf0db93aafd4a;host=us-cdbr-east-03.cleardb.com;charset=utf8';
                $user = 'b17734e198a8b6';
                $password = 'ac4d752e';
                $dbh = new PDO($dsn,$user,$password);
                $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
                $sql = 'INSERT INTO order_form(user,sex,sns_id,menu_name,hairstyle,haircolor,remarks) VALUES (?,?,?,?,?,?,?)';
                $stmt = $dbh->prepare($sql);
                $data[] = $name;
                $data[] = $sex;
                $data[] = $insta;
                $data[] = $syurui;
                $data[] = $hair_style;
                $data[] = $hair_color;
                $data[] = $remarks;
                $stmt -> execute($data);
     
                $dbh = null;

                echo '<h2>ご予約確定!</h2>';
                echo '<p>ご予約有難うござます!施術の詳細や日時につきましては、DMにて相談させて頂きます。</p>';

            }catch(Exception $e)
            {
                echo '只今サーバー障害により大変ご迷惑おかけしております。';
                exit();
            }
            ?>
        </div>
        <div class="sub">
            <a class="top" href="index.php">・トップページ</a>
            <a class="kaku" href="y_kakunin.php">・予約の確認</a>
        </div>
        <div class="sec">
            <p>-合わせてこちらの記事-</p>
            <article>
                <h3>レディース</h3>
                <a href = "ladies.html">
                    <figure><img src="img/ladies-deepbule.jpg"></figure>
                    <p>More</p>
                </a>
            </article>
            <article>
                <h3>メンズ</h3>
                <a href = "mens.html">
                    <figure><img src="img/men-pink.jpg"></figure>
                    <p>More</p>
                </a>
            </article>
        </div>
        <footer>
            <div class="footer-title">
                <p>© Nakamura Beauty</p>
            </div>
        </footer>
        <script type="text/javascript" src="script.js"></script>
    </body>
</html>