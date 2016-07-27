<?php

    $json=$_GET['jsonTable'];
    $data=json_decode($json);
    for($i =0; $i <count($data);$i++){
        for($j=0;$j<count($data[0]);$j++){
            $currentChar=$data[$i][$j];

            if($data[$i][$j+1]==$currentChar){
                $k=0;
                while(($data[$i][$j+k]==$currentChar) && ($j+$k<count($data))){
                    $l=0;
                    while($data[$i+$l][$j] == $data[$i+$l][$j+$k])&&{
                        if(isClosingRectangle($i+$l,$j,$j+$k)){
                            echo 'rectangle found';
                        }

                    }
                }
            }
        }
    }
function isClosingRectangle($data,$row,$startCol,$endCol,$ch){
    for($i=$startCol;$i<$endCol;$i++){
        if($data[$row][$i]!=$ch){
            return false;
        }
    }
    return true;
}
