<!--
Korištenjem php funkcije ispišite datum u slijedećem obliku:
Monday, 25.4.2019. // puni naziv dana u tjednu, dan u mjesecu, mjesec bez nule, godina
Apr 19 //prva tri slova mjeseca,  zadnje dvije znamenke godine
25/04/2019 //dan u mjesecu, mjesec s nulom, godina
17:37:22 //trenutno vrijeme  (sati, minute, sekunde)
Napomena: prikazane vrijednosti datuma su samo primjeri u kojem se obliku trebaju prikazivati. Prilikom pokretanja skripte uvjek se treba prikazati trenutni datum ili vrijeme
-->

<?php
echo date("l, j.n. Y.");
echo "</br>";
echo date("M y");
echo "</br>";
echo date("d/m/Y");
echo "</br>";
echo date("G:H:s");
?>