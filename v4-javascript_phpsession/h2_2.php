<?php

session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: h2.php");
    exit;
}
if ($_SESSION["razina"]=="administrator"){
     echo "Dobro došli ". $_SESSION["ime"] . $_SESSION["prezime"] . ". Vaša razina je ". $_SESSION["razina"] .". <br><a href='h2_3.php'>NEXT</a>";
}else{
    echo "Dobro došli ". $_SESSION["ime"] . $_SESSION["prezime"] . ". <br><a href='h2_3.php'>NEXT</a>";
}
?>