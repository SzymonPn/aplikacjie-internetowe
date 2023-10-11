<?php 
$wzorzec='/[0-9]{11}/';
$tekst="pesel: 01923847653";
if(preg_match($wzorzec,$tekst,$matches))
    echo "znaleziono pesel: ".$matches[0];
else
    echo "nie znaleziono pesel"
?>