<html>
<head>
    <title>Form Data</title>
</head>
<body>
<form action="" method="get">
    <input type="text" placeholder="Name" name="name"/><br/>
    <input type="text" placeholder="Age" name="age"/><br/>
    <input type="radio" name="Sex" value="Male"/>Male<br/>
    <input type="radio" name="Sex" value="Female"/>Female<br/>
    <input type="submit"/>
</form>
</body>
</html>
<?php
if(isset($_GET["name"],$_GET["age"],$_GET["Sex"])){
    $name=htmlspecialchars($_GET["name"]);
    $age=htmlspecialchars($_GET["age"]);
    $sex=htmlspecialchars($_GET["Sex"]);
    echo "My name is $name.I am $age years old.I am $sex.<br>";
}
?>