<?php
include_once "database.php";
$username = "";
$password = "";
$confirm_password = "";
$hashed_pwd = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if( empty(trim($_POST["username"])) ){
        echo "Username Cannot be empty!";
    } else {
        $username = $_POST["username"];
        $password = trim($_POST["password"]) ;
        $confirm_password = trim($_POST["cpassword"]);
        if($password == $confirm_password){
            $hashed_pwd = password_hash($_POST["password"], PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`username`, `password`) VALUES ('$username', '$hashed_pwd')";
            $result = mysqli_query($connection, $sql);
            if($result){
                echo "Sign up successfull!";
            } else {
                echo "Failed to sign up because - >". mysqli_error($connection);
            }
        } else {
            echo "Passwords did not match!";
        }
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
    <link rel="stylesheet" href="./css/signup.css">
</head>
<body>
    <form action="" method="POST" class="form-container">
       <fieldset class="form-body">
        <legend>Sign-up Form</legend>

        <div class="form-item">
        <label for="username">Username : </label> 
        <input type="text" name="username">
        </div>

       <div class="form-item">
        <label for="password">Password : </label>
        <input type="password" name="password">
       </div>

        <div class="form-item">
        <label for="cpassword">Confirm Password : </label>
        <input type="password" name="cpassword">
        </div>
        
        <div class="form-item">
        <button class="button" type="submit">Sign-up!</button>
        <a href="login.php" class="login-btn">Log-in</a>
        </div>
       </fieldset>
    </form>
</body>
</html>