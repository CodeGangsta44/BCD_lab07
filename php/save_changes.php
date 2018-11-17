<?php
  $connection = mysqli_connect('localhost','admin','0000', 'page');
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  if(count($_POST['number_of_title']) > 0){
    $new_articles = implode(',', $_POST['number_of_title']);
    $sql = 'UPDATE properties SET articles="' . $new_articles .'";';
    mysqli_query($connection, $sql);
    echo '<p style="color: #bc1818; font-size: 25px;">Зміни збережені</p>';
  }
 ?>
