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

$statement= $pdo->prepare("SELECT * FROM buch");
if($statement->execute()){
    while($row=$statement->fetch()){
        echo $row["autor"]." ".$row["titel"]." ". $row["verlag"]." ".$row["jahr"]." ".$row["isbn"]."<br>";
    }
}else{
    echo "Datenbank-Fehler";
    echo $statement->errorInfo()[2];
}

?>
</body>
</html>
