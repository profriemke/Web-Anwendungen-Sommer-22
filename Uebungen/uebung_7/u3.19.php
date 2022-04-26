<?php
$a=array(
    "Franz"=>"Müller",
    "Susi"=>"See",
    "Karl"=>"Klee",
    "Tara"=>"Tee"
);

echo "Nachnam Tara: ".$a["Tara"];
echo "Nachname Susi: ".$a["Susi"];
$a["Tara"]="Kaffee";
echo "Neuer Nachnam Tara: ".$a["Tara"];
