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
if(!isset($_POST["vorname"]) or !isset($_POST["nachname"])){
    die("Fehler im Formular");

}
echo "Hallo-hallo ".htmlspecialchars($_POST["vorname"])." ".htmlspecialchars($_POST["nachname"]);

?>
</body>
</html>