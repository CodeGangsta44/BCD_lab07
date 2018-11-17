<?php
  $connection = mysqli_connect('localhost','admin','0000', 'page');
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  if($_POST['title'] != ''){
    $sql = 'UPDATE properties SET title="' . $_POST['title'] .'";';
    mysqli_query($connection, $sql);
  }
  if($_POST['menu'] != ''){
    $sql = 'UPDATE properties SET menu="' . $_POST['menu'] .'";';
    mysqli_query($connection, $sql);
  }
  if($_POST['footer'] != ''){
    $sql = 'UPDATE properties SET footer="' . $_POST['footer'] .'";';
    mysqli_query($connection, $sql);
  }
 ?>
