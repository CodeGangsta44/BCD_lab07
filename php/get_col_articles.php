<?php
  $connection = mysqli_connect('localhost','admin','0000', 'page');
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  function get_url($id){
    $result = './full_article.php?id='.$id;
    return $result;
  }

  $result = '';
  $sql = "SELECT articles FROM properties";
  $query_result = mysqli_query($connection, $sql);
  $row = mysqli_fetch_row($query_result);
  $arr = explode(',', $row[0]);
  for($i = 1; $i < count($arr); $i++){
    $number = $arr[$i];
    $sql = 'SELECT * FROM titles limit '.($number - 1).', 1';
    $query_result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_row($query_result);
    $title = $row[1]; $anot = $row[2]; $url = $row[4];

    $result .= '<div class="col"><h3><a href="#">'
    . $title
    . '</a></h3><p>'
    . $anot
    . '</p><p class="det">&not; <a href='
    . get_url($number)
    . '>детальніше</a></p></div>';
  }
  echo $result;
 ?>
