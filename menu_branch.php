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

    if(isset($_POST['menucode'])==false){
        header('Location:menu_ng.php');
        exit();
    }

    $menu_code = $_POST['menucode'];
    header('Location:menu_edit.php?menucode='.$menu_code);
    exit();
}
if(isset($_POST['delete'])==true){

    if(isset($_POST['menucode'])==false){
        header('Location:menu_ng.php');
        exit();
    }
    
    $menu_code = $_POST['menucode'];
    header('Location:menu_delete.php?menucode='.$menu_code);
    exit();
}
if(isset($_POST['disp'])==true){

    if(isset($_POST['menucode'])==false){
        header('Location:menu_ng.php');
        exit();
    }
    
    $menu_code = $_POST['menucode'];
    header('Location:menu_disp.php?menucpde='.$menu_code);
    exit();
}
if(isset($_POST['add'])==true){

    $menu_code = $_POST['menucode'];
    header('Location:menu_add.php?ordercode='.$menu_code);
    exit();
}

?>
