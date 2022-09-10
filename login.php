<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<div>  <a href="home.php">  <img src="cs.png"   width="125px"></a>   </div> 

<?php if(count($error)>0): ?>
<div  style="color:red; text-align:center;">

<?php  foreach ($error as $error1){

echo $error1;
echo "<br>"; }   ?>
</div>

<?php endif ?>                 


<form method="post" action="login.php">

<header><h1>Log In</h1></header>
<div class="form"> 
<label>Username</label> <br>
<input type="text" name="un"> <br>


<label>Password</label><br>
<input type="password" name="pw"><br>

<button type="submit" name="login" class="btn"> Sign in </button>
</div>
<h4> Not yet a memeber ?  <a class="link" href="register.php"> Sign Up </a> </h4> 










</body>
</html>