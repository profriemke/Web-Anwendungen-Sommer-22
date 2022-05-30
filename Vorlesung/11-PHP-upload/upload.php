<?php

if(empty($_FILES["datei"])){
    die("Problem in der Datei");
}
if(empty($_FILES["datei"]["name"])){
    die("Problem in der Datei");
}
$ext= pathinfo($_FILES["datei"]["name"], PATHINFO_EXTENSION);
if($ext!="jpg"){
    die("falscher Dateityp");
}
if($_FILES["datei"]["size"]>100000){
    die("Datei zu groß");
}
if(move_uploaded_file($_FILES["datei"]["tmp_name"], "/home/gurzki/public_html/neuerupload/".$_FILES["datei"]["name"])){
    echo "upload erfolgreich";
}else{
    echo "upload Problem";
}
