<?php

session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: h3.php");
    exit;
}
echo "Dobro došli ". $_SESSION["ime"] . $_SESSION["prezime"] . ". <br><a href='h3_3.php'>Ovdje možete promjeniti svoje podatke</a>";
?>