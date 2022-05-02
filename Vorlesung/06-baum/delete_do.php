<?php
session_start();
if(!isset($_SESSION["login"])){
    header("Location: login.html");
}
?>
<?php
if(!isset($_GET["id"])){
    die("Link-Fehler");
}
$pdo  =new PDO();
$statement = $pdo->prepare("DELETE FROM baum WHERE id=?");
if($statement->execute(array($_GET["id"]))){
    header('Location: index.php');
}else{
    echo "Datenbank-Fehler";
    echo $statement->errorInfo()[2];
}
