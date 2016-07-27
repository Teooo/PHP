<?php
Function doubleWordLetters($word){
    $double='';
    for($i=0;$i<strlen($word);$i++){
        $double.=$word[$i].$word[$i];
    }
}
$text=htmlspecialchars($_GET['text']);
$word='';
for($i=0 ; $i<strlen($text);$i++){

   if(ctype_alpha($text[$i])){
       $word.=$text[$i];
    }
    else{
        if(ctype_upper($word)){
            $rev=strrev($word);
            if($rev == $word){
                $word= doubleWordLetters($rev);
            }
        }
        if($word!=""){
            $result .=$word;
            $word='';
        }

        $result .=$text[$i];
    }
}
if(ctype_upper($word)){
    $rev=strrev($word);
    if($rev == $word){
        $word= doubleWordLetters($rev);
    }
    $result .=$word;
}

echo '<p>'.$result.'</p>';