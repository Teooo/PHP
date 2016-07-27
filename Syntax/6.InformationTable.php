<?php
$name = 'Gosho';
$phonoNumber = '0882-321-423';
$age =24;
$address ='Hadji Dimitur';
?>
<html>
<head>
    <title>Info Table</title>
</head>
<body>
<table border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr>
    <td>Name</td>
    <td>
        <?php echo $name;?>
    </td>
</tr>
<tr>
    <td>Phone Number</td>
    <td>
        <?php echo $phonoNumber ?>
    </td>
</tr>
<tr>
    <td>Age</td>
    <td>
        <?php echo $age ?>
    </td>
</tr>
<tr>
    <td>Address</td>
    <td>
        <?php echo $address ?>
    </td>
</tr>
</tbody>
</table>
</body>
</html>