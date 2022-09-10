
<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body style="color: black;">

  <div>   <a href="home.php"> <img src="cs.png"   width="125px"> </a>  </div> 

  <?php if(count($error)>0): ?>
<div  style="color:red; text-align:center;">

<?php  foreach ($error as $error1){

echo $error1;
echo "<br>"; }   ?>
</div>

<?php endif ?>                  
<form method="post" action="register.php">



  <h1> Registration  </h1>
  <div class="form"> 
<label> User Name </label> <br>
<input type="text" name="un"> <br>

<label > Email  </label> <br>
<input type="email" name="email"> <br>


<label> Password  </label> <br>
<input type="password" name="pw"><br>

<label > Confirm Password </label> <br>
<input type="password" name="cpw"><br>


<button type= "submit" name="register" class="btn">   Register    </button> <br>



</div>
<h4> Already a memeber ?  <a class="link" href="login.php"> Sign In </a> </h4> 
</form>




</body>
</html>