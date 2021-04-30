<?php
try{
    $dsn = 'mysql:dbname=beauty;host=localhost;charset=utf8mb4';
    $user = 'root';
    $password = 'mioyakenagjdt';
    $dbh = new PDO($dsn,$user,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(Exception $e)
{
    echo '只今サーバー障害により大変ご迷惑おかけしております。';
    exit();
}

$name = $_POST['namae'];
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


?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>カットモデル募集ページ</title>
    <meta name="viewport" content="width = device-width">
    <link rel="stylesheet" href="style3.css">
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

    <div class="form_kakuin">
        <h2>確認画面</h2>
        <div class="form_kakunin_content">
            <div>
                <p>お名前</p>
                <?php echo $_POST['namae']." 様"; ?>
            </div>
            <div>
                <p>性別</p>
                <?php
                if($_POST['sex']==1){
                    echo "男性";
                }else{
                    echo '女性';
                }
                ?>
            </div>
            <div>
                <p>アカウント名</p>
                <?php echo $_POST['insta']; ?>
            </div>
            <div>
                <p>メニュー</p>
                <?php echo $_POST['syurui']; ?>
            </div>
            <div>
                <p>カラー</p>
                <?php echo $_POST['hair_color']; ?>
            </div>
            <div>
                <p>スタイル</p>
                <?php echo $_POST['hair_style']; ?>
            </div>
            <div>
                <p>備考</p>
                <?php echo $_POST['remarks']; ?>
            </div>
            <?php
            echo '<form method="post" action="kakutei.php">';
            echo '<input type="hidden" name="name" value="'.$name.'">';
            echo '<input type="hidden" name="sex" value="'.$sex.'">';
            echo '<input type="hidden" name="insta" value="'.$insta.'">';
            echo '<input type="hidden" name="syurui" value="'.$syurui.'">';
            echo '<input type="hidden" name="hair_color" value="'.$hair_color.'">';
            echo '<input type="hidden" name="hair_style" value="'.$hair_style.'">';
            echo '<input type="hidden" name="remarks" value="'.$remarks.'">';
            echo '<br />';
            echo '<input type="submit" value="送信">';
            echo '<input type="button" onclick="history.back()" value="戻る">';
            ?>
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