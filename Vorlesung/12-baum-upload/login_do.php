<?php
session_start();
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
include "db.php";

$statement=$pdo->prepare("SELECT * FROM user WHERE login=:login");
$statement->bindParam(":login", $_POST["login"]);

$statement->execute();
if($row=$statement->fetch()){
    //user existiert und password richtig
    if(password_verify($_POST["password"], $row["password"])) {
        echo "Herzlich Willkommen!";
        $_SESSION["login"] = $row["login"];
        echo "<a href='index.php'>zur Startseite</a>";
    }else{
        echo "Du kommst hier nicht rein";
    }
}else{
    // user existiert nicht oder password falsch
    echo "Du kommst hier nicht rein!";
}
?>
</body>
</html>
