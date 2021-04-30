<?php 
session_start();
$_SESSION=array();
if(isset($_COOKIE[session_name()])==true){
  setcookie(session_name(),'',time()-42000,'/');
}
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="staff_page.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ログアウト画面</title>
</head>
<body>
  <header><a href="#">Nakamura Beauty</a></header>
  <div class="tuika">
    <h1>ログアウトしました。</h1>
    <a href="staff_login.php">ログイン画面へ</a>
  </div>
  <footer>
      <div class="footer-title">
        <p>© Nakamura Beauty</p>
      </div>
  </footer>
</body>
</html>