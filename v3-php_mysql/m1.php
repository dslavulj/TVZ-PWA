<!--
U XAMPP-u napravite bazu s dvije tablice.

Pod rješenje zadatka potrebno je predati screenshot strukture tablica tablica.

Naziv baze: Apartmani

Tablica1:

Ime tablice: apartman
Kolone:
id (int(11), auto increment)
naziv (varchar(32))
adresa (varchar(32))
grad (varchar(32))
opis (text)
Tablica2:

Ime tablice: iznajmljivac
Kolone:
id (int(11), auto increment)
oib (int(10))
ime (varchar(32))
prezime (varchar(32))
-->

CREATE TABLE apartman
(
    id int(11) PRIMARY KEY AUTO_INCREMENT,
    naziv varchar(32),
    adresa varchar(32),
    grad varchar(32),
    opis text
);

CREATE TABLE iznajmljivac
(
    id int(11) PRIMARY KEY AUTO_INCREMENT,
    oib int(11),
    ime varchar(32),
    prezime varchar(32)
);


