<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>カットモデル募集ページ</title>
    <meta name="viewport" content="width = device-width">
    <link rel="stylesheet" href="style5.css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Homemade+Apple rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/98d5fb3ff2.js" crossorigin="anonymous"></script>
</head>
<body>
    <header><a href="index.php">Nakamura　Beauty</a></header>
    <div id="menu-btn" class="menu-btn">
        <i id ="menu-button" class="fas fa-bars"></i>
    </div>
    <nav id="nav">
        <div id="close-btn">
            <i class="fa fa-2x fa-times closebtn"></i>
        </div>
        <ul>
            <li class="list"><a href="index.php">トップページ</a></li><br>
            <li class="list"><a href="about.php">サイトについて</a></li><br>
            <li class="list"><a href="staff_login.php">スタッフページ</a></li><br>
            <li class="list"><a href="yoyaku.php">予約はこちら</a></li><br>
            <li class="list"><a href="y_kakunin.php">予約確認</a></li><br>
            <li class="list"><a href="ladies.php">ladeis</a></li><br>
            <li class="list"><a href="mens.php">mens</a></li><br>
            <li class="list"><a href="privacy.php">プライバシーポリシー</a></li><br>
        </ul>
    </nav>
    <h1>予約情報</h1>
    <?php 
    try{

        $name = $_POST['name'];
        $insta_id = $_POST['insta'];

        $name = htmlspecialchars($name,ENT_QUOTES,'UTF-8');
        $insta_id = htmlspecialchars($insta_id,ENT_QUOTES,'UTF-8');
    
        $dsn = 'mysql:dbname=beauty;host=localhost;charset=utf8';
        $user = 'root';
        $password = 'mioyakenagjdt';
        $dbh = new PDO($dsn,$user,$password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        $sql = 'SELECT * FROM order_form WHERE user=? AND sns_id=?';
        $stmt = $dbh->prepare($sql);
        $data[] = $name;
        $data[] = $insta_id;
        $stmt -> execute($data);
     
        $dbh = null;
        while(true){
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            if($rec==false){
                break;
            }
            if($rec['sex']==1){
                $sex = '男性';
            }else{
                $sex = '女性';
            }
            echo '<div class="kakunin">';
            echo'<table border="1">';
            echo '<tr>';
            echo '<th>名前</th>';
            echo '<th>年齢</th>';
            echo '<th>メニュー</th>';
            echo '<th>希望カラー</th>';
            echo '<th>希望スタイル</th>';
            echo '<th>予約確定時間</th>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>'.$rec['user'].'</td>';
            echo '<td>'.$sex.'</td>';
            echo '<td>'.$rec['menu_name'].'</td>';
            echo '<td>'.$rec['haircolor'].'</td>';
            echo '<td>'.$rec['hairstyle'].'</td>';
            echo '<td>'.$rec['order_time'].'</td>';
            echo'</tr>';
            echo '</table>';
            echo '<br />';
            echo '</div>';
            
        }
    }catch(Exception $e){
        echo 'ただいま障害により大変ご迷惑をおかけしております。申し訳ございません。';
        exit();
    }
    ?>
    <form>
        <input type="button" onclick="history.back()" value="戻る">
    </form>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>