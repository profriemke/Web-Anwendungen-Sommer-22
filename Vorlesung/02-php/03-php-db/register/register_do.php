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
$statement=$pdo->prepare("INSERT INTO user (login, password, email, vorname, nachname) VALUES(?,?,?,?,?)");
if($statement->execute(array(htmlspecialchars($_POST["login"]), htmlspecialchars($_POST["password"]), htmlspecialchars($_POST["email"]), htmlspecialchars($_POST["vorname"]), htmlspecialchars($_POST["nachname"])))){
    echo "hat geklappt";
}else{
    echo $statement->errorInfo()[2];
}


?>
</body>
</html>
