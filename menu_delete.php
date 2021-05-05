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
    <title>メニュー削除</title>
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

        $sql = 'SELECT * FROM menu WHERE menu_id=?';
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
        
        <h2>メニュー削除</h2>
        <h3>メニュー情報</h3>
        <p>コード:<?php echo $menu_code; ?></p>
        <p>メニュー名:<?php echo $menu_name; ?></p>
        <p>施術時間: 　<?php echo $time; ?>分</p>
        <p>　料金:　　<?php echo $price; ?>円</p>
        <p>こちらのメニュー情報を削除してもよろしいですか？</p>
        <br />
        <form method="post" action="menu_delete_done.php">
            <input type="hidden" name="code" value="<?php echo $menu_code; ?>">
            
            <input type="button" onclick="history.back()" value="戻る">
            <input type="submit" value="確定">
        </form>
    </div>
    <footer>
        <div class="footer-title">
            <p>© Nakamura Beauty</p>
        </div>
    </footer>
</body>

</html>