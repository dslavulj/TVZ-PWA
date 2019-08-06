<!-- Napisati php skriptu koja korištenjem funkcije date() ispisuje rečenice ovisno o dobu
dana.
između 5h i 12h treba ispisati  "Dobro jutro!"
između 12h(uključujući) i 18h treba ispisati  "Dobar dan!"
između 18h(uključujući) i 23h treba ispisati  "Dobao veče!"
za ostalo treba ispisati "Laku noć!"
-->

<?php
if (date("H")>5 and date("H")<12){
	echo "Dobro jutro!";
}
elseif (date("H")>=12 and date("H")<18){
	echo "Dobar dan!";
}
elseif (date("H")>=18 and date("H")<23){
	echo "Dobro veče!";
}
else{ echo "Laku noć!";
}
?>