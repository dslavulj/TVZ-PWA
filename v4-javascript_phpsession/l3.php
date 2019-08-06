<!--
Korištenjem forme (nalazi se u prilogu) napraviti prijavu u bazu (iz prvog zadatka). Prilikom prijave potrebno je provjeriti postoji li korisnik u bazi i koju razinu dozvole posjeduje. 

Ako korisnik postoji potrebno je provjeriti razinu dozvole. 

Ako je korisnik administrator na stranici se ispisuje "Dobro došli ime pezime. Vaša razina je administrator. NEXT(link na novu stranicu)". 
Ako nije administrator, treba ispisati "Dobro došli ime prezime. NEXT(link na novu stranicu)"
Nakon prijave treba postaviti sessione.

Na kraju treba napraviti još jednu stranicu koja korištenjem sessiona ispisuje "Dobro došli ime pezime. Vaša razina je administrator. " ili  "Dobro došli ime prezime."
-->

<!DOCTYPE html>
<html>

<head>
	<title>Vježba 4</title>
	<meta charset="UTF-8">

</head>

<body>
<form method="POST" action="">
    Korisničko ime:
<input type="text" name="kime" id="kime"/><br>
Lozinka:
<input type="password" name="pass" id="pass"/><br>
<input type="submit" id="slanje" name="slanje" value="Prijava">
</form>

</body>

</html>

<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$basename="vjezba_4";

$conn = new mysqli($servername, $username, $password,$basename);
if (isset($_POST["slanje"])){
	$ime = $_POST["kime"];
	$lozinka = $_POST["pass"];
	$sql = "SELECT * FROM korisnik WHERE ime=" . $ime . " AND lozinka=". $lozinka;
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
    $count = mysqli_num_rows($result);
    if($count == 1) {
		$_SESSION['ime'] = $ime;
		$_SESSION['razina'] = $row['razina'];
		echo $_SESSION['ime'];
		echo $_SESSION['razina'];
		header("location: l3_2.php");
	}
}
?>