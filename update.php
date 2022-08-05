<?php
  include_once "database.php";

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['update'])){
        $new_id = $_POST['new_id'];
        $new_name = $_POST['new_name'];
        $new_species = $_POST['new_species'];
        $new_breed = $_POST['new_breed'];
        $new_age = $_POST['new_age'];

        $sql = "UPDATE `pets` SET `Name` = '$new_name', `Species` = '$new_species', `Breed` = '$new_breed', `Age` = '$new_age' WHERE `pets`.`ID` = $new_id";

        $result = mysqli_query($connection, $sql);
        if($result){
            echo "Row has been updated successfully!";
        } else {
            echo "Updation process failed becauase of error" . mysqli_error($connection);
        }
        header("location: admin.php");
        mysqli_close($connection);
    }
 }
?>