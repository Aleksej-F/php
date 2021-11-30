<?php
session_start();
$action = $_POST['action'];
$par1 = $_POST['par1'];
$par2 = $_POST['par2'];

print_r($action);

$_SESSION['rez'] = '';
$_SESSION['error'] ='';
switch($action){
    case "+":
        //$_SESSION['rez'] = $par1 + $par2;
        $rez = $par1 + $par2;
        break;
    case "-":
        $rez = $par1 - $par2;
        //$_SESSION['rez'] = $par1 - $par2;
        break;
    case "*":
        //$_SESSION['rez'] = $par1 * $par2;
        $rez = $par1 * $par2;
        break; 
    case "/":
        if ($par2==0) { 
            $error = "Деление на ноль не возможно";
        }else{ $_SESSION['rez'] = $par1 / $par2;
            $rez = $par1 / $par2;
        };
        break;  
    default:
        echo "Я не могу вычислять такие операции";    
    }
   header("Location: index.php?rez={$rez}&error={$error}&par1={$par1}&par2={$par2}&action={$action}");
   // header("Location: index.php");