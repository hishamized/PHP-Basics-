<?php
  $pointer = fopen("hello.txt", "a+");
  $filename = "hello.txt";
  fwrite($pointer, "This is a sentence! <br>");
  readfile("hello.txt");

  $data = fread($pointer, filesize( $filename));
  echo ("$data");

  $str = fgets($pointer, filesize($filename));
  echo "$str";
  $char = fgetc($pointer);
  echo "$char";

  fclose($pointer);
?>
