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
    <h1>予約情報</h1>
    <?php 
    try{

        $name = $_POST['name'];
        $insta_id = $_POST['insta'];

        $name = htmlspecialchars($name,ENT_QUOTES,'UTF-8');
        $insta_id = htmlspecialchars($insta_id,ENT_QUOTES,'UTF-8');
    
        $dsn = 'mysql:dbname=heroku_faaf0db93aafd4a;host=us-cdbr-east-03.cleardb.com;charset=utf8';
        $user = 'b17734e198a8b6';
        $password = 'ac4d752e';
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