<!--
Potrebno je napraviti validaciju forme korištenjem javaScripta

Validacija treba provjeriti da li je uneseno, korisničko ime i lozinka. 

Korisničko ime nesmije biti manje od 6, niti veće od 30 znakova. Ako je manje od 6 ili veće od 30, treba ispisati obavijest u <span> elementu
Treba provjeriti je su li lozinka i potvrdna lozinka iste
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
</style>
</head>
<body>


<form action="" method="post">
  <div>
    <span id="poruka"> </span>
    <label for="ime">Ime:</label><br>
    <input type="text" id="ime" name="ime">

  </div>
    <div>
        <label for="prezime">Prezime:</label><br>
        <input type="text" id="prezime" name="prezime">
        
    </div>
    <div>
        <label for="kime">Korisničko ime:</label><br>
        <input type="text" id="kime" name="kime">
       
    </div>

  <div>
    <label for="lozinkaKorisnika">Lozinka:</label><br>
    <input type="password" id="lozinkaKorisnika" name="lozinkaKorisnika">

  </div> 
    <div>
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
  var tekst = document.getElementById("ime").value;
  if (tekst.length < 6 || tekst.length > 30){
      slanje_forme = false;
      document.getElementById("poruka").innerHTML="Unesite ispravno ime";
    }else{
      document.getElementById("poruka").innerHTML="";
    }
  if (document.getElementById("lozinkaKorisnika").value != document.getElementById("lozinkaKorisnikaProvjera").value) window.alert("Lozinke nisu iste");
  if(slanje_forme!=true) event.preventDefault();
  };
</script>
</body>
</html>
