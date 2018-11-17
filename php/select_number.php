<?php
  $connection = mysqli_connect('localhost','admin','0000', 'page');
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $sql = "SELECT * FROM " . "titles";
  $query_result = mysqli_query($connection, $sql);
  $rows_num =  mysqli_num_rows($query_result);

  $result = '<select name="number">';
  for($i = 1; $i <= $rows_num; $i++){
    $result .= '<option value="'. $i .'">'.$i.'</option>';
  }
  $result .= '</select>';
  echo $result;
 ?>
