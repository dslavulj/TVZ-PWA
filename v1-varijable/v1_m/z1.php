<!--
	Napišite PHP skriptu za prikaz niza vrijednosti unutar tablice. Vrijednosti trebaju biti prikazane kroz varijable.
-->

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;    
}
</style>

<?php

$name="Bill Gates";
$tel=55577855;

echo "<table>
  <tr>
    <th>Name</th>
    <th>Telephone1</th> 
    <th>Telephone2</th>
  </tr>
  <tr>
    <td>".$name."</td>
    <td colspan='2'>".$tel."</td>
  </tr>
</table>";
?>