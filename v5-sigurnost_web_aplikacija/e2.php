<!--
Napisati dokument koji se sastoji od forme. U formi je potrebno postaviti 2 polja za unos broja (number)(polumjer r i visine h) i gumb za slanje. Za slanje podataka potrebno je koristiti metodu post. 

U polja za unos brojeva potrebno je upisati brojeve koji predstavljaju polumjer i visinu stožca.

Također je potrebno napisati vlastitu funkciju koja prima dva argumenta i računa volumen stožca, te ispisuje dobivenu vrijednost.

V = (3.14*r*r*h)/3

Nesmije se dogoditi pojava greške "Undefined index" (koristiti funkciju isset())
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Polumjer: <input type="number" name="polumjer" ><br>
        Visina: <input type="number" name="visina" > <br>
        <input type="submit" value="Volumen">

    </form>
</body>
</html>


<?php
function volumen($r,$h){
    return (3.14*$r*$r*$h)/3;
}

if (isset($_POST["polumjer"]) && isset($_POST["visina"])){
    echo volumen($_POST["polumjer"],$_POST["visina"]);
}

?>