<?php

if (!isset($_SESSION) ){

    session_start();}
$error=array();


$db=mysqli_connect('localhost','root','','test');

if(isset($_POST['register'])){

$username=mysqli_real_escape_string($db,$_POST['un']);
$email=mysqli_real_escape_string($db,$_POST['email']);
$password=mysqli_real_escape_string($db,$_POST['pw']);
$cpassword=mysqli_real_escape_string($db,$_POST['cpw']);

if(empty($username)){
    array_push($error,"Usermame is required");
}
if(empty($email)){
    array_push($error,"Email is required");
}
if(empty($password)){
    array_push($error,"Password is required");
}

if(empty($cpassword)){
    array_push($error," Confirm Password is required");}

if($password!=$cpassword){
    array_push($error,"Password do not match");
}
if(count($error)==0){

    $sql="INSERT INTO users(username,email,password) values('$username','$email','$password')";

    mysqli_query($db,$sql);

}


}





if(isset($_POST['login'])){


    $username=mysqli_real_escape_string($db,$_POST['un']);
    $password=mysqli_real_escape_string($db,$_POST['pw']);

    if(empty($username)){
        array_push($error,"Usermame is required");
    }

    if(empty($password)){
        array_push($error,"Password is required");
    }

    if(count($error)==0){

        $query="SELECT * FROM users WHERE username='$username' AND password = '$password'";
        $result=mysqli_query($db,$query);
        if(mysqli_num_rows($result)==1){

       $_SESSION['username']=$username;
       $_SESSION['success']="   Welcome you are logged in";

         header('location:home2.php');
        }
}

}


if(isset($_GET['logout'])){

session_destroy();
unset($_SESSION['username']);
header('location:login.php');


}






















?>