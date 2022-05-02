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
if(!isset($_GET["id"])){
    die("Link-Fehler");
}
$pdo  =new PDO();
$statement = $pdo->prepare("SELECT * FROM baum WHERE id=?");
if($statement->execute(array($_GET["id"]))){
    $row = $statement->fetch();
    ?>
<form action="aendern_do.php" method="post">
    <input type="text" name="art" value="<?php echo $row["art"] ?>" required><br>
    <input type="text" name="hoehe" value="<?php echo $row["hoehe"] ?>" required><br>
    <textarea name="standort" rows="3" cols="20" required><?php echo $row["standort"] ?></textarea><br>
   <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
    <input type="submit">
</form>
<?php
}else{
    echo "Datenbank-Fehler";
    echo $statement->errorInfo()[2];
}

?>


</body>
</html>