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
    <title>メニューリスト</title>
    <link href="staff_page.css" rel="stylesheet">
    <meta name="viewport" content="width = device-width">
</head>
<body>
    <header><a href="#">Nakamura Beauty</a></header>
    <?php
    
    try{

        $dsn = 'mysql:dbname=heroku_faaf0db93aafd4a;host=us-cdbr-east-03.cleardb.com;charset=utf8';
        $user = 'b17734e198a8b6';
        $password = 'ac4d752e';
        $dbh = new PDO($dsn,$user,$password);
        $dbh-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql = 'SELECT menu_id,name,time,price FROM menu WHERE 1';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();

        $dbh = null;


        echo '<h3 class="tuika">メニュー管理画面</h3>';

        echo '<form class="tuika list" method="post" action ="menu_branch.php">';
        while(true){
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            if($rec==false){
                break;
            }
            echo '<input type="radio" name="menucode" value="'.$rec['menu_id'].'">';
            echo $rec['name'];
            echo "/",$rec['time']."分";
            echo "/￥".$rec['price'];
            echo '<br />';
        }
        echo '<input type="submit" name="edit" value="修正">';
        echo '<input type="submit" name="delete" value="削除">';
        echo '<input type="submit" name="add" value="追加">';
        echo '<a class="tuika" href="staff_top.php">管理画面</a>';
        echo '</form>';
    }catch (Exception $e){
        echo 'エラーが発生しました。もう一度やり直してください';
        exit();
    }

    ?>
    <footer>
        <div class="footer-title">
            <p>© Nakamura Beauty</p>
        </div>
    </footer>
</body>

</html>