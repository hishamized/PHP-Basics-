<?php
$id = $_GET['id'];
 include_once "database.php";

 $sql = "DELETE FROM pets WHERE ID = $id";
 $result = mysqli_query($connection, $sql);
 if($result){
    echo "Record Deleted Successfully!";
    header("location: admin.php");
 } else {
    echo "Deletion operation failed because : " . mysqli_error($connection);
 }
?>