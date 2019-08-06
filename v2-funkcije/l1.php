<!--U postojećem HTML dokumentu napišite php kod koji provjerava da li je prilikom slanja
forme označen checkbox. Ukoliko je označen, boja teksta stranice treba se promjeniti u
poslanu vrijednost.
 -->


<!DOCTYPE html>
<?php
if(isset($_POST["option"])) {
	$boja= $_POST["boja"]; }
?>
<html>
<head>
	<title>PWA vježba</title>
    <meta charset="UTF-8" />
    <style>
        body{
			color:<?php echo $boja; ?>;
		}
    </style>
</head>
<body>
	<form method="POST">
        Željena boja teksta: <br /><input type="color" name="boja" />
        <br>
        <label><input type="checkbox" name = "option" value="Option">Želim napraviti promjenu</label> 
		<br>
			<input type="submit" name="submit" value="Promjeni" />
	</form>
</body>
</html>