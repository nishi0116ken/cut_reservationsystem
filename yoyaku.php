<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>カットモデル募集ページ</title>
    <meta name="viewport" content="width = device-width">
    <link rel="stylesheet" href="style2.css">
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
    <div class="menu">
      <h2>モデル様へのお願い</h2>
      <br/>
      <h3>料金・材料費について</h3>
      <p>※申し訳ありませんが学生の為、<br/>材料費だけ頂いております。</p>
      <p>ブリーチ一回を選択されたモデル様が、<br/>万が一希望するカラーや、その時状況に応じてもう一度ブリーチが必要な場合は、<br/>プラス料金は頂きません。</p>
      <br/>
      <h3>施術場所に関する説明</h3>
      <p>施術場所に関しては、<br/>誠に申し訳ございませんが、現状確実に<br/>確保できる場所が無い為、<br/><span>下記の条件に沿う方のみ<span>の施術とさせて頂きます。</p>
      <br/>
      <div class="terms">
        <p>・場所を貸してくれる方(家など)</p>
        <p>・僕とカラーをしている友人宅</p>
        <p>・渋谷にあるシェアサロン</p>
      </div>
      <br/>
      <p style="font-size:15px; padding-bottom: 15px;">※渋谷での施術を希望される方に関しては追って場所や日時について連絡させて頂きます。</p>
    </div>
    <div class="form">
        <h2>ご予約</h2>
        <div class="form_content">
            <form action = "kakunin.php" method="post">
                <p>
                    <label for="name1">名前(<span>必須</span>)</label><br />
                    <input type="text" name="namae" id="name1" required>
                </p>
                <p>
                    <label for="sex"required >性別(<span>必須</span>)</label><br />
                    <input type="radio" name="sex" id="sex" value="1" >男
                    <input type="radio" name="sex" id="sex" value="2" >女
                </p>
                <p>
                    <label for="insta">インスタ(<span>必須</span>)</label><br />
                    <input type="text" name="insta" id="insta" placeholder="アカウント名" required>
                </p>
                <?php 
                try{

                    $dsn = 'mysql:dbname=heroku_faaf0db93aafd4a;host=us-cdbr-east-03.cleardb.com;charset=utf8';
                    $user = 'b17734e198a8b6';
                    $password = 'ac4d752e';
                    $dbh = new PDO($dsn,$user,$password);
                    $dbh-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    $sql = 'SELECT name,price FROM menu WHERE 1';
                    $stmt = $dbh->prepare($sql);
                    $stmt->execute();
                
                    $dbh = null;
                
                    }catch (Exception $e){
                        echo 'エラーが発生しました。もう一度やり直してください';
                        exit();
                    }
                ?>
                <p>
                    <label for="menyuu">メニュー(<span>必須</span>)</label><br />
                    <select name="syurui" id="menyuu" required>
                    <?php
                    foreach($stmt as $row){
                        echo '<option value="'.$row['name'].$row['price'].'">'.$row['name']."/ ".$row['price'].'円</option>';
                    }　
                    ?>
                    </select>
                </p>
                <p>
                    <label for="color">ご希望のヘアカラー</label><br />
                    <input type="text" name="hair_color" id="color" placeholder="カラー" >
                </p>
                <p>
                    <label for="style">ご希望のヘアスタイル</label><br />
                    <input type="text" name="hair_style" id="style" placeholder="スタイル">
                </p>
                <p>
                    <label for="bikou">備考</label><br />
                    <textarea id="bikou" name="remarks" placeholder="なにか気になる点、ご要望がございましたらご記入ください。"></textarea><br />
                </p>
                <div class="submit"><input type="submit" value="確認"><input type="reset" value="リセット"></div>
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