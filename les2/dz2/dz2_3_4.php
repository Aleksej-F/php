<?php


function sum($a=0,$b=0){
    return $a + $b;
}

function difference($a=0,$b=0){
    return $a - $b;
}

function composition($a=0,$b=0){
    return $a * $b;
}

function division($a=0,$b=0){
    return $a / $b;
}

function mathOperation($arg1, $arg2, $operation){
    echo $arg1 .  $operation . $arg2 . '=';
    switch($operation){
        case "+":
            return sum($arg1,$arg2);
            break;
        case "-":
            return difference($arg1,$arg2);
            break;
        case "*":
            return composition($arg1,$arg2);
            break;
        case "/":
            return division($arg1,$arg2);
            break;
        default:
        return "----";
    }
}

echo mathOperation(7,9, '+') . '<br>';
echo mathOperation(7,9, '-') . '<br>';
echo mathOperation(7,9, '*') . '<br>';
echo mathOperation(7,9, '/') . '<br>';