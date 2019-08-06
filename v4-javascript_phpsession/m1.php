<!--
Napisati dokument koji u sebi ima html formu sa dva elementa, poljem za unos teksta i gumbom. U polje za unos teksta treba se upisati prezime

Potrebno je napisati javaScript kod koji funkcijom confirm() nudi korisniku potvrdu za brisanje svih zapisa koji odgovaraju korisničkom unosu.  confirm() se poziva tek kada se stisne gumb u formi.

Ako se odabere brisanje, tada se iz tablice u bazi treba izbrisati zadani zapis i na ekran funkcijom alert() ispisati "Zapis obrisan"
-->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$basename="vjezba_4";

$conn = new mysqli($servername, $username, $password,$basename);
?>

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
        Prezime:
        <input type="text" name="prezime" id="id"><br>
        <input id="button" type="submit" name="button" onclick="funkcija();" value="Submit"/>
    </form>
</body>
</html>

<script>
    function button(){
	var obavijest = confirm("Želite li brisati sve zapise koji odgovaraju korisničkom unosu?");
	if (obavijest==true){
		<?php
			if(isset($_POST["prezime"])){
				$prezime=$_POST["prezime"];
				$sql = "DELETE FROM korisnik WHERE prezime=".$prezime;
				mysqli_query($conn, $sql);
			}
		?>
		window.alert("Zapis obrisan");
		return true;
	}else{
		return false;
	}
}
</script>