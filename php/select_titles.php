<?php
  $connection = mysqli_connect('localhost','admin','0000', 'page');
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  if ($_POST['number'] != ""){
    $sql = "SELECT * FROM " . "titles";
    $query_result = mysqli_query($connection, $sql);
    $rows_num =  mysqli_num_rows($query_result);

    $options = '';
    for ($j = 0 ; $j < $rows_num ; $j++){
      $row = mysqli_fetch_row($query_result);
      $options .= '<option value="'. $row[0] .'">' . $row[1] . '</option>';
    }

    echo '<form action="#" method="post">';
    echo '<p> Оберіть головну статтю: <select name="number_of_title[]">'.$options.'</select></p>';
    for($i = 1; $i <= $_POST['number']; $i++){
      $result = '<p>Оберіть статтю №'.$i;
      $result .= ' <select name="number_of_title[]">'.$options.'</select></p>';
      echo $result;
    }
    echo '<p><input type="submit" value="Підтвердити"></p></form>';
  }

 ?>
