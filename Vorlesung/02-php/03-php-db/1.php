<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$pdo = new PDO('mysql:: host=mars.iuk.hdm-stuttgart.de; dbname=dbname', 'username', 'passwort', array('charset' => 'utf8'));
$statement= $pdo->prepare("SELECT * FROM hunde");
$statement->execute();
while($row=$statement->fetch()) {
    echo $row["name"] . " ". $row["futter"]."<br>";
}
?>
</body>
</html>