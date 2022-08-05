<?php
 include_once 'database.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['submit'])){
        $pet_id = $_POST['pet_id'];
        $pet_name = $_POST['pet_name'];
        $pet_species = $_POST['pet_species'];
        $pet_breed = $_POST['pet_breed'];
        $pet_age = $_POST['pet_age'];

        $sql = "INSERT INTO pets (ID, Name, Species, Breed, AGE) VALUES ('$pet_id','$pet_name', '$pet_species', '$pet_breed', '$pet_age')";

        $result = mysqli_query($connection, $sql);
        if($result){
            echo "Pet has been registered successfully!";
        } else {
            echo "Registration failed becauase of error" . mysqli_error($connection);
        }
        header("location: admin.php");
        mysqli_close($connection);
    }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php"> Take me Home! </a>
</body>
</html>