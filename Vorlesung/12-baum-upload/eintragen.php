<?php
session_start();
if(!isset($_SESSION["login"])){
    header("Location: login.html");
}

if(!isset($_POST["art"]) | !isset($_POST["hoehe"]) | !isset($_POST["standort"]) | !isset($_FILES["bild"])){
    die("Formular-Fehler");
}
$ext= pathinfo($_FILES["bild"]["name"], PATHINFO_EXTENSION);

if(strtolower($ext)!="jpg"){
    die("nur jpg!");
}
if($_FILES["bild"]["size"]>2000000){
    die("zu groß");
}

$c='1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$c.='abcdefghijklmnopqrstuvwxyz';
$string='';
for ($i=0; $i<20; $i++) {
    $index=rand(0, strlen($c) - 1);
    $string.=$c[$index];
}
echo $string;
$string.=".jpg";
if(!move_uploaded_file($_FILES["bild"]["tmp_name"], "/home/gurzki/public_html/neuerupload/".$string)){
    die("Kopierfehler");
}
include "db.php";
$statement=$pdo->prepare("INSERT INTO baum(art,hoehe, standort, bild) VALUES (?,?,?,?)");
//$statement=$pdo->prepare("INSERT INTO baum (art, hoehe, standort, bild) VALUES (?, ?, ?, ?)");
if($statement->execute(array(htmlspecialchars($_POST["art"]), htmlspecialchars($_POST["hoehe"]), htmlspecialchars($_POST["standort"]),$string))){
    header('Location: index.php');
}else{
    echo "Datenbank-Fehler";
    echo $statement->errorInfo()[2];
}
