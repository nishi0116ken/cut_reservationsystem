<?php 

try{

    $staff_code = $_POST['code'];
    $staff_pass = $_POST['pass'];

    $staff_code = htmlspecialchars($staff_code,ENT_QUOTES,'UTF-8');
    $staff_pass = htmlspecialchars($staff_pass,ENT_QUOTES,'UTF-8');

    $staff_pass = md5($staff_pass);
    
    $dsn = 'mysql:dbname=beauty;host=localhost;charset=utf8';
    $user = 'root';
    $password = 'mioyakenagjdt';
    $dbh = new PDO($dsn,$user,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
    $sql = 'SELECT name FROM b_staff WHERE id=? AND password=?';
    $stmt = $dbh->prepare($sql);
    $data[] = $staff_code;
    $data[] = $staff_pass;
    $stmt -> execute($data);
     
    $dbh = null;
    $rec = $stmt->fetch(PDO::FETCH_ASSOC);
    if($rec==false){
        echo '<h1 style="text-align:center;font-size:40px;">スタッフコードかパスワードが間違ってます</h1><br/>';
        echo '<h2 style="font-size:60px;"><a href="staff_login.php">ログイン画面へ</a></h2>';

    }else{
        /* ログイン機能*/
        session_start();
        $_SESSION['login'] =1;
        $_SESSION['staff_code']=$staff_code;
        $_SESSION['staff_name']=$rec['name'];
        header('Location:staff_top.php');
        exit();
    }
}
catch(Exception $e){
    echo 'ただいま障害により大変ご迷惑をおかけしております。申し訳ございません。';
    exit();
}
?>