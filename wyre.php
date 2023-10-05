<?php 
$wzorzec='/być/';
$tekst="być albo nie być";
if(preg_match($wzorzec,$tekst))
    echo "znaleziono";
else
    echo "nie znaleziono";
echo "znaleziono: ". preg_match_all($wzorzec,$tekst);
?>