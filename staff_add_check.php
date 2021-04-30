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
    <title>スタッフ追加-check-</title>
    <link href="staff_page.css" rel="stylesheet">
    <meta name="viewport" content="width = device-width">
</head>
<body>
    <header><a href="#">Nakamura Beauty</a></header>
    <?php
    
    $staff_name = $_POST['name'];
    $staff_pass = $_POST['pass'];
    $staff_pass2 = $_POST['pass2'];

    $staff_name = htmlspecialchars($staff_name,ENT_QUOTES,'UTF-8');
    $staff_pass = htmlspecialchars($staff_pass,ENT_QUOTES,'UTF-8');
    $staff_pass2 = htmlspecialchars($staff_pass2,ENT_QUOTES,'UTF-8');

    if($staff_name == ''){
        echo '<p class="tuika add" style="margin-bottom: 5em">スタッフ名を入力して下さい。</p><br >';
    }else{
        echo '<div class="tuika add">';
        echo '<p style="padding-bottom: 50px">スタッフ名:<br>'.$staff_name.'</p>';
        echo '<br />';
        echo '</div>';
    }
    if($staff_pass ==''){
        echo '<p class="tuika add">パスワードを入力して下さい。</p><br />';
    }
    if($staff_pass != $staff_pass2){
        echo '<p class="tuika add">パスワードが一致しません。</p><br />';
    }
    if($staff_name =='' || $staff_pass =='' || $staff_pass != $staff_pass2){
        echo '<form class="tuika add">';
        echo '<input style="margin-top: 5em;"type="button" onclick="history.back()" value="戻る">';
        echo '</form>';
    }else{
        $staff_pass = md5($staff_pass);
        echo '<form class="tuika add" method="post" action ="staff_add_done.php">';
        echo '<input type="hidden" name="name" value="'.$staff_name.'">';
        echo '<input type="hidden" name="pass" value="'.$staff_pass.'">';
        echo '<br />';
        echo '<input type="button" onclick="history.back()" value="戻る">';
        echo '<input type="submit" value="OK" style="margin-left: 10px;">';
        echo '</form>';
    }
    ?>
    <footer>
      <div class="footer-title">
        <p>© Nakamura Beauty</p>
      </div>
    </footer>

</body>

</html>