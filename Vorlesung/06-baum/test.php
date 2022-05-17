<?php
include "../db.php";
if(empty($_POST["air"]) | empty($_POST["temp"])| empty($_POST["token"])){
    die("err 012");
}
if($_POST["token"] != "jlk3234dsjsfdljlkasdÄÖdasdk7324cdsAVJ") {
    die("err 013");

}
    $statement= $pdo-prepare("UPDATE air SET air=:air, temp=:temp, date=now()");
    $air=htmlspecialchars($_POST["air"]);
    $temp=htmlspecialchars($_POST["temp"]);
    $statement->bindParam(":air",$air);
    $statement->bindParam(":temp",$temp);
    if(!$statement->execute()){
        echo "err";
    }
