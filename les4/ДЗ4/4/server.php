<?php
$path = "big/".$_FILES['photo']['name'];
// $path = "files/{$_FILES['photo']['name']}";

//print_r($_FILES);

// Content type
header('Content-Type: image/jpg');

// Get new sizes
list($width, $height, $type) = getimagesize($path);
$newwidth = 60;
$newheight = 60;

// Load
$thumb = imagecreatetruecolor($newwidth, $newheight);
$source = imagecreatefromjpeg($path);

// Resize
imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

// Output
imagejpeg($thumb,'small/'.$_FILES['photo']['name']);

if(move_uploaded_file($_FILES['photo']['tmp_name'],$path)){
    echo $_FILES['photo']['name']." успешно загружен!";
}