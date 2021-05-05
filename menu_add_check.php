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
    <title>メニュー追加-check-</title>
    <link href="staff_page.css" rel="stylesheet">
    <meta name="viewport" content="width = device-width">
</head>
<body>
    <header><a href="#">Nakamura Beauty</a></header>
    <?php
    
    $name = $_POST['name'];
    $time = $_POST['time'];
    $price = $_POST['price'];

    echo '<form class="tuika add" method="post" action ="menu_add_done.php">';
    echo '<input type="hidden" name="name" value="'.$name.'">';
    echo '<input type="hidden" name="time" value="'.$time.'">';
    echo '<input type="hidden" name="price" value="'.$price.'">';
    echo '<br />';
    echo '<input type="button" onclick="history.back()" value="戻る">';
    echo '<input type="submit" value="OK" style="margin-left: 10px; margin-top: 10em;
  }">';
    echo '</form>';
    ?>
    <div class="tuika add">
      <h2>メニュー追加画面</h2>
      <p>メニュー:　<?php echo $name; ?></p>
      <hr>
      <p>施術時間:　<?php echo $time; ?>分</p>
      <hr>
      <p>　料金:　　<?php echo $price; ?>円</p>
      <br />
    </div>
    <footer>
      <div class="footer-title">
        <p>© Nakamura Beauty</p>
      </div>
    </footer>

</body>

</html>