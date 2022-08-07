<?php
  session_start();

  if(!isset($_SESSION['loggedin']) || isset($_SESSION['loggedin']) !== true){
    header("location: login.php");
  }
  include_once 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/global.css">
</head>
<body>
  <h4 class="welcome"> <?php echo "Welcome ". $_SESSION['username'] ?>! You can use the website now!  <a class="logout-btn" href="logout.php">Logout</a> </h4>
   <section class="forms-container">
   <form action="register.php" method="POST" class="insertion-form">
      <fieldset class="insert-field">
        <legend>Pets Table in animals DB</legend>
        <div class="form-item">
         <label for="">Pet ID</label> 
         <input type="text" name="pet_id">
        </div>

        <div  class="form-item">
          <label for="">Pet Name</label> 
          <input type="text" name="pet_name"> 
        </div>

        <div  class="form-item">
          <label for="">Pet Species</label> 
          <input type="text" name="pet_species"> 
        </div>
        <div  class="form-item">
          <label for="">Pet Breed</label> 
          <input type="text" name="pet_breed"> 
        </div>
        <div  class="form-item">
          <label for="">Pet Age</label> 
          <input type="text" name="pet_age"> 
        </div>

        <button class="button" type="submit" name="submit">Register!</button>
      </fieldset>
    </form>

    <form action="update.php" method="POST" class="updation-form">
    <fieldset class="update-field">
        <legend>Updation Form For a table named pets in Db -> animals</legend>
        <div class="form-item">
          <label for="">ID of Row To Be Updated </label> 
          <input type="text" name="new_id"> 
        </div>

        <div class="form-item">
          <label for="">New Name</label>
          <input type="text" name="new_name">
        </div>

       <div class="form-item">
        <label for="">New Species</label> 
          <input type="text" name="new_species"> 
       </div>

       <div class="form-item">
        <label for="">New Breed</label>
        <input type="text" name="new_breed">
       </div>
        <div class="form-item">
          <label for="">New Age</label> 
          <input type="text" name="new_age">
        </div> 

        <button class="button" type="submit" name="update">Update!</button>
      </fieldset>
    </form>
   </section>

    <table class="table_body">
      <tr class="table_row">
        <th> Pet ID </th>
        <th> Pet Name </th>
        <th> Pet Species </th>
        <th> Pet Breed </th>
        <th> Pet Age </th>
        <th> Action</th> 
      </tr>
      <?php
         $sql = "SELECT ID, Name, Species, Breed, Age FROM pets";
         $result = mysqli_query($connection, $sql);
         while($row = mysqli_fetch_assoc($result)){
            echo "
               <tr class=\"table_row\">
                  <td> {$row["ID"]} </td>
                  <td> {$row["Name"]} </td>
                  <td> {$row["Species"]} </td>
                  <td> {$row["Breed"]} </td>
                  <td> {$row["Age"]} </td>
                  <td> <a class=\"delete-btn\" href=\"delete.php?id=$row[ID]\" id=\"$row[ID]\" value=\"$row[ID]\"> Delete! </a></td>
               </tr>";
         }
      ?>
    <table>
</body>
</html>