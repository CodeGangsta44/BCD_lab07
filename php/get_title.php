<?php
  $connection = mysqli_connect('localhost','admin','0000', 'page');
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $sql = "SELECT title FROM properties";
  $query_result = mysqli_query($connection, $sql);
  $row = mysqli_fetch_row($query_result);
  echo '<h1>'.$row[0].'</h1>';
 ?>
