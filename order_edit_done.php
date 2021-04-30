<?php 
/* ログイン機能*/
session_start();
/*合言葉を変える*/
session_regenerate_id(true);
if(isset($_SESSION['login']) == false){
    echo '<h1 style="text-align:center;font-size:60px;">ログインされていません。</h1><br/>';
    echo '<h2 style="font-size:60px;"><a href="staff_login.php">ログイン画面へ</a></h2>';
    exit();
}else{
    echo '<p class="tuika" style="text-align:end">'. $_SESSION['staff_name'].'ログイン中</p>';
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>予約情報修正</title>
    <link href="staff_page.css" rel="stylesheet">
    <meta name="viewport" content="width = device-width">
</head>
<body>
    <header><a href="#">Nakamura Beauty</a></header>
<?php

$order_code = $_POST['ordercode'];
$name = $_POST['name'];
$sex = $_POST['sex'];
$insta = $_POST['insta'];
$syurui = $_POST['syurui'];
$hair_color = $_POST['hair_color'];
$hair_style = $_POST['hair_style'];


$name = htmlspecialchars($name,ENT_QUOTES,'UTF-8');
$sex = htmlspecialchars($sex,ENT_QUOTES,'UTF-8');
$insta = htmlspecialchars($insta,ENT_QUOTES,'UTF-8');
$syurui = htmlspecialchars($syurui,ENT_QUOTES,'UTF-8');
$hair_color = htmlspecialchars($hair_color,ENT_QUOTES,'UTF-8');
$hair_style = htmlspecialchars($hair_style,ENT_QUOTES,'UTF-8');


try{
    $dsn = 'mysql:dbname=beauty;host=localhost;charset=utf8';
    $user = 'root';
    $password = 'mioyakenagjdt';
    $dbh = new PDO($dsn,$user,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql = 'UPDATE order_form SET user=?, sex=?, sns_id=?, menu_name =?, haircolor=?, hairstyle=? WHERE order_id=?';
    $stmt = $dbh->prepare($sql);
    $data[] = $name;
    $data[] = $sex;
    $data[] = $insta;
    $data[] = $syurui;
    $data[] = $hair_color;
    $data[] = $hair_style;
    $data[] = $order_code;
    
    $stmt -> execute($data);

    $dbh = null;

    echo '<h3 class="tuika ad">'.$name.'さん<br>の予約情報を修正しました。</h3>';


}catch(Exception $e)
{
    echo '只今サーバー障害により大変ご迷惑おかけしております。';
    exit();
}
?>
    <a class="tuika done" href="order_list.php">戻る</a>
    <footer>
        <div class="footer-title">
            <p>© Nakamura Beauty</p>
        </div>
    </footer>
</body>

</html>