<!--
Napisati dokument koji se sastoji samo od  jednog paragrafa. Ako se klikne na paragraf, tekst unutar njega treba promjeniti boju u zeleno.

Za promjenu boje potrebno je napraviti javascript funkciju koja mjenja CSS.
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
    <p id="p">paragraf</p>
</body>
</html>


<script>
    document.getElementById("p").onclick = function(event){
        document.getElementById("p").style.color = "green";
    }
</script>