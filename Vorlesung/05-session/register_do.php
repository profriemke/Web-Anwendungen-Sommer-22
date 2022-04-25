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
$statement=$pdo->prepare("INSERT INTO user (login, password) VALUES (:login, :password)");
$statement->bindParam(":login", $_POST["login"]);
$password = password_hash($_POST["password"],PASSWORD_BCRYPT);
$statement->bindParam(":password", $password);
if($statement->execute()){
    echo "eintragen erfolgsreich";
}else{
    echo "hat nicht ganz geklappt";
    echo $statement->errorInfo()[2];
}
?>
</body>
</html>