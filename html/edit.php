<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" href="../css/style.css" type="text/css" />
    <title>Редагування контенту</title>
  </head>
  <body>
    <div id="content">
      <h1>Редагування контенту</h1>
      <ul id="menu">
        <li><a href="../index.php">головна</a></li>
        <li><a href="./insert_title.php">додати</a></li>
        <li><a href="./general.php">загальне</a></li>
        <li><a href="#">редагувати</a></li>
      </ul>
      <form action="#" method="post">
        <p id="choose_titles"><b>Редактор контенту</b></p>
        <p>Кількість статей, що відображаються(крім головної): <?php include_once "../php/select_number.php"?></p>
        <p><input type="submit" value="Підтвердити"></p>
      </form>
      <?php include_once "../php/select_titles.php" ?>
      <?php include_once "../php/save_changes.php" ?>
      <div id="footer">
        <p>Copyright &copy; 2018 <em>Koвтyнeць O.B. &laquo;Beб-тexнoлoгiї&raquo;</em>
        &middot; Design: ІП-6х, <a href="http://asu.kpi.ua/" title="ACOI KПI">ACОIУ KПI</a></p>
      </div>
    </div>
  </body>
</html>
