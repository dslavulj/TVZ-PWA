<!--
Napišite php skript koja izračunava jednadžbu (a-b)/(b*a), gdje su a i b varijable dobivene slučajnim odabirom u rasponu od 10 do 20.
-->

<?php
$a=rand(10,20);
$b=rand(10,20);
echo $a." ".$b."</br>";
echo ($a-$b)/($b*$a);


?>