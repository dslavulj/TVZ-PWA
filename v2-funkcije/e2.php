<!--
Napisati dokument koji se sastoji od forme. U formi je potrebno postaviti polje za unos teksta (textarea) i gumb za slanje. Za slanje podataka potrebno je koristiti metodu post. 
Podaci forme se šalju php skripti koja zatim radi transformaciju poslanog teksta na slijedeći način:
ako je duljina strinaga manja od 10, sva slova pretvoriti u malaslova koristeći php funkciju, 
ako je između 10 i 30, ispisati broj riječi koristeći php funkciju, 
ako je veći od 30, ispisati tekst kakav je i bio (bez promjena)
-->

<!DOCTYPE html>
<html>
	<body>
		<form method="POST">
			Unesite text: 
			<br/>
			<input type="text" name="a"/> 
		</form> 
	</body>
</html>

<?php
if (isset($_POST["a"])){
    $str =$_POST["a"];
    if (strlen($str)<10){
        echo strtoupper($str);
    }
    elseif (strlen($str)>=10 && strlen($str)<=30){
        echo strlen($str);
    }
    elseif (strlen($str)>30){
        echo $str;
    }
}


?>