<?php

function smallImgLoad($img) {
    $files = scandir($img);
        //print_r($files);
        $blok='';
        for($i=2;$i < count($files);$i++){
            $blok .=  "<div class='container-blok' data='$files[$i]'>
                <img width='150' src='small/$files[$i]' alt='' data='$files[$i]'>
            </div>";
        
        };

    return $blok;
       
};
       
