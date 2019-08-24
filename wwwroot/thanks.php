<html>
 <head>
     <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>nodejsでindex.html</title>
 </head>
<body>
 <?php

//localhostではダメ。127.0.0.1ならOK
//でもlocalhost:3306なら接続可能。
$dsn='mysql:dbname=phpkiso;host=localhost:3306;charset=utf8';
$user='root';
$password='';

try {
    $dbh = new PDO($dsn, $user, $password);
 } catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
 }
//$dbh= new PDO($dsn,$user,$password);
//$dbh->query('SET NAMES UTF-8');


 $nickname=$_GET['nickname']; 
 $email=$_GET['email'];
 $goiken=$_GET['goiken'];  

 //文字のフォントサイズなどをで隠される被害をなくすやつ↓
 $nickname=htmlspecialchars($nickname);
 $email=htmlspecialchars($email);
 $goiken=htmlspecialchars($goiken);

 print " $nickname 様 <br /> ご意見ありがとうございました。 <br />";
 print "メールアドレス $email <br />";
 print "ご意見 $goiken <br />";

 $sql='INSERT INTO anketo (nickname,email,goiken) VALUES("'.$nickname.'","'.$email.'","'.$goiken.'")';
 $stmt=$dbh->prepare($sql);
 $stmt->execute();

 $dbh=null;

 ?>
</body>
</html>