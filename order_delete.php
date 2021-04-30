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
    <title>予約削除</title>
    <meta name="viewport" content="width = device-width">
</head>
<body>
    <header><a href="#">Nakamura Beauty</a></header>
    <?php
    
    $order_code = $_GET['ordercode'];
    try{

        $dsn = "mysql:dbname=beauty;host=localhost;charset=utf8";
        $user = 'root';
        $password ="mioyakenagjdt";
        $dbh = new PDO($dsn,$user,$password);
        $dbh-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql = 'SELECT * FROM order_form WHERE order_id=?';
        $stmt = $dbh->prepare($sql);
        $data[] = $order_code;
        $stmt->execute($data);

        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        $order_name = $rec['user'];
        $sns_id = $rec['sns_id'];

        if($rec['haircolor']==''){
            $color = '未記入';
        }else{
            $color = $rec['haircolor'];
        }

        if($rec['hairstyle']==''){
            $style = '未記入';
        }else{
            $style = $rec['hairstyle'];
        }
        if($rec['remarks']==''){
            $style = '未記入';
        }else{
            $remarks = $rec['remarks'];
        }
        $dbh = null;

    }catch (Exception $e){
        echo 'エラーが発生しました。もう一度やり直してください';
        exit();
    }

    ?>
    <div class="tuika add">
        
        <h2>予約キャンセル画面</h2>
        <h3>お客様情報</h3>
        <p>予約コード:<?php echo $order_code; ?></p>
        <p>氏名:<?php echo $order_name.' 様'; ?></p>
        <p>sns_id: <?php echo $sns_id; ?></p>
        <p>カラー:<?php echo $color; ?></p>
        <p>ヘアスタイル:<?php echo $style; ?></p>
        <p>こちらの予約情報を削除してもよろしいですか？</p>
        <br />
        <form method="post" action="order_delete_done.php">
            <input type="hidden" name="code" value="<?php echo $order_code; ?>">
            
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