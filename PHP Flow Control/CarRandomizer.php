<html>
<head>
    <title>Random Car</title>
</head>
<body>
    <form action="" method="post">
    <label for="cars">Enter Cars</label>
    <input type="text" name="cars" id="cars">
    <input type="submit" value="Sumbit Result">
    </form>
</body>
</html>
<?php
if(isset($_POST['cars'])):
    $input=htmlentities($_POST['cars']);
    $cars=explode(", ", $input);
    $color=['red', 'green', 'blue', 'yellow', 'white'];
    $quantities=[1,2,3,4,5];

?>
<table border="1">
    <tr>
        <th>Car</th><th>Color</th><th>Count</th>
    </tr>
    <?php
        foreach($cars as $car):
    ?>
    <tr>
        <td><?=$car ?></td>
        <td><?=$color[array_rand($color)]?></td>
        <td><?=$quantities[array_rand($quantities)]?></td>
    </tr>
    <?php endforeach; ?>

</table>
<?php endif; ?>