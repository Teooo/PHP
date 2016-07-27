<html>
<head>
    <title>String Modifier</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="input"/>
    <input type="radio" name="operation" value="Check Palindrome"/>Check Palindrome
    <input type="radio" name="operation" value="Reserve String"/>Reserve String
    <input type="radio" name="operation" value="Split"/>Split
    <input type="radio" name="operation" value="Hash String"/>Hash String
    <input type="radio" name="operation" value="Shuffle String"/>Shuffle String
    <input type="submit"/>
</form>
</body>
</html>
<?php
if(isset($_POST['input'],$_POST['operation'])){
    $input=htmlentities($_POST['input']);
    $operation=htmlentities($_POST['operation']);
    if($operation == 'Check Palindrome'){
        $inputLow =strtolower($input);
        $inputLowArr=str_split($inputLow);
        $reversedInput=array_reverse($inputLowArr);
        $output=implode($reversedInput,'');
        if($input == $output){
            echo "$input is Palindrome !";
        }else{
            echo "$input not is a Palindrome :(";
        }
    }elseif($operation =='Reserve String'){
        $inputArr=str_split($input);
        $output=array_reverse($inputArr);
        echo implode($output);
    }elseif($operation == 'Split'){
        $output=str_split(preg_replace("/[0-9,.!?]/"," ",$input));
        echo implode(" ",$output);
    }elseif($operation == 'Hash String'){
        echo crypt($input);
    }else{
        $arr=str_split($input);
        shuffle($arr);
        $output=implode($arr);
        echo $output;
    }
}
?>
