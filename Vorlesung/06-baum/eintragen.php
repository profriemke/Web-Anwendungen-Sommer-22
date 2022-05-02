<?php
session_start();
if(!isset($_SESSION["login"])){
    header("Location: login.html");
}

if(!isset($_POST["art"]) | !isset($_POST["hoehe"]) | !isset($_POST["standort"])){
    die("Formular-Fehler");
}

$pdo  =new PDO();
$statement = $pdo->prepare("INSERT INTO baum (art, hoehe, standort) VALUES (?, ?, ?)");

if($statement->execute(array(htmlspecialchars($_POST["art"]), htmlspecialchars($_POST["hoehe"]), htmlspecialchars($_POST["standort"])))){
    header('Location: index.php');
}else{
    echo "Datenbank-Fehler";
    echo $statement->errorInfo()[2];
}
