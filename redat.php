<?php 
$wzorzec='/([0123]?\d)+[-\.\/]+([01]?\d)+[-\.\/]+(\d{4})/';
$tekst="11.09.2001 było kłamstwem";
if(preg_match($wzorzec,$tekst,$matches))
    echo "znaleziono datę ".$matches[0];
else
    echo "nie znaleziono daty"
?>