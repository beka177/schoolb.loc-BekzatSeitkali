<?php
require_once "inc/lib.inc.php";
require_once "inc/data.inc.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Таблица умножения</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>

  <div id="header">
    <?php include "inc/top.inc.php"; ?>
  </div>

  <div id="content">
    <h1>Таблица умножения</h1>
    <?php drawTable(4, 6, '#f0f0f0'); ?>
  </div>

  <div id="nav">
    <?php include "inc/menu.inc.php"; ?>
  </div>

  <div id="footer">
    <?php include "inc/bottom.inc.php"; ?>
  </div>

</body>
</html>
