<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
</head>
<body><center>
    <?php 

       extract($_POST);    

        $conn = mysqli_connect("localhost","root","");
        if($conn === false){
             die("Error : Could not connect. " . mysqli_connect_error());
        }
       $createdb = "CREATE DATABASE IF NOT EXISTS map_register;";
       $select = "USE map_register;";
       $createtable = "CREATE TABLE IF NOT EXISTS register (
        id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        fullname VARCHAR(300) ,
        email VARCHAR(255),
        username VARCHAR(300) ,
        phone BIGINT(11),
        password VARCHAR(255) 
        );";

        if (!mysqli_query($conn, $createdb)) {
          echo "error: ". mysqli_error($conn);
        }
    
        mysqli_query($conn, $select);

        if (!mysqli_query($conn, $createtable)) {
          echo "Error creating table: " . mysqli_error($conn);
        }
        if($password===$passwordd){
        $password=md5($password);
       $checkemail="SELECT * FROM register where email='$email'";
       $result=mysqli_query($conn,$checkemail);
       
       if(mysqli_num_rows($result) > 0){
        echo "Email address already exists !!";
        exit();
       }
       else{
        $sql= "INSERT INTO register (fullname, email, username, phone, password) VALUES('$name','$email','$username','$phone','$password')";
       }}
       else{
        echo "Both Password are not same !! Please Check it !!";
       }

        if(mysqli_query($conn,$sql)){
            echo "<h1>registed sucessfully !!<h1>";
            header("refresh:2;url=../index.html");
        }
        else{
            echo "sorry error $sql".mysqli_error($conn);
        }
  mysqli_close($conn);
  ?>



</center>
</body>
</html>