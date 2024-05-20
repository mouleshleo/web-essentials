<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <?php 
       include 'connect.php';
       extract($_POST);    
       $password=md5($password);
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
       if (mysqli_query($conn, $createdb)) {
            echo "successfull<br>";
       } else {
        echo "error : ". mysqli_error($conn);
       }
       mysqli_query($conn, $select);
       mysqli_query($conn, $createtable);
        $sql= "SELECT * FROM register WHERE email='$email' and password='$password' ";
        $result=$conn->query($sql);
        if($result){
            session_start();
            $row=$result->fetch_assoc();
            $_SESSION['email']=$row['email'];
            header("location: new.php");
            exit();
        }
        
        else{
            echo "Incorrect username or password";
        }
  ?>

</body>
</html>