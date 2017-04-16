<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>تعلم العربية</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css"><![endif]-->
</head>
<body>
<div id="mainPan">
  <div id="leftPan">
<div id="header">
  <div> <a href="index.html"><img src="images/arabic.jpg" alt=""></a>
  
    <ul >
      <li class="current" ><a href="index.php"> الصفحةالرئسية </a></li>
      <li><a href="parent.php">فضاء الولي</a></li>
	  	  

	<?php 
	if(!empty($_SESSION['user'])){?>
	  <li><a href="logout.php"><?php echo $_SESSION['user'];?> </a></li>
	  <?php }else{ ?>
	  <li><a href="login.php">الدخول</a></li>
	
	  <li><a href="signup.php">التسجيل</a></li><?php } ?>
	  
	  <li><a href="contact.php">تواصل</a></li>
    </ul>
	<br>

  </div>
  
	   
</div>
</div>
</div>
<div id="content">
<div class="row">
<div class="col-md3">
<br>
  &nbsp;&nbsp;&nbsp;<a href="jeux.html" class="agrand"><img src="./images/jeuxx.jpg" width="150px" height="50px"></a><br>
  <br>
    <br>
  &nbsp;&nbsp;&nbsp;<a href="test.html" class="agrand"><img src="./images/test.jpg" width="150px" height="50px"></a><br>
  <br>
</div></div>
 
</div>

</body>
</html>
