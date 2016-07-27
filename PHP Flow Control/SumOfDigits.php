<html>
<head>
    <title>Sum Digits</title>
</head>
<body>
    <form action="" method="post">
    <label for="input">Input String:</label>
    <input type="text" name="input">
    <input type="submit">
    </form>
</body>
</html>
<?php
if(isset($_POST['input'])) :
    ?>
<table border="1">
    <?php
    $num=explode(' ,',$_POST['input']);
    foreach($num as $n):
        if(!is_numeric($n)):
    ?>
    <tr><td><?=$n?></td><td>I Can sum That</td></tr>
    <?php
        continue;
        endif;
        $sum=array_sum(str_split($n));
    ?>
    <tr><td><?=$n?></td><td><?=$sum ?></td></tr>
    <?php
    endforeach;
    ?>
</table>
<?php
endif;
?>