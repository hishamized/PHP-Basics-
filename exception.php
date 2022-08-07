<?php 
          if($_SERVER['REQUEST_METHOD'] == "POST"){
            if(isset($_POST['divide'])){
              $num1 = $_POST["num1"];
              $num2 = $_POST["num2"];
              $ans = "NULL";
              try{
                if($num2 == 0){
                  throw new Exception(" <h4 class=\"exception\">Divisor Cannot be zero. Enter a valid divisor</h4> <br> ");
                } else {
                  $ans = $num1/$num2;
                }
              } 
              catch(Exception $e){
                echo $e->getMessage();
              }
              finally{
                echo "Hogaya!";
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
    <link rel="stylesheet" href="./css/exception.css">
    <title>Document</title>
</head>
<body>
<form action="" method="POST"  class="forms-container">
      <fieldset class="form-body">
        <legend>Exception Handling</legend>
      <label for="num1">First Number : </label>
      <input type="text" name="num1" id="num1" class="input"> <br>
      <label for="num1">Second Number : </label>
      <input type="text" name="num2" id="num2" class="input"> <br>
      <button type="submit" name="divide" class="button">Divide!</button> <br>
      <label for="ans">Answer : </label>
      <input type="text" name="ans" value=" <?php echo "$ans"?> " class="input">
      </fieldset>
    </form>
</body>
</html>