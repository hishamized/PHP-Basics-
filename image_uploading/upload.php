<?php
 
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['submit'])){
       $file = $_FILES["file"];

       $fName = $_FILES["file"]["name"];
       $ftmpName = $_FILES["file"]["tmp_name"];
       $fSize = $_FILES["file"]["size"];
       $fError = $_FILES["file"]["error"];
       $fType = $_FILES["file"]["type"];

       $fExtension = explode('.', $fName);
       $fRealExtension = strtolower(end($fExtension));

       $legal = array('jpg', 'jpeg', 'png', 'pdf');

       if(in_array($fRealExtension, $legal)){
           if($fError === 0){
              if($fSize < 1000000){
                  $fNameFinal = uniqid('', true).".".$fRealExtension;

                  $filePath = 'uploads/'.$fNameFinal;

                  move_uploaded_file($ftmpName, $filePath);

                  header("location: index1.php?successfullyUploaded");
              } else {
                echo "File size too big! <br>";
              }
           } else {
            echo "There was an error uploading your file! <br>";
           }
       } else {
         echo "Unsupported File Format. Please upload a valid file <br>";
       }
    }
 }

?>