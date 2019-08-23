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

 if($nickname==''){
     print 'ニックネームを入力してください。';
     print '<br />';
 }
 else{
    print 'ようこそ';
    print $nickname;
    print '様';
    print '<br />';
 }

if($email==''){
    print 'メールアドレスを入力してください。';
    print '<br />';
}
else{
   print 'メールアドレス';
   print $email;
   print '<br />';
}

if($goiken==''){
    print '意見を入力してください。';
    print '<br />';
}
else{
   print '意見「';
   print $goiken;
   print '」<br />';
}

print '<form><input type="button" onclick="history.back()" value="戻る"></form>';
print '<br />';
 ?>
 <form method="GET" action="thanks.php">
    <input type="submit" value="OK"> 
</form>
</body>
</html>