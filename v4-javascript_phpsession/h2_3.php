<?php

session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: h2.php");
    exit;
}
if ($_SESSION["razina"]=="administrator"){
     echo "Dobro došli ". $_SESSION["ime"] . $_SESSION["prezime"] . " na drugu stranicu. Vaša razina je ". $_SESSION["razina"] .".";
}else{
    echo "Dobro došli ". $_SESSION["ime"] . $_SESSION["prezime"] . " na drugu stranicu.";
}
?>