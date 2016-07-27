<?php
$text=$_GET['text'];
$minFontSize=$_GET['minFontSize'];
$currentSize=$minFontSize;
$step=$_GET['step'];
$increment=true;
$maxFontSize=$_GET['maxFontSize'];
for($i= 0;$i <strlen($text);$i++) {
    $char = $text[$i];
    $isLetter = ctype_alpha($char);
    $asci = ord($char);

    if ($currentSize > $maxFontSize) {
        $asd = false;
    }
    if ($currentSize < $maxFontSize) {
        $asd = true;
    }
    if ($asci % 2 == 0) {
        echo "<span style='font-size:$currentSize;text-decoration:line-through;'>$char</span>";

    } elseif ($asci % 2 != 0) {
        echo "<span style='font-size:$currentSize;'>$char</span>";
    }
    if ($currentSize <= $minFontSizesize) {
        $currentSize += $step;
        $increment = true;
    }
    elseif ($currentSize > $minFontSize && $currentSizeSize < $maxFontSize){
        if ($increment == true) {
            $currentSize += $step;
        } else {
            $currentSize -= $step;
        }
    }
    else {
        $currentSize -=$step;
        $increment = false;
    }
}