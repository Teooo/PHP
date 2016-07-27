<?php

$text=$_GET["text"];
$red=toHex($_GET["red"]);
$blue=toHex($_GET["blue"]);
$green=toHex($_GET["green"]);
$nth=$_GET["nth"];

$color="#".$red.$green.$blue;
echo "<p>";

for($i=0, $count=1; $i<strlen($text); $i++, $count++){
    $char=htmlspecialchars($text[$i]);
    if($count % $n ==0){
        echo "<span style=\"color: $color\">$char</span>";
    }else{
        echo $char;
    }
}
echo "</p>";
function toHex($number){
    $hex=dechex($number);
    if(strlen($hex)<2){
        $hex ="0". $hex;
    }
    return $hex;
}
