<?php
$connection = mysqli_connect('localhost','admin','0000', 'page');
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

function get_anot($text){
  $arr = explode('.', $text);
  $result;
  while(true){
    $temp = array_shift($arr);
    if((strlen($result) + strlen($temp)) < 240){
      $result .= ($temp . '. ');
    } else break;
    if(count($arr) == 0) break;
  }
  return $result;
}

if($_POST['title'] != '' && $_POST['text'] != ''){
  $title = $_POST['title'];
  $anot = get_anot($_POST['text']);
  $text = $_POST['text'];
  $url = '#';
  $modified = date('Y-m-d H:i:s');

  $sql = 'INSERT INTO titles(id, title, anot, text, url, modified) VALUES (NULL, '
    .'\''. $title .'\''.', '
    .'\''. $anot .'\''.', '
    .'\''. $text .'\''.', '
    .'\''. $url .'\''.', '
    .'\''. $modified .'\''. ');';
    mysqli_query($connection, $sql);
    echo '<p style="color: #bc1818; font-size: 25px;">Стаття внесена до бази!</p>';
}
?>
