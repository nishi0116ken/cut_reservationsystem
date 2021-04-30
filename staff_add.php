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
    <title>スタッフ追加</title>
    <link href="staff_page.css" rel="stylesheet" >
    <meta name="viewport" content="width = device-width">
</head>
<body>
    <header><a href="#">Nakamura Beauty</a></header>
    <div class="tuika add">
        <h2>スタッフ追加</h2>
        <form action = "staff_add_check.php" method="post">
            <p>スタッフ名を入力してください</p>
            <input tytpe="text" name="name" style="width:200px">
            <p>新規パスワードを入力してください</p>
            <input type="password" name="pass" style="width:100px">
            <p>パスワードをもう一度入力してください</p>
            <input type="password" name="pass2" style="width:100px">
            <br /> 
            <br />
            <input type="button" onclick="history.back()" value="戻る">
            <input type="submit" value="確認">
            <input type="reset" value="リセット"></div>
        </form>
    </div>
    <footer>
        <div class="footer-title">
            <p>© Nakamura Beauty</p>
        </div>
    </footer>
</body>

</html>