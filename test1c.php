<?php

    
    $text = $_POST['text']; // Присваиваем переменной $text значение из массива POST
    $f = fopen('file.txt', 'a+'); // Открываем файл
    fwrite($f, "Данные из 1С: " . $text . "\n"); // Записываем данные
    fclose($f); // Закрываем файл
    

?>