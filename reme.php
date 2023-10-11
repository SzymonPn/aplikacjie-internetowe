<?php 
$wzorzec='/[-\w\.]+@([-A-z0-9]+\.)[A-z]+/'; 
$tekst="email@gmail.com email";
if(preg_match($wzorzec,$tekst,$matches))
    echo "znaleziono email: ".$matches[0];
else
    echo "nie znaleziono email"
?>