<?php

$year = (int)$_POST['year'];

if (
    is_int($year) && $year > 0
) {
    $rest = $year % 4;
    if ($rest > 0) {
        echo 'НЕТ';
    } else {
        echo 'ДА';
    }
} else {
    echo 'ОШИБКА ВО ВХОДНЫХ ДАННЫХ';
}