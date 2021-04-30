<?php 
/* ログイン機能*/
session_start();
/*合言葉を変える*/
session_regenerate_id(true);
if(isset($_SESSION['login']) == false){
    echo '<h1 style="text-align:center;font-size:60px;">ログインされていません。</h1><br/>';
    echo '<h2 style="font-size:60px;"><a href="staff_login.php">ログイン画面へ</a></h2>';
    exit();
}

if(isset($_POST['edit'])==true){

    if(isset($_POST['ordercode'])==false){
        header('Location:order_ng.php');
        exit();
    }

    $order_code = $_POST['ordercode'];
    header('Location:order_edit.php?ordercode='.$order_code);
    exit();
}
if(isset($_POST['delete'])==true){

    if(isset($_POST['ordercode'])==false){
        header('Location:order_ng.php');
        exit();
    }
    
    $order_code = $_POST['ordercode'];
    header('Location:order_delete.php?ordercode='.$order_code);
    exit();
}
if(isset($_POST['disp'])==true){

    if(isset($_POST['ordercode'])==false){
        header('Location:order_ng.php');
        exit();
    }
    
    $order_code = $_POST['ordercode'];
    header('Location:order_disp.php?ordercode='.$order_code);
    exit();
}
if(isset($_POST['add'])==true){

    $order_code = $_POST['ordercode'];
    header('Location:staff_add.php?ordercode='.$order_code);
    exit();
}

?>
