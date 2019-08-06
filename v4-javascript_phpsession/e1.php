<!--
Potrebno je napraviti HTML dokument koji sadrži dva gumba. 

Ako se klikne na lijevi gumb treba se ispisati poruka "Odabrali ste lijevi gumb", a ako se odabere desni "Odabrali ste desni gumb"

Za ispisivanje poruka koristiti javascript i funkciju alert()
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input id="button" type="submit" name="button1" onclick="lijevi();" value="Lijevi"/>
        <input id="button" type="submit" name="button2" onclick="desni();" value="Desni"/>
    </form>
</body>
</html>


<script>
    function lijevi(){
        alert("Odabrali ste lijevi gumb");  
    };
    function desni(){
        alert("Odabrali ste desni gumb");  
    };
</script>