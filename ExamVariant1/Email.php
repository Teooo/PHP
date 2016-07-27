<?php
function generateHTMLMessage($recipien,$subject,$body){
    $message="<p class='recepien'>".$recipien .
        "</p><p class='subject'". $subject. '</p>'.
        "<p class='message'=".$body .'</p>';
}
$recipien=$_GET['recipient'];
$subject=$_GET['subject'];
$body=$_GET['body'];
$encryptKey=$_GET['key'];
$formattedMessage=generateHTMLMessage($recipien,$subject,$body);
function encrypt($key,$message){
    $encrypted='|';
    for($i =0,$j=0;$i<strlen($message);$i++,$j++){
        $letterCode=ord($message[$i]);
        if($j == strlen($key)){
            $j=0;
        }
        $keyCode=ord($key[$j]);
        $hexCode=dechex($letterCode*$keyCode);
        $encrypted .=$hexCode . '|';
    }
    return $encrypted;
}
$encryptedMessage=encrypt($encryptKey,$formattedMessage);
echo $encryptedMessage;
?>