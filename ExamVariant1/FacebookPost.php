<?php
date_default_timezone_set("Europe/Sofia");
$text=$_GET['text'];
$posts=preg_split("/[/[\s]+]+/",$text,-1,PREG_SPLIT_NO_EMPTY);

foreach($posts as $post){

    $part = preg_split("/\s*;\s*", $post);
    $name = trim($part[0]);
    $date = trim($part[1]);
    $dateAsInt=strtotime($date);
   $dateString= date("j F Y",$dateAsInt);
    $post = trim($part[2]);
    $likes = trim($part[3]);
    if($part[4]){
    $comments =explode("/",$part[4]);
    }
    renderHTNL($name.$date,$post,$like,$comments);
}
function renderHTML($name,$date,$post,$like,$comments){
    $html="";
    $html.="<article>";
    $html.="<head>";
    $html .="<span>$name</span>";
    $html.="<time>$date</time>";
    $html .="</header>";
    $html.="<main><p>$post</p></main>";
    $html .="<footer><div class=\"like\">$like people like this</div>";
    if($comments){
        $html.="<div class=\"comments\"";
        foreach($comments as $comment){
            $comment=htmlentities($comment);
            $html.="<p>$comment</p>";
        }


    }
}