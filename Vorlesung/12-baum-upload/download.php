<?php

$file="/.../Tree13.jpg";
header("Content-Type:image/jpg");
header("Content-Disposition: attachment;filename={Tree13.jpg}");
header("Content-Transfer-Encoding: binary");
header ("Content-Length: ".filesize($file));
readfile($file);