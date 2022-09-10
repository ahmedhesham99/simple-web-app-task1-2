<?php include('server.php');
if(isset($_SESSION['username'])){?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
  <title>  Computer Store </title>

<link rel="stylesheet" type="text/css" href="style.css">
</head>


<body >
    <div  style="color:red; text-align:center; font-size:20px;">  <?php   
     
    if(isset($_SESSION['username'])){
       
        echo $_SESSION['username'];}

    
if(isset($_SESSION['success'])){

     echo $_SESSION['success'];
    unset($_SESSION['success']); }
   
  
  
?>
     </div>

     <div id="o"  >
  <a class="link" href="home2.php?logout='1'"> logout </a>    

 </div>


 
<div id="logo1"> <a href="home2.php"><img src="cs.png" width="125px"></a> </div> <br>

<div id="logo2"> <h1> Hardware </h1> <img src="hardware.jpg" width="700" height="550" > </div>
<div id="logo3"> <h1> Monitors </h1> <img src="monitors.jpg"width="700" height="550"> </div>
<div id="logo4"> <h1> Accessories</h1><img src="Accessories.png" width="700"  height="550"  > </div>
<div id="logo5"> <h1> Laptops  </h1>  <img src="laptops.jpg"    width="700"  height="550"   >   </div>

<div class="footer">   
  <ul>
  <li> Return Policy  </li> 
  <li> Our Story      </li>
  <li> Contact Us     </li>
</ul>  

</div>

<div class="footer">   
  <ul>
  <li> Facebook  </li> 
  <li> Instagram </li>
  <li> Twitter   </li>
</ul>
</div>
 
<div class="footer"> 
<textarea rows="7" cols="40"> Feedback  </textarea>


</div>



</body>
</html>
<?php } else {header ('location:login.php');} ?>
