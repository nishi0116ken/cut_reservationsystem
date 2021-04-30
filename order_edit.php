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
    <link href="staff_page_orderlist.css" rel="stylesheet">
    <title>お客様情報修正</title>
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
        $color = $rec['haircolor'];
        $style = $rec['hairstyle'];

        $dbh = null;

    }catch (Exception $e){
        echo 'エラーが発生しました。もう一度やり直してください';
        exit();
    }

    ?>
    <div class="tuika add">
        <h2>予約情報修正画面</h2>
        <p>予約番号:<?php echo $order_code; ?></p>
        <form action = "order_edit_done.php" method="post">
            <p><label for="name1">名前</label></p>
            <input type="text" name="name" id="name1" value="<?php echo $order_name; ?>" required>

            <p>
            <label for="sex"required >性別</label>
            <input type="radio" name="sex" id="man" value="1" >男
            <input type="radio" name="sex" id="woman" value="2" >女
            </p>

            <p><label for="insta">インスタ</label></p>
            <input type="text" name="insta" id="insta" placeholder="アカウント名" value="<?php echo $sns_id; ?>" required>

            <p><label for="menyuu">メニュー</label></p>
            <select name="syurui" id="menyuu" required>
                <option value="ヘアカット">ヘアカット</option>
                <option value="ヘアカラー">ヘアカラー</option>
                <option value="ヘアセット">ヘアセット</option>
                <option value="カット&カラー">カット&カラー</option>
                <option value="カット&カラー&セット">カット&カラー&セット</option>
            </select>

            <p><label for="color">ご希望のヘアカラー</label><br /></p>
            <input type="text" name="hair_color" id="color" placeholder="カラー" value="<?php echo $color; ?>" required>

            <p><label for="style">ご希望のヘアスタイル</label><br /></p>
            <input type="text" name="hair_style" id="style" value="<?php echo $style; ?>" placeholder="スタイル">

            <p><label for="bikou">備考</label><br /></p>
            <textarea id="bikou" name="remarks" placeholder="なにか気になる点、ご要望がございましたらご記入ください。"></textarea>

            <input type="hidden" name="ordercode" value="<?php echo $order_code; ?>">
            <div class="submit"><input type="submit" value="確認"><input type="reset" value="リセット"><input type="button" onclick="history.back()" value="戻る"></div>
        </form>   
    </div>
    <footer>
        <div class="footer-title">
            <p>© Nakamura Beauty</p>
        </div>
    </footer>
</body>

</html>