<!--
Potrebno je napraviti php skriptu koja će uspostaviti konekciju s bazom iz prethodnog zadatka. 


Unutar iste skripte potrebno je prikazati podatke spremljene u tablicu koja se nalazi u bazi. Treba ju se ispisati samo one osobe kojima ime završava sa slovom 'a', a ukupna duljina imena nije veća od 6 znakova.
-->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$basename = "vjezba_3";

$dbc = mysqli_connect($servername,$username,$password,$basename) or die("Connection failed ". mysqli_connect_error());
mysqli_set_charset($dbc,"utf8");

$query = "SELECT * FROM korisnik WHERE ime LIKE '%a' AND LENGTH(ime)<=6";
$result = mysqli_query($dbc,$query);

while ($row = mysqli_fetch_array($result)){
    echo "<h3>". $row["ime"] . " " . $row["prezime"] ."</h3><br> spol: " . $row["spol"] . "<br>Telefon: " . $row["telefon"] . "<br> Email: " . $row["email"] . "<br> Godine: " . $row["godine"] . "<br> Hobi:" . $row["hobi"];
}

?>