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
    <title>メニュー追加</title>
    <link href="staff_page.css" rel="stylesheet" >
    <meta name="viewport" content="width = device-width">
</head>
<body>
    <header><a href="#">Nakamura Beauty</a></header>
    <div class="tuika add">
        <h2>メニュー追加</h2>
        <form action = "menu_add_check.php" method="post">
            <p>メニュー名</p>
            <input tytpe="text" name="name" style="width:200px" required>
            <p>施術時間</p>
            <input type="text" name="time" style="width:100px" required>
            <p>料金</p>
            <input type="text" name="price" style="width:100px"required>
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