<?php 
 session_start();

 require_once "database.php";
 $username = "";
 $password = "";
 $error = "";

 if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])) ){
        echo "Username/Password Cannot be empty. Enter valid credentials!";
        $error = 1;
    } else {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }
    if(empty($error)){
        $sql = "SELECT user_id, username, password FROM animals.users WHERE username = ?";
        $stmt = mysqli_prepare($connection, $sql);
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        $param_username = $username;

        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
             if(mysqli_stmt_num_rows($stmt) == 1){
                mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                 if(mysqli_stmt_fetch($stmt)){
                    if(password_verify($password, $hashed_password)){
                        session_start();
                        $_SESSION["username"] = $username;
                        $_SESSION["id"] = $id;
                        $_SESSION["loggedin"] = true;

                        header("location: admin.php");
                    }
                 }
             }
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
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
<form action="" method="POST" class="form-container">
       <fieldset class="form-body">
        <legend>Log-in Form</legend>

        <div class="form-item">
            <label for="username">Username : </label> 
            <input type="text" name="username">
        </div>

       <div class="form-item">
        <label for="password">Password : </label>
        <input type="password" name="password">
       </div>
   
       <div class="form-item">
       <button class="button" type="submit">Log-in!</button>
       <a class="signup-btn" href="signup.php">Signup</a>
       </div>
       </fieldset>
    </form>
</body>
</html>