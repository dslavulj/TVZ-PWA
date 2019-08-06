<!--
Korištenjem forme napraviti prijavu u proizvoljnu bazu podataka. Prilikom prijave potrebno je provjeriti postoji li korisnik u bazi i koju razinu dozvole posjeduje (administrator ili korisnik). 

Nakon prijave treba postaviti sessione.

Ovisno o razini, prikazuje se slijedeće

Ako je korisnik administrator na stranici se ispisuje "Dobro došli ime pezime. Vaša razina je administrator. NEXT(link na drugu stranicu)". 
Ako nije administrator, treba ispisati "Dobro došli ime prezime. NEXT(link na drugu stranicu)"


Na kraju treba napraviti još jednu stranicu koja korištenjem sessiona, ovisno o razini korisnika, ispisuje "Dobro došli ime pezime na drugu stranicu. Vaša razina je administrator. " ili  "Dobro došli ime prezime na drugu stranicu."
-->

<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'vjezba_4');
   $link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

   session_start();
    
   if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: h2_2.php");
        exit;
   }
    
   $username = $password = "";
   $username_err = $password_err = "";
   if($_SERVER["REQUEST_METHOD"] == "POST"){
       if(empty(trim($_POST["username"]))){
           $username_err = "Unesite korisnicko ime";
       } else{
           $username = trim($_POST["username"]);
       }
       
       if(empty(trim($_POST["password"]))){
           $password_err = "Unesite lozinku";
       } else{
           $password = trim($_POST["password"]);
       }
       
       if(empty($username_err) && empty($password_err)){
           $sql = "SELECT id, ime, prezime, lozinka, razina FROM korisnici WHERE username = ?";
           
           if($stmt = mysqli_prepare($link, $sql)){
               mysqli_stmt_bind_param($stmt, "s", $param_username);
               $param_username = $username;
               if(mysqli_stmt_execute($stmt)){
                   mysqli_stmt_store_result($stmt);
                   if(mysqli_stmt_num_rows($stmt) == 1){                    
                       mysqli_stmt_bind_result($stmt, $id, $ime, $prezime, $hashed_password, $razina);
                       if(mysqli_stmt_fetch($stmt)){
                           if(password_verify($password, $hashed_password)){
                               session_start();
                               $_SESSION["loggedin"] = true;
                               $_SESSION["id"] = $id;
                               $_SESSION["ime"] = $ime;
                               $_SESSION["prezime"] = $prezime;   
                               $_SESSION["username"] = $username;
                               $_SESSION["razina"] = $razina;                            
                               header("location: h2_2.php");
                           } else{
                               $password_err = "Lozinka koju ste unijeli je pogresna.";
                           }
                       }
                   } else{
                       $username_err = "Račun sa unesenim korisnickim imenom ne postoji";
                   }
               } else{
                   echo "Nešto je pošlo po zlu, probajte ponovo";
               }
           }
           mysqli_stmt_close($stmt);
       }
       mysqli_close($link);
   }
   ?>
    
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <title>Login</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
       <style type="text/css">
           body{ font: 14px sans-serif; }
           .wrapper{ width: 350px; padding: 20px; }
       </style>
   </head>
   <body>
       <div class="wrapper">
           <h2>Prijava</h2>
           <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
               <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                   <label>Korisnicko ime</label>
                   <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                   <span class="help-block"><?php echo $username_err; ?></span>
               </div>    
               <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                   <label>Lozinka</label>
                   <input type="password" name="password" class="form-control">
                   <span class="help-block"><?php echo $password_err; ?></span>
               </div>
               <div class="form-group">
                   <input type="submit" class="btn btn-primary" value="Login">
               </div>
           </form>
       </div>    
   </body>
   </html>