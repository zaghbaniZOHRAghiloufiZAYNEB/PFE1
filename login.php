<?php
mysql_connect('localhost',"root","");
mysql_select_db("mabase");
if(isset($_POST['username'])){
$user=$_POST['username'];
$pass=$_POST['password'];
$sql=mysql_query("select * from user where nom_utilisateur='".$user."' and mot_passe='".$pass."'")or die(mysql_error());
$count=mysql_num_rows($sql);
if($count>0){
session_start();
$_SESSION['user']=$user;
header("location:./index.php");
}}
?>
<!DOCTYPE html>
<html>
<head>
<title>تعليم العربية | login</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css"><![endif]-->
</head>
<body>
<div id="header">
  <div> <a href="index.php"><img src="images/arabic.jpg" alt=""></a>
   <ul >
      <li ><a href="index.php"> الصفحةالرئسية </a></li>
      <li><a href="parent.php">فضاء الولي</a></li>
	  	  

	<?php 
	if(!empty($_SESSION['user'])){?>
	  <li><a href="logout.php"><?php echo $_SESSION['user'];?> </a></li>
	  <?php }else{ ?>
	  <li class="current" ><a href="login.php">الدخول</a></li>
	
	  <li><a href="signup.php">التسجيل</a></li><?php } ?>
	  
	  <li><a href="contact.php">تواصل</a></li>
    </ul>
  </div>
</div>
<div class="content">
  <div>
    
   <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <h1 class="text-center">مرحبا بك في الموقع</h1>
        </div>
		<form action="./login.php" method="POST">
         <div class="modal-body">
             <div class="form-group">
                 <input type="text" name="username" class="form-control input-lg" placeholder="اسم المستخدم"/>
             </div>

             <div class="form-group">
                 <input type="password" name="password"class="form-control input-lg" placeholder="كلمة السر"/>
             </div>

             <div class="form-group">
                 <input type="submit" class="btn btn-block btn-lg btn-primary" value="التسجيل"/>
				 <br>
                 <span class="pull-right"><a href="signup.php">تسجيل</a></span>
				 <br>
				 <span><a href="#">هل نسيت كلمة المرور</a></span>
             </div>
         </div></from>
    </div>
 </div>

  </div>
</div>

</body>
</html>
