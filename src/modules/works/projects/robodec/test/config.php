<?php

  $link = new PDO('mysql:dbname=technomagic;host=localhost', 'root', 'UspeX1337');

  if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
  }
  
?>