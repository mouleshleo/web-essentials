<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body><center>
    <?php 
       include 'connect.php';
       extract($_POST);    
       $password=md5($password);
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



</center>
</body>
</html>