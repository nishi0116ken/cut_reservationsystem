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
    <title>スタッフ情報修正</title>
    <meta name="viewport" content="width = device-width">
</head>
<body>
    <header><a href="#">Nakamura Beauty</a></header>

    <?php
    
    $staff_code = $_GET['staffcode'];
    try{

        $dsn = "mysql:dbname=beauty;host=localhost;charset=utf8";
        $user = 'root';
        $password ="mioyakenagjdt";
        $dbh = new PDO($dsn,$user,$password);
        $dbh-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql = 'SELECT name FROM b_staff WHERE id=?';
        $stmt = $dbh->prepare($sql);
        $data[] = $staff_code;
        $stmt->execute($data);

        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        $staff_name = $rec['name'];

        $dbh = null;

    }catch (Exception $e){
        echo 'エラーが発生しました。もう一度やり直してください';
        exit();
    }

    ?>
    <div class="tuika add">
        <h2>スタッフ修正画面</h2>
        <p style="margin-left: 27px">スタッフコード:<?php echo $staff_code; ?></p>
        <form method="post" action="staff_edit_check.php">
            <input type="hidden" name="code" value="<?php echo $staff_code; ?>">
            <p>スタッフ名</p>
            <input type="text" name="name" value="<?php echo $staff_name; ?>">
            <p>パスワードを入力してください。</p>
            <input type="password" name="pass">
            <p>もう一度入力してください。</p> 
            <input type="password" name="pass2"><br />
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