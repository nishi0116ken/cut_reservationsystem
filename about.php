<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>カットモデル募集ページ</title>
    <meta name="viewport" content="width = device-width">
    <link href="style6.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/98d5fb3ff2.js" crossorigin="anonymous"></script>
</head>
<body>
    <header><p>Nakamura Beauty</p></header>

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
    <div class="naiyou">
        <h1>サイトについて</h1>
        <table>
            <tr>
                <th>サイト名</th>
                <td>Nakamura Beauty</td>
            </tr>
            </tr>
                <th>スタイリスト</th>
                <td>中村雄樹</td>
            </tr>
            <tr>
                <th>開設者</th>
                <td>西野 健也</td>
            </tr>
            <tr>
                <th>開設日</th>
                <td>2021年2月23日</td>
            </tr>
            <tr>
                <th>方針</th>
                <td id="p">
                    こちらのサイトは<br>より多くの方にカットモデルを体験して頂きたいという
                    願いから簡単にいつでも予約できるよう開設しました。
                </td>
            </tr>
        </table>
    </div>
    <div class="question">
        <h1>開設者情報</h1>
        <p>※個人情報が多く含まれているためクイズに答えると表示されます。</p>
        <div id="form" class="form">
            <form>
                <h3>開設者の通っている<br>専門学校の名前は？</h3>
                <input type="text" id="ans" name="answer">
                <input type="submit" value="答える">
            </form>
        </div>
    </div>
    <div class="batu">
        <p class="batu">答えが違います！<br>ヒント:東京都八王子市の学校</p>
    </div>
    <div class="profile">
        <h2>Profile</h2>
        <p class="daimei"><i class="fas fa-user-alt"></i>Name</p>
        <p>西野健也</p>
        <p class="daimei"><i class="fas fa-birthday-cake"></i>Birthday</p>
        <p>2002/01/16</p>
        <p class="daimei"><i class="fas fa-graduation-cap"></i>School</p>
        <p>日本工学院八王子専門学校</p>
        <p class="daimei"><i class="fas fa-thumbs-up"></i>Favorite</p>
        <p>バスケ(経歴7年目),スケボー(3年目),生き物飼育,筋トレetc...</p>
        <p class="daimei"><i class="fas fa-laptop"></i>Skills</p>
        <p class="ml">Markup Languages</p>
        <p>HTML,CSS</p>
        <p class="ml">programming Languages</p>
        <p>javaScript, Python3,  PHP,  VB.NET</p>
        <p class="daimei">framework</p>
        <p>jQuery,  OpenCV,  Tensorflow</p>
        <p class="daimei">DB</p>
        <p>My SQL</p>
        <p class="daimei">about</p>
        <p>保有資格:G検定(ジェネラリスト検定)</p>
    </div>
    <footer>
        <div class="footer-title">
            <p>© Nakamura Beauty</p>
        </div>
    </footer>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>