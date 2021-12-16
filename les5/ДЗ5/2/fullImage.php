<?php
include "config.php";

$action = $_GET['action'];
$id = $_GET['id'];
//$count= $_GET['count'] + 1 ;
//echo $id;
if($action == "count"){
   // $count= $_GET['count'] + 1 ;
    $sql = "UPDATE images SET count=count+1 where id=$id";
    
     if(mysqli_query($connect,$sql)){
        $query = "select count from images where id=$id";
        $res = mysqli_query($connect,$query);
        $title = mysqli_fetch_assoc($res)['count'];
       
    }
}
?>

<link rel="stylesheet" href="css.css" type="text/css" />
<div class="container container-img">


    <h1>Исходное изображение</h1>
    <div class="container container-img">
        <img src="big/<?= $_GET['img']?>" alt="" width="800"  height="600">
        <p>колличество просмотров: <?=$title?> </p>
    </div>
    
    <a href="<?= $_SERVER['HTTP_REFERER']?>">назад</a>
</div>