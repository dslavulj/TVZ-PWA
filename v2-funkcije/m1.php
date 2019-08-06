<!--
Napisati dokument koji se sastoji od forme. U formi je potrebno postaviti polje za unos broja (number), polje za unos teksta (text) i gumb za slanje. Za slanje podataka potrebno je koristiti metodu post. 
U polje za unos teksta potrebno je upisati tekst koji će se ponavljati onoliko puta koliko je upisano u polje za unos broja. Za ponavljanje je potrebno koristiti php funkciju.
Npr. Ako je u polje za unos teksta upisano  "Zagreb" i u polje za unos broja "3", ispis treba bit "ZagrebZagrebZagreb"
-->

<!DOCTYPE html>
<html>
	<body>
		<form method="POST">
			<input type="number" name="num"/>
            <br/>
            <input type="text" name="str"/> 
            <br/>
            <input type="submit" value="Submit">
		</form> 
	</body>
</html>


<?php
if (isset($_POST["num"]) and isset($_POST["str"])){
    $num=$_POST["num"];
    $str=$_POST["str"];
    for ($i=0;$i<$num;$i++) echo $str;
}
?>