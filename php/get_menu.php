<?php
  $connection = mysqli_connect('localhost','admin','0000', 'page');
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $sql = "SELECT menu FROM properties";
  $query_result = mysqli_query($connection, $sql);
  $row = mysqli_fetch_row($query_result);
  $arr = explode(',', $row[0]);
  $result = '<ul id="menu">';
  for($i = 0; $i < count($arr); $i++){
    if($arr[$i] == 'головна') $result .= '<li><a href="./index.php">'.$arr[$i].'</a></li>';
    else $result .= '<li><a href="#">'.$arr[$i].'</a></li>';
  }
  $result .= '<li><a href="./html/edit.php">редагувати</a></li></ul>';
  echo $result;
 ?>
