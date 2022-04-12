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
class Taschenrechner{
    private $speicher=0;
    public $autor="ich";
    function add($wert){
        $this->speicher=$this->speicher+$wert;
        // $this->speicher+=$wert;
    }
    function sub($wert){
        $this->speicher=$this->speicher-$wert;
    }
    function read(){
        return $this->speicher;
    }
}
$tr = new Taschenrechner();
$tr->add(5);
$tr->sub(3);
$tr->add(100000);
echo $tr->autor;
echo "Das Ergebnis ist: ".$tr->read();
?>
</body>
</html>