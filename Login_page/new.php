<?php
session_start();
include("connect.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <div style="text-align: center; padding:15%">
<p style="font-size: 50px; font-weight:bold;">

 Hello
 <?php 
    if(isset($_SESSION['email'])){
    $email=$_SESSION['email'];
    $query=mysqli_query($conn, "SELECT register.* FROM `register` WHERE register.email='$email'");
    while($row=mysqli_fetch_array($query)){
        echo $row['fullname'];
    }
     
    }
?>
</p>
<h2>You Have Logged in successfully!!</h2>
<br>
<br>
<a href="logout.php" style="font-size: 30px">Log out</a>



</div>
</body>
</html>