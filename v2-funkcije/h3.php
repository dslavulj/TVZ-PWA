<!--
Napisati dokument koji se sastoji od forme. U formi je potrebno postaviti 2 polja za unos broja (number) i gumb za slanje. Za slanje podataka potrebno je koristiti metodu post.
U prvo polje se upisuje broj redova tablice, a u drugo polje broj kolona.
Podaci forme se šalju php skripti koja zatim pomoću vlastite funkcije ispisuje HTML tablicu:
-->

<!DOCTYPE html>
<html>
    <style>
      table, th, td {
         border: 1px solid black;
         border-collapse: collapse;
        }
    </style>
	<body>
		<form method="POST">
			<input type="number" name="a"/>
            <br/>
            <input type="number" name="b"/>
            <br/>
            <input type="submit" value="Napravi tablicu">
		</form> 
	</body>
</html>

<?php

function tablica($a,$b){
    echo "<table border='1'>"; 
    for($tr=1;$tr<=$a;$tr++){ 
        echo "<tr>"; 
            for($td=1;$td<=$b;$td++){ 
                echo "<td align='center'>".$tr*$td."</td>"; 
            } 
        echo "</tr>"; 
    } 
}
if (isset($_POST["a"]) and isset($_POST["b"])){
    tablica($_POST["a"],$_POST["b"]);
}

?>