<!--
Izračunajte kolika je varijabla d, ako se varijabla a, b i c mijenjaju. Korisnik mora upisati podatke za vrijednost a, vrijednost b i za vrijednost c, kroz HTML formu. Uneseni podaci se šalju novoj PHP skripti koja preuzima vrijednosti, stavlja ih u varijable i ispisuje rezultat.
Formula: d = (3a – b*c) / 2 
-->
<?php
$a = (int)$_POST["a"];
$b = (int)$_POST["b"];
$c = (int)$_POST["c"];
$d = (3*$a - $b * $c) / 2; 
echo $d;

?>