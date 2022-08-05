<?php
 $server = "localhost";
 $username = "root";
 $password = "";
 $database = "animals"; 

 $connection = mysqli_connect($server, $username, $password, $database);
 if($connection){
    echo "<h4 class=\"db-heading\">Connection established successfully!</h4> <br>";
 } else {
    echo "Connection failed" . mysqli_connect_error( $connection);
 }
?>