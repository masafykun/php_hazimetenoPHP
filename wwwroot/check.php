<html>
 <head>
     <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>nodejsでindex.html</title>
 </head>
<body>
 <?php
 $nickname=$_POST['nickname']; 
 $email=$_POST['email'];
 $goiken=$_POST['goiken'];
 
 //文字のフォントサイズなどをで隠される被害をなくすやつ↓
 $nickname=htmlspecialchars($nickname);
 $email=htmlspecialchars($email);
 $goiken=htmlspecialchars($goiken);

 print " $nickname 様";
 print 'ご意見ありがとうございました。</br>';
 print "ご意見 </br>【 $goiken 】 </br>";
 print "メールアドレス </br> $email </br>";

 if($nickname==''||$email==''||$goiken==''){
     print '<form>';
     print '<input type="button" onclick="history.back()" value="戻る"';
     print '</form>';
 }
else{
    print '<form method="GET" action="thanks.php" >';
    print '<input type="hidden" name="nickname" value="masafy">';
    print '<input type="hidden" name="email" value="'.$email.'">';
    print '<input type="hidden" name="goiken" value="'.$goiken.'">';
    print '<input type="button" onclick="history.back()" value="戻る">';
    print '<input type="submit" value="OK">';
    print '</form>';
}
 ?>
</body>
</html>