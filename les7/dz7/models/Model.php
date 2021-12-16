<?php
include "./config/config.php";
//проверка email пользователя
function getUserRegMail($connect, $mail){
    $sql = "SELECT id FROM `user` WHERE mail='$mail'";
    $res = mysqli_query($connect,$sql);
   // print_r(mysqli_num_rows($res));
    if(!$res) {
        die(mysqli_error($connect));
    }
    return mysqli_num_rows($res);
};
//добавить нового пользователя
function getUserNew($connect,$name,$surname,$phone,$mail,$pass){
    $sql = "INSERT INTO `user` (`id`, `name`, `surname`, `password`, `phone`, `mail`, `rights`) VALUES (NULL, '$name','$surname','$pass','$phone','$mail','user')"; 
    $res = mysqli_query($connect,$sql);
    //print_r(($res));
    if(!$res) {
        die(mysqli_error($connect));
    }
    return mysqli_fetch_assoc($res);
};