<!-- 
3. *[ для тех, кто изучал JS-1 ] При клике по миниатюре нужно показывать полноразмерное изображение в модальном окне -->
<?php include "function.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css" type="text/css" />
    <title>Document</title>

</head>
<body>
<div class="container" id="catalog">
    <?php
        echo smallImgLoad('small')  
    ?>
</div>
<script src="sc.js"></script>
</body>
</html>

