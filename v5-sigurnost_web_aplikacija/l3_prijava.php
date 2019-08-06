<!DOCTYPE html>
<html>

<head>
	<title>Vježba 4</title>
	<meta charset="UTF-8">

</head>

<body>
<form method="POST" action="">
    Korisničko ime:
<input type="text" name="username" id="username"/><br>
Lozinka:
<input type="password" name="pass" id="pass"/><br>
<input type="submit" id="slanje" name="slanje" value="Prijava">
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

$username = $password = "";
$username_err = $password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty(trim($_POST["username"]))){
        $username_err = "Unesite korisničko ime.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    if(empty(trim($_POST["pass"]))){
        $password_err = "Unesite svoju zaporku.";
    } else{
        $password = trim($_POST["pass"]);
    }
    if(empty($username_err) && empty($password_err)){
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = $username;
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
							//loggedin
							header("location: #");
                        } else{
                            $password_err = "Zaporka koju ste unijeli nije valjana.";
                        }
                    }
                } else{
                    $username_err = "Nije pronađen korisnički račun s tim korisničkim imenom.";
                }
            } else{
                echo "Nešto je pošlo po zlu. Molimo pokušajte ponovo kasnije.";
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
}
?>
