<?php
$a=array(
    "Franz"=>"Müller",
    "Susi"=>"See",
    "Karl"=>"Klee",
    "Tara"=>"Tee"
);
unset($a["Tara"]);
foreach ($a as $key => $value){
    echo $key." beinhaltet ".$value."<br>";
}