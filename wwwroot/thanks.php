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

 print " $nickname 様 <br /> ご意見ありがとうございました。 <br />";
 print "メールアドレス $email <br />";
 print "ご意見 $goiken <br />";
 ?>
</body>
</html>