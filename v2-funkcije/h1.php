<!-- 
Napisati dokument koji se sastoji od forme. U formi je potrebno postaviti polje za unos broja (number) i gumb za slanje. Za slanje podataka potrebno je koristiti metodu post. 
U polje za unos broja potrebno je upisati proizvoljni broj.
Također je potrebno napisati vlastitu funkciju koja prima jedan argument i provjerava da li je broj primarni broj.
Ako je broj primarni, potrebno je ispisati: "Broj $broj je primarni."
Ako nije, potrebno je ispisati: "Broj $broj nije primarni."
-->

<!DOCTYPE html>
<html>
	<body>
		<form method="POST">
			<input type="number" name="a"/>
            <br/>
            <input type="submit" value="Submit">
		</form> 
	</body>
</html>

<?php
function primarni($a){
    if ($a == 1) 
    return 0; 
    for ($i = 2; $i <= $a/2; $i++){ 
        if ($a % $i == 0) 
            return 0; 
    } 
    return 1; 
}
if (isset($_POST["a"])){
    $a=$_POST["a"];
    if(primarni($a)){
        echo "Broj ". $a ." je primarni.";
    }
    else echo "Broj ". $a ." nije primarni.";
}
?>