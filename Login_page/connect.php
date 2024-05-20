
<?php 
    $conn = mysqli_connect("localhost","root","","map_register");
        if($conn === false){
             die("Error : Could not connect. " 
             . mysqli_connect_error());
        }

        ?>