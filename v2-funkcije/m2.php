
<!--
Napisati dokument koji se sastoji od forme. U formi je potrebno postaviti 3 polja za unos broja (number)(stranica a, stranica b i stranica c) i gumb za slanje. Za slanje podataka potrebno je koristiti metodu post. 
U polja za unos brojeva potrebno je upisati brojeve koji predstavljaju dužine stranica kvadra.
Također je potrebno napisati vlastitu funkciju koja prima tri argumenta i računa volumen kvadra, te ispisuje dobivenu vrijednost.
V=a*b*c
Nesmije se dogoditi pojava greške "Undefined index" (koristiti funkciju isset())
-->

<!DOCTYPE html>
<html>
	<body>
		<form method="POST">
			<input type="number" name="a"/>
            <br/>
            <input type="number" name="b"/> 
            <br/>
            <input type="number" name="c"/> 
            <br/>
            <input type="submit" value="Submit">
		</form> 
	</body>
</html>

<?php
function volumen($a,$b,$c){
    $V=$a*$b*$c;
    echo $V;
}
if (isset($_POST["a"]) and isset($_POST["b"]) and isset($_POST["c"])){
    volumen($_POST["a"],$_POST["b"],$_POST["c"]);
}
?>