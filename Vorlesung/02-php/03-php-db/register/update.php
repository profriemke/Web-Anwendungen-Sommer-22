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
require "../db.php";
$nachname="Riemke";
$id=1;
$statement=$pdo->prepare("UPDATE user SET nachname=:nachname WHERE id=:id");
$statement->bindParam(":nachname", $nachname);
$statement->bindParam(":id",$id);
if($statement->execute()){
    echo "erfolgreich";
}else{
    echo "nicht";
}

?>
</body>
</html>
