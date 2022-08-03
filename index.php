<?php
  include_once 'database.php';
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
    <form action="register.php" method="POST">
      <fieldset>
        <legend>Pets Table in animals DB</legend>
        <label for="">Pet ID</label> <br><br>

        <input type="text" name="pet_id"> <br><br>
        <label for="">Pet Name</label> <br><br>

        <input type="text" name="pet_name"> <br><br>
        <label for="">Pet Species</label> <br><br>

        <input type="text" name="pet_species"> <br><br>
        <label for="">Pet Breed</label> <br><br>
        
        <input type="text" name="pet_breed"> <br><br>
        <label for="">Pet Age</label> <br><br>
        <input type="text" name="pet_age"> <br><br>

        <button type="submit" name="submit">Register!</button>
      </fieldset>
    </form>

    <table border="1px">
      <tr>
        <th> Pet ID </th>
        <th> Pet Name </th>
        <th> Pet Species </th>
        <th> Pet Breed </th>
        <th> Pet Age </th>
      </tr>
      <?php
         $sql = "SELECT ID, Name, Species, Breed, Age FROM pets";
         $result = mysqli_query($connection, $sql);
         while($row = mysqli_fetch_assoc($result)){
            echo "
               <tr>
                  <td> {$row["ID"]} </td>
                  <td> {$row["Name"]} </td>
                  <td> {$row["Species"]} </td>
                  <td> {$row["Breed"]} </td>
                  <td> {$row["Age"]} </td>
               </tr>";
         }
      ?>
    <table>
</body>
</html>