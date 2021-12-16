<?php
    include "config.php";

   


function smallImgLoad($img) {
    $sql = "select * from images";
    $res = mysqli_query($connect,$sql);
        
    $blok='';
        while($data = mysqli_fetch_assoc($res)){
            $blok .=  "<div class='container-blok'>
                <a href='fullImage.php?img={$data['title']}'><img width='150' src='small/{$data['title']}' alt=''></a>
            </div>";
        
        };

    return $blok;
       
};
       
