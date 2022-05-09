<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>
<body>
<h1>Meine Bücher</h1>
<?php
$pdo=new PDO('mysql:: host=mars.iuk.hdm-stuttgart.de; dbname=u-gurzki', 'gurzki', '$jhsfnb4BBVsafd', array('charset'=>'utf8'));

$statement= $pdo->prepare("INSERT INTO buch (autor, titel, verlag, jahr, isbn) VALUES ('Frank Sonne', 'Sonnenbaden mit Frank','Sonnebad',1990, 123454321)");
if($statement->execute()){
  echo "Erfolgreich.".$pdo->lastInsertId();
}else{
    echo "Datenbank-Fehler";
    echo $statement->errorInfo()[2];
}

?>
</body>
</html>
