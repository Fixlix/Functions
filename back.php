<?php

/* 
 * Created by Alex Fixlix
 * Author web-site: http://pacificsky.ru
 */

$back = $_SERVER['HTTP_REFERER']; // Получаем URL от куда пришел посетитель

// Создаем страницу с ссылкой перехода на предыдущую страницу
echo "
<html>
    <body>
    <a href='{$back}'>Назад</a>
   </body>
</html>";