<!--
Napišite php skriptu koja prikazuje podatke spremljene u tablicu u prethodnom zadatku.
Podaci se trebaju prikazati na sljedeći način:
Svaki red podataka iz tablice se treba nalaziti u zasebnom redu html tablice,
također ukoliko se radi o muškoj osobi pozadinska boja tog reda treba biti plava,
a ako se radi o ženskoj osobi pozadinska boja reda treba biti crvena.
-->



<?php
$servername = "localhost";
$username = "root";
$password = "";
$basename = "vjezba_3";

$dbc = mysqli_connect($servername,$username,$password,$basename) or die("Connection failed ". mysqli_connect_error());
mysqli_set_charset($dbc,"utf8");

$query = "SELECT * FROM Korisnik";
$result = mysqli_query($dbc,$query);
echo "<table>"."<tr><td>ID</td><td>Ime</td><td>Prezime</td><td>Spol</td><td>telefon</td><td>Email</td><td>Godine</td><td>Hobi</td></tr>";
while ($row = mysqli_fetch_array($result)){
    if ($row["spol"]=="M"){
        echo "<tr style='background-color:blue'>";
    }
    else echo "<tr style='background-color:red'>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["ime"]."</td>";
    echo "<td>".$row["prezime"]."</td>";
    echo "<td>".$row["spol"]."</td>";
    echo "<td>".$row["telefon"]."</td>";
    echo "<td>".$row["email"]."</td>";
    echo "<td>".$row["godine"]."</td>";
    echo "<td>".$row["hobi"]."</td>";
    echo "</tr>";
}
echo "</table>"
?>