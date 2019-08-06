<!--
Napisati dokument koji se sastoji od forme. U formi je potrebno postaviti polje za unos marke auta, modela i godine proizvodnje. Za slanje podataka potrebno je koristiti metodu post.       

Napisati php skriptu koja će uspostaviti konekciju s bazom i podatke upisane u formu spremiti u bazu.
Napomena:

Ime baze i tablice su proizvoljni


-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>m3</title>
</head>
<body>
    <form method="post">
        Marka <br>
        <input type="text" name="marka" ><br>
        Model <br>
        <input type="text" name="model" ><br>
        Godina proizvodnje <br>
        <input type="number" name="godina"><br>
        <input type="submit" value="Upisi u bazu">
    </form>
</body>
</html>

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
if (isset($_POST["marka"])){
    $marka = $_POST["marka"];
    $model = $_POST["model"];
    $godina = $_POST["godina"];


    $query = "INSERT INTO Automobili (marka,model,godina_proizvodnje) VALUES ('$marka','$model','$godina')";
    $result = mysqli_query($dbc,$query) or die('Error querying database');
    mysqli_close($dbc);
}
?>