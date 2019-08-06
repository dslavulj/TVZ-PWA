<!--
Napisati dokument koji se sastoji od forme. U formi je potrebno postaviti dva polja za unos brojeva (number) i dva gumba za slanje. Za slanje podataka potrebno je koristiti metodu post. 
U prvo polje se upisuje prvi broj, a u drugo drugi broj.
Ako se klikne prvi gumb ("Zbrajanje"), poziva se funkciji koja zbraja dva broja.
Ako se klikne drugi gumb ("Oduzimanje"), poziva se funkcijia koja oduzima drugi broj od prvog
-->

<!DOCTYPE html>
<html>
	<body>
		<form method="POST">
			<input type="number" name="a"/>
            <br/>
            <input type="number" name="b"/>
            <br/>
            <input type="submit" name="s" value="Zbrajanje">
            <br/>
            <input type="submit" name="s" value="Oduzimanje">
		</form> 
	</body>
</html>

<?php
function zbrajanje($a,$b){
    return $a+$b;
}
function oduzimanje($a,$b){
    return $b-$a;
}

if (isset($_POST["a"]) and isset($_POST["b"])){
    if ($_POST["s"]=="Zbrajanje") echo zbrajanje($_POST["a"],$_POST["b"]);
    else echo oduzimanje($_POST["a"],$_POST["b"]);
}

?>