
<?php 
    $conn = mysqli_connect("localhost","root","","Map_Register");
        if($conn === false){
             die("Error : Could not connect. " 
             . mysqli_connect_error());
        }

        ?>