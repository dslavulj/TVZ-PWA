<!--
	Napravite jednostavnu HTML formu koja prihvaća unos od korisnika u obliku broja i pomoću PHP skripte ispisuje sve parne brojeve koji se nalaze između 0 i tog broja.
-->
<?php
$a = (int)$_POST["a"];

for ($i = 0; $i < $a; $i++)
	{
		if ($i % 2 == 0)
		{
			echo $i."<br/>";
		}
	}

?>