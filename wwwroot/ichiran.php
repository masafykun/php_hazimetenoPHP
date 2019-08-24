<html>
 <head>
     <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>nodejsでindex.html</title>
 </head>
<body>
<?php
$dsn='mysql:dbname=phpkiso;host=localhost:3306;charset=utf8';
$user='root';
$password='';

try {
    $dbh = new PDO($dsn, $user, $password);
 } catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
 }

 $sql='SELECT* FROM anketo WHERE 1';
 $stmt=$dbh->prepare($sql);
 $stmt->execute();

 while(1){
     $rec = $stmt->fetch(PDO::FETCH_ASSOC);
     if($rec==false){
         break;
     }

     print $rec['code'];
     print $rec['nickname'];
     print $rec['email'];
     print $rec['goiken'];
     print '<br/>';
 }

 $dbh=null;
 ?>
<br/>
    <a href="menu.html">メニューに戻る</a>
</body>
</html>