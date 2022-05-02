<?php
session_start();
if(!isset($_SESSION["login"])){
    header("Location: login.html");
}
?>
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
if(!isset($_POST["art"]) | !isset($_POST["hoehe"]) | !isset($_POST["standort"]) | !isset($_POST["id"])){
    die("Formular-Fehler");
}


$pdo  =new PDO();
$statement = $pdo->prepare("UPDATE baum SET art=:art, hoehe=:hoehe, standort=:standort WHERE id=:id");
$art=htmlspecialchars($_POST["art"]);
$hoehe=htmlspecialchars($_POST["hoehe"]);
$standort=htmlspecialchars($_POST["standort"]);
$id=htmlspecialchars($_POST["id"]);
$statement->bindParam(":art", $art);
$statement->bindParam(":hoehe", $hoehe);
$statement->bindParam(":standort", $standort);
$statement->bindParam(":id", $id);

if($statement->execute()){
    echo "Änderungen erfolgreich";
    echo "<br><a href='index.php'>zur Startseite</a>";
}else{
    echo "Datenbank-Fehler";
    echo $statement->errorInfo()[2];
}

?>
</body>
</html>