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
<a href="logout.php">ausloggen</a>
<h1>Meine Bäume</h1>
<?php
$pdo  =new PDO();
$statement = $pdo->prepare("SELECT * FROM baum");
if($statement->execute()){
    while($row = $statement->fetch()){
        echo "Art: ".$row["art"]."<br>";
        echo "Höhe: ".$row["hoehe"]."<br>";
        echo "Standort: ".$row["standort"]."<br>";
        echo "<a href='aendern.php?id=".$row["id"]."'>ändern</a> ";
        echo "<a href='delete_do.php?id=".$row["id"]."'>delete</a><br>";
        echo "<br>";
    }
}else{
    echo "Datenbank-Fehler!";
    echo $statement->errorInfo()[2];
}

?>
<h2>Neuen Baum pflanzen</h2>
<form action="eintragen.php" method="post">
    <input type="text" name="art" required><br>
    <input type="text" name="hoehe" required><br>
    <textarea name="standort" rows="3" cols="20" required></textarea><br>
    <input type="submit">
</form>
</body>
</html>