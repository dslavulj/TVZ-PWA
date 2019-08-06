<!--
Napravite formu koja se sastoji od 4 elementa: 

polje za unos teksta (korisničko ime), 
polje za unos teksta (lozinka)
Polje za unos teksta (ponovljen lozinka)
gumb za slanje
Potrebno je napraviti  validaciju forme korištenjem javaScripta

Validacija treba provjeriti:

korisničko ime nesmije biti prazno
lozinka nesmije biti prazna  i treba imati nakmanje 7,  a najviše 20 znakova
ponovljena lozinka nesmije biti prazna
lozinka i ponovljena lozinka trebaju biti iste
Ako se dogodi nešto od navedenog, ispod tog elementa forme treba se crvenim slovima ispisati poruka koja obrašnjava što nije u redu.

Napomena:

Koristite prazne <span> elemente za prikaz poruka

Forma se nesmije poslati sve dok nisu zadovoljeni svi uvijeti.
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
span{
    color:red;
}
</style>
</head>
<body>


<form action="" method="post">
    <div>
        <span id="kimeerr"> </span>
        <label for="kime">Korisničko ime:</label><br>
        <input type="text" id="kime" name="kime">
    </div>

  <div>
    <span id="passerr"> </span>
    <label for="lozinkaKorisnika">Lozinka:</label><br>
    <input type="password" id="lozinkaKorisnika" name="lozinkaKorisnika">

  </div> 
    <div>
        <span id="ppasserr"> </span>
        <label for="lozinkaKorisnikaProvjera">Ponovite Lozinku:</label><br>
        <input type="password" id="lozinkaKorisnikaProvjera" name="lozinkaKorisnikaProvjera">
        
    </div>

 
  <div class="button">
    <button type="submit" id="slanje" name="slanje">Registracija</button>
  </div>
</form>
<script>   

  document.getElementById("slanje").onclick = function(event){
  var slanje_forme=true; 
  if (document.getElementById("kime").value == ""){
      slanje_forme = false;
      document.getElementById("kimeerr").innerHTML="Unesite korisnicko ime";
  }else{
      document.getElementById("kimeerr").innerHTML="";
    };
  if (document.getElementById("kimlozinkaKorisnikae").value.length <7 || document.getElementById("kimlozinkaKorisnikae").value.length >20 ){
      slanje_forme = false;
      document.getElementById("passerr").innerHTML="Unesite ispravnu lozinku";
  }else{
      document.getElementById("passerr").innerHTML="";
    };
  if (document.getElementById("lozinkaKorisnika").value != document.getElementById("lozinkaKorisnikaProvjera").value){
    document.getElementById("ppasserr").innerHTML="Lozinke moraju biti identicne";
  }else{
      document.getElementById("ppasserr").innerHTML="";
    }
  if(slanje_forme!=true) event.preventDefault();
  };
</script>
</body>
</html>
