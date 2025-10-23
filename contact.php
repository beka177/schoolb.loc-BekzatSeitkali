<?php

?>
<!-- Область основного контента -->
<?php
  $size = ini_get("post_max_size"); 
  $last = strtolower($size[strlen($size)-1]); 
  $size = (int)$size; 
  switch($last) {
    case 'g': $size *= 1024;
    case 'm': $size *= 1024;
    case 'k': $size *= 1024;
  }
?>
<h3>Адрес</h3>
<p>123456 Москва, Малый Американский переулок 21</p>
<h3>Задайте вопрос</h3>
<form action='' method='post'>
  <label>Тема письма: </label><br />
  <input name='subject' type='text' size="50" /><br />
  <label>Содержание: </label><br />
  <textarea name='body' cols="50" rows="10"></textarea><br /><br />
  <input type='submit' value='Отправить' />
</form>
<p>Максимальный размер отправляемых данных <?= $size ?> байт.</p>
<!-- Область основного контента -->
