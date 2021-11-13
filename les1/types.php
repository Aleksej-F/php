<?php

//$x = 10;
//var_dump($x);
//
//$y = 25.345;
//var_dump($y);
//$price = rand(1000,5000);

//$str = "Проект \"САОС\" - самый успешный проект компании!";
//$str = "Проект \"САОС\" - самый успешный проект компании!<br>Стоимость составляет $price у.е.";
//
//echo $str;

//Преобразование типов данных

//$a = 10;
//$b = $a + "5";
//echo $b;

//$a = 25.23535;
//$b = (int)$a;
//echo $b;
//
//$age = "7<script>alert(5)</script>";
//echo "Ваш возраст ".(int)$age;

//Тип данных Boolean (true - истина, false - ложь)

//echo (25 === "25");//false

//Логические операторы

$day = date("w");//номер дня недели
$isWorkDay = !($day > 0 && $day < 6); // false
$isWeekend = $day == 6 || $day == 0;//false
$x = !$isWeekend;//true










