<html>
 <head>
     <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>nodejsでindex.html</title>
 </head>
<body>
 <?php
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
 ?>
</body>
</html>