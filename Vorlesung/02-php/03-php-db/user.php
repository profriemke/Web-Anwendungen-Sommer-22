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
$pdo=new PDO('mysql:: host=mars.iuk.hdm-stuttgart.de; dbname=u-gurzki', 'gurzki', 'iiquieg8Po', array('charset'=>'utf8'));
$statement = $pdo->prepare("SELECT * FROM usser");
if($statement->execute()) {
    echo $statement->rowCount();
    while ($row = $statement->fetch()) {
        echo $row["vorname"] . " " . $row["email"] . "<br>";
    }
}   else {
    echo $statement->errorInfo()[2];
   // var_dump($statement->errorInfo());
    echo $statement->queryString;
    die("Datenbank Fehler");
}
?>

</body>
</html>