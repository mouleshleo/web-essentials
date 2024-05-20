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
       $select = "USE DATABASE map_register;";
       $createtable = "CREATE TABLE IF NOT EXISTS register {
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        email"
       if (mysqli_query($conn, $createdb)) {
            echo "successfull<br>";
       } else {
        echo "error : ". mysqli_error($conn);
       }
        $sql= "SELECT * FROM register WHERE email='$email' and password='$password' ";
        $result=$conn->query($sql);
        if($result->num_rows>0){
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