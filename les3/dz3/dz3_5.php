<!-- Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку. -->
<?php
$str = "Последние листы с нагих своих ветвей";

function replacingSpaces($a){
        $str1 = explode(" ", $a);
    return implode("_", $str1);
};

// echo replacingSpaces($str);
