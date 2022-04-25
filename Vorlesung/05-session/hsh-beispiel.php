<?php
$h = password_hash("Unser Passwort", PASSWORD_BCRYPT);
echo $h;
echo "<br>Ergebnis: ";
if(password_verify("Unser Passwort", $h)){
    echo "erfolgreich";
}else{
    echo "Passwort falsch";
}