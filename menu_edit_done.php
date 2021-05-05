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

$menu_code = $_POST['menucode'];
$name = $_POST['name'];
$time = $_POST['time'];
$price = $_POST['price'];



$name = htmlspecialchars($name,ENT_QUOTES,'UTF-8');
$time = htmlspecialchars($time,ENT_QUOTES,'UTF-8');
$price = htmlspecialchars($price,ENT_QUOTES,'UTF-8');

try{
    $dsn = 'mysql:dbname=heroku_faaf0db93aafd4a;host=us-cdbr-east-03.cleardb.com;charset=utf8';
    $user = 'b17734e198a8b6';
    $password = 'ac4d752e';
    $dbh = new PDO($dsn,$user,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql = 'UPDATE menu SET name=?, time=?, price=? WHERE menu_id=?';
    $stmt = $dbh->prepare($sql);
    $data[] = $name;
    $data[] = $time;
    $data[] = $price;
    $data[] = $menu_code;
    
    $stmt -> execute($data);

    $dbh = null;

    echo '<h3 class="tuika ad">メニュー情報を修正しました。</h3>';


}catch(Exception $e)
{
    echo '只今サーバー障害により大変ご迷惑おかけしております。';
    exit();
}
?>
    <a class="tuika done" href="menu_list.php">戻る</a>
    <footer>
        <div class="footer-title">
            <p>© Nakamura Beauty</p>
        </div>
    </footer>
</body>

</html>