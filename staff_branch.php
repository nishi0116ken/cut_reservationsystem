<?php

session_start();
/*合言葉を変える*/
session_regenerate_id(true);
if(isset($_SESSION['login']) == false){
    echo '<h1 style="text-align:center;font-size:60px;">ログインされていません。</h1><br/>';
    echo '<h2 style="font-size:60px;"><a href="staff_login.php">ログイン画面へ</a></h2>';
    exit();
}

if(isset($_POST['edit'])==true){

    if(isset($_POST['staffcode'])==false){
        header('Location:staff_ng.php');
        exit();
    }

    $staff_code = $_POST['staffcode'];
    header('Location:staff_edit.php?staffcode='.$staff_code);
    exit();
}
if(isset($_POST['delete'])==true){

    if(isset($_POST['staffcode'])==false){
        header('Location:staff_ng.php');
        exit();
    }
    
    $staff_code = $_POST['staffcode'];
    header('Location:staff_delete.php?staffcode='.$staff_code);
    exit();
}
if(isset($_POST['disp'])==true){

    if(isset($_POST['staffcode'])==false){
        header('Location:staff_ng.php');
        exit();
    }
    
    $staff_code = $_POST['staffcode'];
    header('Location:staff_disp.php?staffcode='.$staff_code);
    exit();
}
if(isset($_POST['add'])==true){

    $staff_code = $_POST['staffcode'];
    header('Location:staff_add.php');
    exit();
}

?>
