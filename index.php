<?php
echo "Имя:" . PHP_EOL;
    $name = trim(fgets(STDIN)); // вводим имя пользователя
    if (empty($name)) { // проверка на пустой ввод имени
        fwrite(STDERR, "Введите имя"); // вывыдим ошибку и завершаем работу
        exit(1);
    }
    $name = mb_convert_case($name, MB_CASE_TITLE, "UTF-8");// приводим первый символ к верхнему регистру
echo "Фамилия:" . PHP_EOL;
   $surname = trim(fgets(STDIN)); // вводим фамилию пользователя
if (empty($surname)) {
        fwrite(STDERR, "Введите фамилию");
        exit(1);
    }
    $surname = mb_convert_case($surname, MB_CASE_TITLE, "UTF-8");// пусть будет сразу с верхним регистром
echo "Отчество:" . PHP_EOL;
    $patronymic = trim(fgets(STDIN)); // вводим отчество пользователя
    $patronymic = mb_convert_case($patronymic, MB_CASE_TITLE, "UTF-8");// пусть будет сразу с верхним регистром
   if (empty($patronymic)) {
    fwrite(STDERR, "Введите отчество");
        exit(1);}

    $fullName = $surname.' '.$name.' '. $patronymic; 
    $surnameAndInitials = $surname .' '.  mb_substr($name, 0, 1, 'UTF-8').'.'.mb_substr($patronymic, 0, 1, 'UTF-8').'.';
    
echo "Полное имя: ".$fullName, PHP_EOL;
$fio = mb_substr($surname, 0, 1, 'UTF-8') . mb_substr($name, 0, 1, 'UTF-8') . mb_substr($patronymic, 0, 1, 'UTF-8');
echo "Фамилия и инициалы: ".$surnameAndInitials, PHP_EOL; 
echo "Аббревиатура: ".$fio, PHP_EOL; 
