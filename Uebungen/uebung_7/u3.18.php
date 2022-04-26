<?php
$a=array();
$a["baum"]="Kastanie";
$a["tier"]="Katze";

echo $a["tier"];
echo $a["baum"];
// --> Doku!
echo "hier".$a[0];
var_dump($a);
for($i=0;$i<count($a);$i++){
    echo $a[$i];
}