
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<!-- *Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К». -->

<?php

$areas = [
   'Московская область' => [ 'Москва', 'Зеленоград', 'Клин', 'KDDDrtrt' ],
   'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
   'Рязанская область'=> ['Рязань', 'Касимов', 'Скопин', 'Сасово'],
];

foreach($areas as $are => $cities){
    $areasPrint='';
    foreach($cities as $cit){
       
         if (strpos($cit, 'К') === 0) {
             $areasPrint .= "$cit, ";
        }
        
        // это работает только с латинским шрифтом. Почему?
        // echo substr($cit, 0, 1);
        // if (substr($cit, 0, 1) ==='К') {
        //     echo 
        //     $areasPrint .= "$cit, ";
        // }
    }
    // $areasPrint .=  implode(", ",$cities) ;
    echo "$are: <br> $areasPrint <br>";
}