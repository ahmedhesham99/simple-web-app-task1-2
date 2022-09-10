<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body style="background-color: Whitesmoke">
    <header><h2 style="color:red">Admin Interface </h2></header>
     
    <form method="post">


    <b><label>Looking For Somthing!</label></b>

    <input type="text" name="search" placeholder="Search By Name" autocomplete="off" required>
  <br/><br/>

  <input type="submit" name="submit" value="Search Me!">

</form>


<?php

include 'server.php';

if(isset($_POST['submit'])){

    $st= $_POST['search'];
    

    $query= "SELECT * FROM users WHERE username ='$st'";
    $result= mysqli_query($db,$query);
    
    if ($row = mysqli_fetch_array($result)){


        ?>

        <br/> <br/>
       
        <table border=1   >
        <tr>
            <th> Name </th>
            <th> email </th>
            <th> password </th>
    </tr>

    <?php

    echo "<tr>";
    echo "<td>".$row['username']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['password']."</td>";
    echo"<tr>";
?>

</table>
    
<?php
}

else {
    echo"Name doesnt exists";
}

  } 
?>
 


</body>
</html>