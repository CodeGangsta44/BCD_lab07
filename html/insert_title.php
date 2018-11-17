<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" href="../css/style.css" type="text/css" />
    <link rel="stylesheet" href="../css/add_title.css" type="text/css" />
    <title>Редагування контенту</title>
  </head>
  <body>
    <div id="content">
      <h1>Редагування контенту</h1>
      <ul id="menu">
        <li><a href="../index.php">головна</a></li>
        <li><a href="./#">додати</a></li>
        <li><a href="./general.php">загальне</a></li>
        <li><a href="./edit.php">редагувати</a></li>
      </ul>
      <form action="#" method="post">
        <p id="create_title"><b>Сворення нової статті</b></p>
        <p>Заголовок:</p>
        <p><textarea id="title"
            name="title"
            rows="1"></textarea></p>
        <p>Текст:</p>
        <p><textarea id="title_text"
            name="text"
            rows="15"></textarea></p>
        <p><input type="submit" value="Підтвердити"></p>
      </form>
      <?php include_once "../php/add_title.php"; ?>
      <div id="footer">
        <p>Copyright &copy; 2018 <em>Koвтyнeць O.B. &laquo;Beб-тexнoлoгiї&raquo;</em>
        &middot; Design: ІП-6х, <a href="http://asu.kpi.ua/" title="ACOI KПI">ACОIУ KПI</a></p>
      </div>
    </div>
  </body>
</html>
