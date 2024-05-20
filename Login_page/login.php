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
       
        $sql= "SELECT * FROM register WHERE email='$email' and password='$password' ";
        $result=$conn->query($sql);
        if($result->num_rows> 0){
            session_start();
            $row=$result->fetch_assoc();
            $_SESSION['email']=$row['email'];
            header("location: new.php");
            exit();
        }
        
        else{
            echo "<div>
            <h1>Incorrect username or password</h1><br><br>
            <h2>If you Don't have an account! Please Register First !!</h2><br><br>
            <p>you will be redirected in 5 seconds</p>
            </div>";
            header("refresh: 5;url=./Login_index.html");
        }
  ?>

</body>
</html>