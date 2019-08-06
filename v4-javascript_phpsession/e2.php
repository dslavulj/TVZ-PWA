<!--
Potrebno je napraviti HTML dokument koji se sastoji od paragrafa sa proizvoljnim tekstom.
Ako se klikne na paragraf treba se otvoriti popup obavijest koristeći javascript confirm() funkciju. Obavijest treba pitati "Želite li prikazati drugi tekst".

Ako se odabere da (yes) treba se prikazati proizvoljni drugi tekst.

Napomena:
Možete koristiti  document.write () kako bi ispisali drugitekst.
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
    <p id="p">Paragraf1</p>
</body>
</html>



<script>
    document.getElementById("p").onclick = function(event){
        var obavijest = confirm("Želite li prikazati drugi tekst?");
        if (obavijest){
            document.write("Paragraf2");
        };
    };

</script>