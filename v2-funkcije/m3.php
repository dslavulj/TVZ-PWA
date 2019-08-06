<!--
Napisati dokument koji se sastoji od forme. U formi je potrebno postaviti polje za unos broja (number), checkbox i gumb za slanje. Za slanje podataka potrebno je koristiti metodu post. 
Podaci forme se šalju php skripti koja zatim provjerava da li je označen checkbox. Ukoliko je označen, veličina teksta stranice treba se promjeniti u odabranu veličinu. 
Nesmije se dogoditi pojava greške "Undefined index" (koristiti funkciju isset() 
-->

<?php
if (isset($_POST["cbox"])) $a=$_POST["a"];
else $a=15;


?>

<html>
	<body style="font-size:<?php echo $a?>px">
		<form method="POST">
            Upisati zeljenu velicinu slova:
            <br/>
			<input type="number" name="a"/>
            <br/>
            <input type="checkbox" name="cbox"> Zelim promjeniti velicinu slova
            <br/>
            <input type="submit" value="Submit">
		</form> 
	</body>
</html>