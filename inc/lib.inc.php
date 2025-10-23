<?php
// Функция для таблицы умножения
function drawTable($cols, $rows, $color) {
  echo "<table border='1' width='400' cellspacing='0' cellpadding='5'>";
  for ($tr = 1; $tr <= $rows; $tr++) {
    echo "<tr>";
    for ($td = 1; $td <= $cols; $td++) {
      $value = $tr * $td;
      if ($tr == 1 || $td == 1) {
        echo "<td style='font-weight:bold; text-align:center; background-color:$color;'>$value</td>";
      } else {
        echo "<td>$value</td>";
      }
    }
    echo "</tr>";
  }
  echo "</table>";
}

// Функция для меню
function drawMenu($menu, $vertical = true) {
  echo "<ul>";
  foreach ($menu as $item) {
    if ($vertical) {
      echo "<li><a href='{$item['href']}'>{$item['link']}</a></li>";
    } else {
      echo "<li style='display:inline; margin-right:15px;'><a href='{$item['href']}'>{$item['link']}</a></li>";
    }
  }
  echo "</ul>";
}
?>
