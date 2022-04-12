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
$pdo=new PDO();

$statement=$pdo->prepare("SELECT * FROM user WHERE password=:password AND login=:login");
$statement->bindParam(":login", $_POST["login"]);
$statement->bindParam(":password", $_POST["password"]);
$statement->execute();
if($row=$statement->fetch()){
    //user existiert und password richtig
    echo "Herzlich Willkommen!";
    $_SESSION["login"]=$row["login"];
}else{
    // user existiert nicht oder password falsch
    echo "Du kommst hier nicht rein!";
}
?>
</body>
</html>
