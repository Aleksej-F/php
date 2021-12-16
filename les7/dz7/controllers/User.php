<?php

include "./models/Model.php";


if(isset($_POST['register'])){//если нажата кнопка зарегистрировать
    
    $mail = trim(strip_tags($_POST['mail']));
        // print_r($mail);
        // print_r("</br>");
    $user = getUserRegMail($connect,$mail);
    
    if($user){
        $message = "Пользователь с указанным email уже зарегистрирован!";
    }else{
        
        $name = trim(strip_tags($_POST['name']));
        $surname = trim(strip_tags($_POST['surname']));
        $phone = trim(strip_tags($_POST['phone']));
        $salt = "sldfjsklfdj23lfd0,.sd";
        $pass = trim(strip_tags($_POST['pass']));
        $pass = $salt.md5($pass).$salt;
        
        $date = getUserNew($connect,$name,$surname,$phone,$mail,$pass);
        $id = $data['id'];
        $message = "вы успешно зарегистрированы!";
        header("Location: checkout.php?");
    }
}
