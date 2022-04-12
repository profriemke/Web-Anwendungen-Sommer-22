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
$login= htmlspecialchars($_POST["login"]);
$password= htmlspecialchars($_POST["password"]);
$email= htmlspecialchars($_POST["email"]);
$vorname= htmlspecialchars($_POST["vorname"]);
$nachname= htmlspecialchars($_POST["nachname"]);

require "../db.php";
$statement=$pdo->prepare("INSERT INTO user (login, password, email, vorname, nachname) VALUES(:login, :password, :email, :vorname, :nachname)");


$statement->bindParam(":login", $login );
$statement->bindParam(":password", $password );
$statement->bindParam(":email", $email );
$statement->bindParam(":vorname", $vorname );
$statement->bindParam(":nachname", $nachname);

if($statement->execute()){
    echo "erfolgreich";
    echo $pdo->lastInsertId();
}else{
    echo "..nicht";
}

?>
</body>
</html>