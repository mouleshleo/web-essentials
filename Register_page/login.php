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
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        fullname VARCHAR(30) NOT NULL,
        email VARCHAR(60),
        username VARCHAR(30) NOT NULL,
        phone INT,
        password VARCHAR(30) NOT NULL
        );";
        
        if (!mysqli_query($conn, $createdb)) {
          echo "error: ". mysqli_error($conn);
        }
    
        mysqli_query($conn, $select);

        if (!mysqli_query($conn, $createtable)) {
          echo "Error creating table: " . mysqli_error($conn);
        }
       $password=md5($password);
       $checkemail="SELECT * FROM register where email='$email';";
       $result=mysqli_query($conn,$checkemail);
       
       if(mysqli_num_rows($result) > 0){
        echo "Email address already exists !!";
        exit();
       }
       else{
        $sql= "INSERT INTO register (fullname, email, username, phone, password) VALUES('$name','$email','$username','$phone','$password')";
       }

        if(mysqli_query($conn,$sql)){
             header("location: ../index.html");
        }
        else{
            echo "sorry error $sql".mysqli_error($conn);
        }
  mysqli_close($conn);
  ?>



</center>
</body>
</html>