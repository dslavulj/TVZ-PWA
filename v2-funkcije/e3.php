<!--
Napisati php skriptu koja korištenjem funkcije datuma i vremena provjerava da li je današnji dan u tjednu vikend ili ne. Vikendi su subota i nedjelja (Saturday (Sat) i Sunday (Sun)).
Ako je vikend, treba ispisati: "Danas nema nastave!!!"
Ako nije vikend treba ispisati: "Nastava još uvijek traje."
-->

<?php

if (date("N")==6 or date("N")==7){
    echo "Danas nema nastave!!!";
}
else echo "Nastava još uvijek traje.";

?>