<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="css/Login.css">
  <style>
  .reg{
    padding-bottom: 30px;
  }
  body{
    background-image:url(plant.jpg);
  }
  .container{
    padding-top:250px;
  }
  .login {
    background: #00b5b557;
    border: 1px solid #25af00;
    border-radius: 6px;
    height: 257px;
    margin: 20px auto 0;
    width: 298px;
}
.button{
  padding-top:20px;
}
  </style>
</head>
<body>
 
	 
   <div class="container">
  
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
	  <div class="login">
    <input type="text" placeholder="Username" name="username">  
  <input type="password" placeholder="Password" name="password">  
  <a href="#" class="forgot">forgot password?</a>
  <input type="submit"   name="login_user" value="Sign In">
  <div class="button">
  <button style="height:30px;"><a class="reg" href="register.php" class="forgot">Sign up account</a></button>
</div>
</div>
<div class="shadow"></div>
</form>
</div>
</body>
</html>