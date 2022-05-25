<?php
$s="Das Rumpelstilzchen rumpelt munter herum";

$a = explode(" ",$s);

$dateiname="katze.jpg.php";

$d=explode(".",$dateiname);
echo $d[count($d)-1];;
$s="Halli, Galli, Walli";
//print_r(explode(',',$s,0));
//print_r(explode(',',$s,1));
//print_r(explode(',',$s,2));
print_r(explode(',',$s,-1));
