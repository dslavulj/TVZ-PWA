<!--
Napravite import baze koja se nalazi u zadatku. 
Nakon što ste postavili bazu, potrebno je napraviti PHP skriptu koja uspostavlja
konekciju na tu bazu. Ako je konekcija uspješna treba se ispisati
„Connected successfully“, a ako je neuspješna treba se ispisati „Connection failed“
i greška koje se dogodila prilikom spajanja.
Podaci za spajanje na bazu su:

Ime servera: 'localhost'
Korisničko ime: 'root'
Lozinka: ''
Ime baze: 'vjezba_3'
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


?>