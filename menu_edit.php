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
    <title>メニュー情報修正</title>
    <meta name="viewport" content="width = device-width">
</head>
<body>
    <header><a href="#">Nakamura Beauty</a></header>

    <?php
    
    $menu_code = $_GET['menucode'];
    try{

        $dsn = 'mysql:dbname=heroku_faaf0db93aafd4a;host=us-cdbr-east-03.cleardb.com;charset=utf8';
        $user = 'b17734e198a8b6';
        $password = 'ac4d752e';
        $dbh = new PDO($dsn,$user,$password);
        $dbh-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql = 'SELECT name,time,price FROM menu WHERE menu_id=?';
        $stmt = $dbh->prepare($sql);
        $data[] = $menu_code;
        $stmt->execute($data);

        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        $menu_name = $rec['name'];
        $time = $rec['time'];
        $price = $rec['price'];

        $dbh = null;

    }catch (Exception $e){
        echo 'エラーが発生しました。もう一度やり直してください';
        exit();
    }

    ?>
    <div class="tuika add">
        <h2>メニュー情報修正</h2>
        <p style="margin-left: 27px">メニューコード:<?php echo $menu_code; ?></p>
        <form method="post" action="menu_edit_done.php">
            <input type="hidden" name="menucode" value="<?php echo $menu_code; ?>">
            <p>メニュー名</p>
            <input type="text" name="name" value="<?php echo $menu_name; ?>" required>
            <p>施術時間</p>
            <input type="text" name="time" value="<?php echo $time; ?>" required>
            <p>料金</p> 
            <input type="text" name="price" value="<?php echo $price; ?>" required><br />
            <input type="button" onclick="history.back()" value="戻る">
            <input type="submit" value="確定">
            <input type="reset" value="リセット">
        </form>
    </div>
    <footer>
        <div class="footer-title">
            <p>© Nakamura Beauty</p>
        </div>
    </footer>
</body>

</html>