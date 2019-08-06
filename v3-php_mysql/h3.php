<!--
Potrebno je napraviti php skriptu koja će uspostaviti konekciju s bazom iz prethodnog zadatka. 
Unutar iste skripte potrebno je napraviti formu sa dropdown listom elemenata koji za naziv imaju id elementa i ime i prezime. Forma na kraju treba imati gumb 'Briši', koji poziva novu php skriptu za brisanje odabranih elemenata iz tablice u bazi.

Napomena: 
Dropdown lista treba biti generirana sa SELECT naredbom iz baze.
-->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$basename = "vjezba_3";

$dbc = mysqli_connect($servername,$username,$password,$basename) or die("Connection failed ". mysqli_connect_error());
mysqli_set_charset($dbc,"utf8");

$query = "SELECT id,ime,prezime FROM korisnik";
$result = mysqli_query($dbc,$query);
echo "<form action='' method='post'>Odaberite podatak koji želite izbrisati <br><select name='select'>";
while ($row = mysqli_fetch_array($result)){
    echo "<option value='". $row["id"] ."'>". $row["id"] ." - ". $row["ime"] ." ". $row["prezime"] ."</option>";
}
echo "</select><br><br><input type='submit' name='sub' value='Izbrisi'></form>";

if(isset($_POST["sub"])){
    $id=$_POST["select"];
    $query = "DELETE FROM korisnik WHERE id=$id";
    $result = mysqli_query($dbc,$query) or die('Error querying database');
}
?>