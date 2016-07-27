<?php
$str ='Hello';
printType($str);
$int=15;
printType($int);
$float=1.234;
printType($float);
$arr=[1,2,3];
printType($arr);
$obj=(object)[2.3];
printType($obj);
function printType($variable){
    if(is_numeric($variable)){
        var_dump($variable);
    }else{
        echo gettype($variable);
    }
    echo "<br/>";
}
?>