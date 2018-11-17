<?php
  $connection = mysqli_connect('localhost','admin','0000', 'page');
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $sql = "SELECT articles FROM properties";
  $query_result = mysqli_query($connection, $sql);
  $row = mysqli_fetch_row($query_result);
  $number = explode(',', $row[0])[0];
  $sql = 'SELECT * FROM titles limit '.($number - 1).', 1';
  $query_result = mysqli_query($connection, $sql);
  $row = mysqli_fetch_row($query_result);

  $title = $row[1]; $text = $row[3]; $time = $row[5];

  $now = new DateTime();
  $date = DateTime::createFromFormat("Y-m-d H:i:s", $time);
  $interval = $now->diff($date);
  $days = $interval->d;
  $hours = $interval->h;
  $minutes = $interval->i;


  $result = '<div class="post"><div class="details"><h2><a href="#">'.$title.'</a></h2>';
  $result .= '<p class="info">опубліковано ';
  if ($days !== 0) $result .= $days.'д. ';
  if ($hours !== 0) $result .= $hours.'год. ';
  if ($minutes !== 0) $result .= $minutes.'хв. ';
  $result .= 'тому у секції <a href="#">загальне</a></p></div><div class="body"><p>'
  . $text . '</p></div></div>';

  echo $result;
 ?>
