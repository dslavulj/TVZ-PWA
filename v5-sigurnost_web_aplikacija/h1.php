<!--
Napravite proizvoljnu bazu podataka s pripadajućom tablicom korisnik. Tablica korisnik treba imati id (autoincrement), korisničko ime, lozinku i level .

Napraviti formu i php skriptu koja unosi nove korisnike u tablicu korisnik, koristeći se password_hash() funkcijom za unos lozinke.
-->
<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
<style>

form {
  margin: 0 auto;
  width: 400px;
  padding: 1em;
  border: 1px solid #CCC;
  border-radius: 1em;
}

div + div {
  margin-top: 1em;
}

label {
 
  width: 90px;
  text-align: right;
}

input, textarea {
  font: 1em sans-serif;
  width: 300px;
  -moz-box-sizing: border-box;
       box-sizing: border-box;
  border: 1px solid #999;
}

input:focus, textarea:focus {
  border-color: #000;
}

textarea {
  vertical-align: top;
  height: 5em;
  resize: vertical;
}

.button {
  padding-left: 90px;
}

button {
  margin-left: .5em;
}
</style>
</head>
<body>


<form action="" method="post">
    <div>
        <label for="username">Korisničko ime:</label><br>
        <input type="text" id="username" name="username">
       
    </div>

  <div>
    <label for="lozinkaKorisnika">Lozinka:</label><br>
    <input type="password" id="lozinkaKorisnika" name="lozinkaKorisnika">

  </div> 
    <div>
        <label for="lozinkaKorisnikaProvjera">Ponovite Lozinku:</label><br>
        <input type="password" id="lozinkaKorisnikaProvjera" name="lozinkaKorisnikaProvjera">
        
    </div>
    <div>
        <label for="level">Level: </label><br>
        <input type="text" id="level" name="level">
        
    </div>

 
  <div class="button">
    <button type="submit" id="slanje" name="slanje">Registracija</button>
  </div>
</form>
</body>
</html>


<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'Baza');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$link->set_charset("utf8");

$username = $password = $confirm_password = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty(trim($_POST["username"]))){
        $username_err = "Unesite korisničko ime.";
    } else{
        $sql = "SELECT id FROM korisnik WHERE korisnicko ime = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = trim($_POST["username"]);
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "Korisničko ime je već zauzeto";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Nešto je pošlo po zlu. Molimo pokušajte ponovo kasnije.";
            }
        }
        mysqli_stmt_close($stmt);
    }
    if(empty(trim($_POST["lozinkaKorisnika"]))){
        $password_err = "Unesite lozinku";     
    } elseif(strlen(trim($_POST["lozinkaKorisnika"])) < 6){
        $password_err = "Lozinka mora sadržavati barem 6 znakova";
    } else{
        $password = trim($_POST["lozinkaKorisnika"]);
    }
    if(empty(trim($_POST["lozinkaKorisnikaProvjera"]))){
        $confirm_password_err = "Potvrdite lozinku";     
    } else{
        $confirm_password = trim($_POST["lozinkaKorisnikaProvjera"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Lozinka se ne podudara";
        }
    }
    if(empty(trim($_POST["level"]))){
        $level_err = "Unesite level";     
    } else{
        $level=trim($_POST["level"]);
    }
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($level)){
        $sql = "INSERT INTO korisnik (korisnicko ime, lozinka, level) VALUES (?, ?, ?)";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_password, $param_level);
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            $param_level = $level;
            if(mysqli_stmt_execute($stmt)){
                header("location: #");
            } else{
                echo "Nešto je pošlo po zlu. Molimo pokušajte ponovo kasnije.";
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
}
?>