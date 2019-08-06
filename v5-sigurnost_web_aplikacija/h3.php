<!--
Napravite formu koja sadrži polja za unos šifre predmeta, naziva predmeta i broj ECTS bodova. 
Napravite bazu s tablicom koja se sastoji od slijedećih kolona; id (int, autoincrement), sifra (int), naziv (varchar), ects (int).
Napišite php skriptu koja u bazu upisuje vrijednosti unesene u formu. Unos trebate zaštitit na SQL injection napade koristeći prepared statement.
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
        Šifra: <input type="number" name="sifra" id=""><br>
        Naziv: <input type="text" name="naziv" id=""><br>
        ECTS: <input type="number" name="ects" id=""><br>
     </form>
</body>
</html>


<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'Baza');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$link->set_charset("utf8");

if(empty($_POST["sifra"]) && empty($_POST["naziv"]) && empty($_POST["ects"])){
    $sql = "INSERT INTO predmet (sifra, naziv, ects) VALUES (?, ?, ?)";
    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "isi", $param_sifra, $param_naziv, $param_ects);
        $param_sifra = $_POST["sifra"];
        $param_naziv = $_POST["naziv"];
        $param_ects = $_POST["ects"];
        if(mysqli_stmt_execute($stmt)){
            header("location: #");
        } else{
            echo "Nešto je pošlo po zlu. Molimo pokušajte ponovo kasnije.";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($link);

?>