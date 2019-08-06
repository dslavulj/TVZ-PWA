<!--
Izračunajte ukupni broj riječi svih rečenica zajedno.
Svaka rečenica treba biti u svojoj varijabli.
ZADANE REČENICE:
"PHP varijable počinju znakom dolar ($)."
"Ime varijable mora sadržavati barem jedan znak, ne računajući znak $."
"U imenu varijable zabranjeno je koristiti razmak i posebne znakove osim znaka podcrtavanja (_) i dolara ($)."
-->

<?php
$s1="PHP varijable počinju znakom dolar ($).</br>";
$s2="Ime varijable mora sadržavati barem jedan znak, ne računajući znak $.</br>";
$s3="U imenu varijable zabranjeno je koristiti razmak i posebne znakove osim znaka podcrtavanja (_) i dolara ($).</br>";

echo $s1.$s2.$s3;
echo str_word_count($s1)+str_word_count($s2)+str_word_count($s3);


?>