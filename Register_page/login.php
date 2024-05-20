<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
</head>
<body><center>
    <?php 

       extract($_POST);    

        $conn = mysqli_connect("localhost","root","","Map_Register");
        if($conn === false){
             die("Error : Could not connect. " 
             . mysqli_connect_error());
        }
       $password=md5($password);
       $checkemail="SELECT * FROM register where email='$email' ";
       $result=mysqli_query($conn,$checkemail);
       if($result->num_rows>0){
        echo "Email address already exists !!";
       }
       else{
        $sql= "INSERT INTO register VALUES('$name','$email','$phone','$username','$password')";
       }
        if(mysqli_query($conn,$sql)){
             header("location: ../index.html");
        }
        else{
            echo "sorry error $sql"
            .mysqli_error($conn);
        }
  mysqli_close($conn);
  ?>



</center>
</body>
</html>