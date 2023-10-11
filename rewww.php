<?php 
$wzorzec='/((\bhttps?:\/\/)|(\bwww\.))\S*/';
$tekst="Strona: http://zsgsucha.pl/";
if(preg_match($wzorzec,$tekst,$matches))
    echo "znaleziono strone: ".$matches[0];
else
    echo "nie znaleziono strony"
?>