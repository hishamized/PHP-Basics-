<?php
   date_default_timezone_set('Asia/Kolkata');

   echo "Year is : ".date("Y")."<br>";
   echo "Month is : ".date("F")."<br>";
   echo "Day is : ".date("j")."<br>";
   echo "Happy ".date("l")."<br>";

   echo "Time : ".date("h")."-".date("i")."-".date("s")."-".date("A");
?>