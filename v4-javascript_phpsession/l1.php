<!--
Potrebno je napisati javaScript kod koji metodom confirm() nudi korisniku potvrdu za brisanje zapisa. 

Ako se odabere brisanje, tada se iz tablice u bazi treba izbrisati zadani zapis i na ekran ispisati "Zapis obrisan"
-->



<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$basename="vjezba_4";

$conn = new mysqli($servername, $username, $password,$basename);
?>


<html>
<head>
	<title>Vježba 4</title>
	<meta charset="UTF-8">

</head>

<body>
<form method="POST" action="">
    Unesite id zapisa kojeg želite obrisati:<br>
<input type="text" name="id" id="id"/><br>
<input type="submit" id="slanje" name="slanje" value="Briši" onclick="button()">
</form>

</body>

</html>

<script>
function button(){
	var obavijest = confirm("Želite li obrisati zapis?");
	if (obavijest==true){
		<?php
			if(isset($_POST["id"])){
				$id=$_POST["id"];
				$sql = "DELETE FROM korisnik WHERE id=".$id;
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