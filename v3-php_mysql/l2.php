<!--
Napisati php skriptu koja podatke poslane kroz formu (nalazi se u prilogu zadatka)
sprema u bazu iz prethodnog zadatka
-->

<!DOCTYPE html>
<head>
	<title>PWA 3. vježba</title>

    <meta charset="UTF-8" />
    <style type="text/css">
.form-style-9{
	max-width: 450px;
	background: #FAFAFA;
	padding: 30px;
	margin: 50px auto;
	box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
	border-radius: 10px;
	border: 6px solid #305A72;
}
.form-style-9 ul{
	padding:0;
	margin:0;
	list-style:none;
}
.form-style-9 ul li{
	display: block;
	margin-bottom: 10px;
	min-height: 35px;
}
.form-style-9 ul li  .field-style{
	box-sizing: border-box; 
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box; 
	padding: 8px;
	outline: none;
	border: 1px solid #B0CFE0;
	-webkit-transition: all 0.30s ease-in-out;
	-moz-transition: all 0.30s ease-in-out;
	-ms-transition: all 0.30s ease-in-out;
	-o-transition: all 0.30s ease-in-out;

}.form-style-9 ul li  .field-style:focus{
	box-shadow: 0 0 5px #B0CFE0;
	border:1px solid #B0CFE0;
}
.form-style-9 ul li .field-split{
	width: 49%;
}
.form-style-9 ul li .field-full{
	width: 100%;
}
.form-style-9 ul li input.align-left{
	float:left;
}
.form-style-9 ul li input.align-right{
	float:right;
}
.form-style-9 ul li textarea{
	width: 100%;
	height: 100px;
}
.form-style-9 ul li input[type="button"], 
.form-style-9 ul li input[type="submit"] {
	-moz-box-shadow: inset 0px 1px 0px 0px #3985B1;
	-webkit-box-shadow: inset 0px 1px 0px 0px #3985B1;
	box-shadow: inset 0px 1px 0px 0px #3985B1;
	background-color: #216288;
	border: 1px solid #17445E;
	display: inline-block;
	cursor: pointer;
	color: #FFFFFF;
	padding: 8px 18px;
	text-decoration: none;
	font: 12px Arial, Helvetica, sans-serif;
}
.form-style-9 ul li input[type="button"]:hover, 
.form-style-9 ul li input[type="submit"]:hover {
	background: linear-gradient(to bottom, #2D77A2 5%, #337DA8 100%);
	background-color: #28739E;
}
</style>
</head>
<body>
<form class="form-style-9" action="" method="POST">
<ul>
<li>
    <input type="text" name="ime" class="field-style field-split align-left" placeholder="Ime" />
    <input type="text" name="prezime" class="field-style field-split align-right" placeholder="Prezime" />

</li>
<li>
    <input type="text" name="telefon" class="field-style field-split align-left" placeholder="Telefon" />
    <input type="email" name="email" class="field-style field-split align-right" placeholder="Email" />
</li>
<li>
<select id="hobi" name="hobi" class="field-style field-split align-left">

  <option value="Ribolov">Ribolov</option>
  <option value="Bicikliranje">Bicikliranje</option>
  <option value="Planinarenje">Planinarenje</option>
  <option value="Ronjenje">Ronjenje</option>
  <option value="Trčanje">Trčanje</option>
  <option value="Šetnja">Šetnja</option>
  <option value="Ostalo">Ostalo</option>

</select>   
<input type="number" name="godine" class="field-style field-split align-right" placeholder="Broj godina" />  
</li>
<li>

</li>
<li>
Spol:
M <input type="radio" name="spol" value="M" />
Ž <input type="radio" name="spol" value="Ž" />
</li>
<li>
<input type="submit" value="Pošalji" />
</li>
</ul>
</form>
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$basename = "vjezba_3";

$dbc = mysqli_connect($servername,$username,$password,$basename) or die("Connection failed ". mysqli_connect_error());
mysqli_set_charset($dbc,"utf8");
if ($dbc){
    echo "Connected successfully";
}
$ime=$_POST["ime"];
$prezime=$_POST["prezime"];
$spol=$_POST["spol"];
$telefon=$_POST["telefon"];
$email=$_POST["email"];
$godine=$_POST["godine"];
$hobi=$_POST["hobi"];
$query = "INSERT INTO Korisnik (ime, prezime, spol, telefon, email, godine, hobi) VALUES ('$ime','$prezime','$spol','$telefon','$email','$godine','$hobi')";
$result = mysqli_query($dbc,$query) or die('Error querying database');
mysqli_close($dbc);




?>