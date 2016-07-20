<?php
/**
* Функция генерации случайной строки
* 
* @param type $length Длина строки
* @return type Случайно сгенерированная строка
*/
function str_random($length)
{
    $string = '';

    while (($len = strlen($string)) < $length) {
        $size = $length - $len;

        $bytes = random_bytes($size);

        $string .= substr(str_replace(['/', '+', '='], '', base64_encode($bytes)), 0, $size);
    }

    return $string;
}