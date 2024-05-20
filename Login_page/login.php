<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <style>
   * {
    margin: 0;
    padding: 0;
   }

   div {
    position: absolute;
    text-align: center;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);

   }
    </style>

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
       if (!mysqli_query($conn, $createdb)) {
        die("error : ". mysqli_error($conn));
       }
       mysqli_query($conn, $select);
       mysqli_query($conn, $createtable);
        $sql= "SELECT * FROM register WHERE email='$email' and password='$password' ";
        $result=$conn->query($sql);
        if(mysqli_num_rows($result) > 0){
            session_start();
            $row=$result->fetch_assoc();
            $_SESSION['email']=$row['email'];
            header("location: new.php");
            exit();
        }
        
        else{
            echo "<div>
            <h1>Incorrect username or password</h1><br><br>
            <p>you will be redirected in 2 seconds</p>
            </div>";
            header("refresh: 2;url=./Login_index.html");
        }
  ?>

</body>
</html>