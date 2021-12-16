<?php
    include "./config/config.php";

function productLoad($img) {
    $sql = "select * from product";
    $res = mysqli_query($connect,$sql);
    return $res;
};
       
