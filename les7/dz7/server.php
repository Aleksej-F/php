<?php
include "config.php";
// session_start();
$action = $_POST['action'];
$reviews = $_POST['reviews'];
$id = $_POST['idProduct'];
$idUser = $_POST['idUser'];
$count = $_POST['count'];
//print_r($id);
//print_r($reviews);
// $_SESSION['rez'] = '';
// $_SESSION['error'] ='';
switch($action){
    case "отправить":
        
        $sql = "INSERT INTO reviews  VALUES (NULL, '1', '$reviews', $id)"; 
        $res = mysqli_query($connect,$sql);
        
        header("Location: details.php?id=$id");
        if($res){
            header("Location: details.php?id=$id");
        }else {
            echo "Ошибка записи!".$id;
        }
        break;
    case "basket":
        $sql = "select id from basket where id_user=$idUser and id_product=$id;";
        $res = mysqli_query($connect,$sql) or die("Error: ".mysqli_error($connect));
        if(mysqli_num_rows($res)){
            $sql = "UPDATE `basket` SET `count` = count+1 WHERE id_user=$idUser and id_product=$id;";
            $res = mysqli_query($connect,$sql);
            //echo "колличество товаров увеличено!";
        }else {
            $sql = "INSERT INTO `basket` (`id`, `id_user`, `id_product`, `count`) VALUES (NULL, $idUser, $id, 1)";
            $res = mysqli_query($connect,$sql);
           // echo "товар добавлен в корзину";
        }
        header("Location: index.php?id=$id");
    break;    

    case "delBasket":
        $sql = "DELETE FROM `basket` WHERE id_user=$idUser and id_product=$id";
        $res = mysqli_query($connect,$sql) or die("Error: ".mysqli_error($connect));
        header("Location: shoppingCart.php?id=$id");
        //header("Location:templates/bascet.php");
    break;  
    
    case "countBasket":
        $sql = "select id from basket where id_user=$idUser and id_product=$id;";
        $res = mysqli_query($connect,$sql) or die("Error: ".mysqli_error($connect));
        if(mysqli_num_rows($res)){
            $sql = "UPDATE `basket` SET `count` = $count WHERE id_user=$idUser and id_product=$id;";
            $res = mysqli_query($connect,$sql);
            //echo "колличество товаров изменено!";
        }else {
            $sql = "INSERT INTO `basket` (`id`, `id_user`, `id_product`, `count`) VALUES (NULL, $idUser, $id, 1)";
            $res = mysqli_query($connect,$sql);
           // echo "товар добавлен в корзину";
        }
        header("Location: shoppingCart.php?id=$id");
    break;    

     
    default:
        echo "Я не могу такие операции";    
    }
   //header("Location: index.php?rez={$rez}&error={$error}&par1={$par1}&par2={$par2}&action={$action}");
   // header("Location: index.php");
    //header( $_SERVER['HTTP_REFERER']);

 //   INSERT INTO `basket` (`id`, `id_user`, `id_product`, `count`) VALUES (NULL, '1', '1', '1');  
