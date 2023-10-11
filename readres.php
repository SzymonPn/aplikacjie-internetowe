<?php 
$wzorzec='/((ul\.)|(os\.)|(oś\.)) [\/A-z ]+ [\/A-z0-9]+/';
$tekst="tekst ul. gen andersa 53/5a tekst tekst";
if(preg_match($wzorzec,$tekst,$matches))
    echo "znaleziono ulice: ".$matches[0];
else
    echo "nie znaleziono ulicy"
?>