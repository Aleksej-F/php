<?php 

$a = 10;
$b = 20;

function calculation($a=0,$b=0){
    
    if(isEven($a) && isEven($b)){
        echo  $a . ' - ' . $b . ' = '; 
        return  $a-$b;    
    };
    if(!isEven($a) && !isEven($b)){
        echo  $a . ' * ' . $b . ' = '; 
        return $a*$b;    
    };
    echo  $a . ' + ' . $b . ' = '; 
    return  $a + $b;
    
}

function isEven($x){
    return $x > 0;
}
echo calculation(rand(-100,100), rand(-100,100)) . '<br>' ;
echo calculation(rand(-100,100), rand(-100,100)) . '<br>';
echo calculation(rand(-100,100), rand(-100,100)) . '<br>';
echo calculation(rand(-100,100), rand(-100,100)) . '<br>';