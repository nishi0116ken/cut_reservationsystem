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
    <link href="staff_page.css" rel="stylesheet">
    <title> メニュー追加確定</title>
    <meta name="viewport" content="width = device-width">
</head>
<body>
    <header><a href="#">Nakamura Beauty</a></header>
    <?php
    
    $name = $_POST['name'];
    $time = $_POST['time'];
    $price = $_POST['price'];

    try{

        $dsn = 'mysql:dbname=heroku_faaf0db93aafd4a;host=us-cdbr-east-03.cleardb.com;charset=utf8';
        $user = 'b17734e198a8b6';
        $password = 'ac4d752e';
        $dbh = new PDO($dsn,$user,$password);
        $dbh-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql = 'INSERT INTO menu (name,time,price) VALUES (?,?,?)';
        $stmt = $dbh->prepare($sql);
        $data[] = $name;
        $data[] = $time;
        $data[] = $price;
        $stmt->execute($data);

        $dbh = null;

        echo '<h3 class="tuika ad">メニューに'.$name.'<br>を追加しました。</h3>';


    }catch (Exception $e){
        echo 'エラーが発生しました。もう一度やり直してください';
        exit();
    }

    ?>
    <br />
    <a class="tuika done"href="menu_list.php">戻る</a>
    <footer>
        <div class="footer-title">
            <p>© Nakamura Beauty</p>
        </div>
    </footer>
</body>

</html>