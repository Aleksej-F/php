<!-- 4. Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания
 (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
Написать функцию транслитерации строк. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title></title>
</head>
<body>
    





<?php


$string = 'последние листы с нагих своих ветвей';

function translit($str){
    $alphabet = [
        'а'=>'a',
        'б'=>'b',
        'в'=>'v',
        'г'=>'g',
        'д'=>'d',
        'е'=>'e',
        'ё'=>'yo',
        'ж'=>'zh',
        'з'=>'z',
        'и'=>'i',
        'й'=>'j',
        'к'=>'k',
        'л'=>'l',
        'м'=>'m',
        'н'=>'n',
        'о'=>'o',
        'п'=>'p',
        'р'=>'r',
        'с'=>'s',
        'т'=>'t',
        'у'=>'u',
        'ф'=>'f',
        'х'=>'x',
        'ц'=>'cz',
        'ч'=>'ch',
        'ш'=>'sh',
        'щ'=>'shh',
        'ъ'=>'``',
        'ы'=>'y`',
        'ь'=>'`',
        'э'=>'e`',
        'ю'=>'yu',
        'я'=>'ya',
        // ' '=>'_'  //можно сразу менять пробелы на _
    ];

    $stlen = mb_strlen($str, 'UTF-8');
    for($i=0;  $i < $stlen; $i++) {
    $n =  mb_substr( $str, $i, 1, 'UTF-8' );
    $string1 .= isset( $alphabet[ "$n"])?$alphabet[ "$n"] : $n  ;
    }
    return $string1;
}
// echo $string;
// echo '<br>';
// echo translit($string);
?>

</body>
</html>