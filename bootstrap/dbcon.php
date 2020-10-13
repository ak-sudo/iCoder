<?php

$server="localhost";
$user="root";
$password="";
$db="icoder";

$con=mysqli_connect($server, $user, $password, $db);

if($con){
    /*?>
      <script>
        alert("Connection Successful");
      </script>
    <?php*/
}else{
    ?>
      <script>
        alert(" Unable to connect to the server right now. Please try again later.... ");
      </script>
    <?php
}

?>