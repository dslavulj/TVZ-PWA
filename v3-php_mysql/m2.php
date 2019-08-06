<!--
Potrebno je napraviti PHP konekciju na bazu. 

Ako je konekcija uspješna treba se ispisati „Connected successfully“, a ako je neuspješna treba se ispisati „Connection failed“ i greška koje se dogodila prilikom spajanja.

Podaci za spajanje na bazu su:

Ime servera: localhost 
Korisničko ime: root
Lozinka: 1234
Ime baze: Student
-->

<?php
$servername = "localhost";
$username = "root";
$password = "123";
$basename = "Student";

$dbc = mysqli_connect($servername,$username,$password,$basename) or die("Connection failed ". mysqli_connect_error());
mysqli_set_charset($dbc,"utf8");
if ($dbc){
    echo "Connected successfully";
}
?>