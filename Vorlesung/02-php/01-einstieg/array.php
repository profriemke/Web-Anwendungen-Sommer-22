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
    $a=array("Baum", "Blume", "Katze", "HdM");
    echo $a[3];
    for($i=0; $i<=3; $i++){
        echo "Wir sind bei $i und der Wert ist: ";
        echo $a[$i];
        echo "<br>";
    }

var_dump($a);
    echo "<br>";
    print_r($a);
    echo "<br>foreach<br>";
    foreach($a as $element){
        echo $element;
    }
?>
</body>
</html>