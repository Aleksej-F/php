<?php
session_start();
include "./config/config.php";
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

    case "clearBasket":
        $sql = "DELETE FROM `basket` WHERE `basket`.`id_user` = $idUser;";
        $res = mysqli_query($connect,$sql) or die("Error: ".mysqli_error($connect));
       
        header("Location: shoppingCart.php?");
    break;  
    
    case "logIn":
        
        $mail = $_POST['mail'] ? strip_tags($_POST['mail']) : "";
        $salt = "sldfjsklfdj23lfd0,.sd";
        $pass = trim(strip_tags($_POST['pass']));
        $pass = $salt.md5($pass).$salt;
        
        $sql = "select id, rights from user where mail='$mail' and password='$pass'";
        $res = mysqli_query($connect,$sql) or die("Error: ".mysqli_error($connect));
        $user = mysqli_num_rows($res);
       // print_r($user);
        if(mysqli_num_rows($res)){
           
            $_SESSION['userId'] = $user['id'];
            $_SESSION['userRights'] = $user['rights'];
             setcookie("userId",$user['id']);
             setcookie("userRights",$user['rights']);
            echo "true";
        }else {
            echo "false";
        }
    break; 



     
    default:
        echo "Я не могу такие операции";    
}

  