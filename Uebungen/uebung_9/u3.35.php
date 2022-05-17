<?php
//echo date('Y-m-d H:i:s');
//echo date('d.m.Y H:i');

$pdo=new PDO();

$statement=$pdo->prepare("INSERT INTO checkin (name,zeit) VALUES (?, NOW())");
$statement->execute(array($_POST["name"]));

$statement=$pdo->prepare("SELECT * FROM checkin");
$statement->execute();
while($row=$statement->fetch()){
    echo $row["name"]."   ".date('d.m.y H:i:s', strtotime($row['zeit']))."<br />";
}