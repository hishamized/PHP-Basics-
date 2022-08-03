<?php
 $server = "localhost";
 $username = "root";
 $password = "";
 $database = "animals"; 

 $connection = mysqli_connect($server, $username, $password, $database);;
 if($connection){
    echo "Connection established successfully! <br>";
 } else {
    echo "Connection failed" . mysqli_connect_error( $connection);
 }
?>