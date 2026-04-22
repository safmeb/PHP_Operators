<?php
echo "Имя:" . PHP_EOL;
    $name = trim(fgets(STDIN)); // вводим имя пользователя
    $name = mb_convert_case($name, MB_CASE_TITLE, "UTF-8");// пусть будет сразу с верхним регистром
echo "Фамилия:" . PHP_EOL;
    $surname = trim(fgets(STDIN)); // вводим фамилию пользователя
    $surname = mb_convert_case($surname, MB_CASE_TITLE, "UTF-8");// пусть будет сразу с верхним регистром
echo "Отчество:" . PHP_EOL;
    $patronymic = trim(fgets(STDIN)); // вводим отчество пользователя
    $patronymic = mb_convert_case($patronymic, MB_CASE_TITLE, "UTF-8");// пусть будет сразу с верхним регистром
$fullName =$surname.' '.$name.' '. $patronymic; // конкатенируем полное имя
$fullName = mb_convert_case($fullName, MB_CASE_TITLE, "UTF-8"); // был эксперимент делаем первые буквы каждого из слов верхним регистром
echo "Полное имя: "."'". $fullName."'", PHP_EOL; //вывожу на экран полное имя
$fio = mb_substr($surname, 0, 1, 'UTF-8') . mb_substr($name, 0, 1, 'UTF-8') . mb_substr($patronymic, 0, 1, 'UTF-8'); // создаю переменную fio и присваиваю ей первый символ каждого их слов
$surnameAndInitials = $surname .' '.  mb_substr($name, 0, 1, 'UTF-8').'.'.mb_substr($patronymic, 0, 1, 'UTF-8').'.';
echo "Фамилия и инициалы: "."'". $surnameAndInitials."'", PHP_EOL; 
echo "Аббревиатура: "."'". $fio."'", PHP_EOL;  
