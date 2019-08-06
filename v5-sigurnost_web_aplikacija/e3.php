<!--
Potrebno je napraviti php skriptu koja će uspostaviti konekciju s bazom (nalazi se u prilogu zadatka). 
Unutar iste skripte potrebno je prikazati podatke spremljene u tablicu koja se nalazi u bazi. Treba ju se ispisati samo one osobe koje su mlađe od 33 godine, a stariji od 18 i hobi im je planinarenje. Ukoliko je osoba muško, ime treba biti ispisano plavom bojom, a ukoliko je osoba žensko crvenom.
-->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$basename = "vjezba_3";

$dbc = mysqli_connect($servername,$username,$password,$basename) or die("Connection failed ". mysqli_connect_error());
mysqli_set_charset($dbc,"utf8");
if ($dbc){
    echo "Connected successfully";
}
$query = "SELECT * FROM korisnik";
$result = mysqli_query($dbc,$query);

while ($row = mysqli_fetch_array($result)){
    if ($row["godine"]<33 && $row["godine"]>18 && $row["hobi"]=="planinarenje"){
        if ($row["spol"]=="Ž") echo "<h3 style='color:red'>". $row["ime"] ."</h3>";
        else echo "<h3 style='color:blue'>". $row["ime"] ."</h3><br>";
        echo "spol: " . $row["spol"] . "<br>Telefon: " . $row["telefon"] . "<br> Email: " . $row["email"] . "<br> Godine: " . $row["godine"] . "<br> Hobi:" . $row["hobi"];
    }
}
?>