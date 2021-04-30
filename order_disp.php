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
    <title>予約お客様情報</title>
    <link href="staff_page.css" rel="stylesheet">
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
        if($rec['sex'] == 1){
            $sex = '男性';
        }else{
            $sex = '女性';
        }

        $sns_id = $rec['sns_id'];
        $order_color = $rec['haircolor'];
        $order_style = $rec['hairstyle'];
        $order_time = $rec['order_time'];
        if($rec['remarks'] == ''){
            $remarks = '未記入';
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
        <h2>お客様-予約情報-</h2><br>
        <p>予約番号：<?php echo $order_code; ?></p>
        <p>氏名: <?php echo $order_name; ?></p>
        <p>性別: <?php echo $sex; ?></p>
        <p>インスタID:<?php echo $sns_id; ?></p>
        <p>ご希望のカラー: <?php echo $order_color; ?></p>
        <p>ご希望のスタイル:</p>
        <p><?php echo $order_style; ?></p>
        <p>予約確定時間:</p>
        <?php echo $order_time; ?>
        <p>備考 : <?php echo $remarks; ?></p>
        <br />
        <form>
            <input type="button" onclick="history.back()" value="戻る">
        </form>
    </div>
    <footer>
        <div class="footer-title">
            <p>© Nakamura Beauty</p>
        </div>
    </footer>
</body>

</html>