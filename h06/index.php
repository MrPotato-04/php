<?php 
$dbhost ="localhost:3306";
$dbuser ="root";
$dbpass ="";
$dbname ="phpschool";

$dbc = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('Could not connect: ' . mysqli_error($con));
$res = $dbc->query('SELECT cursistnr, naam, roepnaam, straat, postcode, plaats, geslacht, geb_datum FROM `cursist`');
echo "<table><tr>
<th>Cursist Nr</th>
<th>Naam</th>
<th>Roepnaam</th>
<th>Straat</th>
<th>Postcode</th>
<th>Plaats</th>
<th>Geslacht</th>
<th>Geboorte datum</th>
<tr>
";

while ($row = mysqli_fetch_array($res)) {
    echo " 
<td>{$row['cursistnr']}</td>
<td>{$row['naam']}</td>
<td>{$row['roepnaam']}</td>
<td>{$row['straat']}</td>
<td>{$row['postcode']}</td>
<td>{$row['plaats']}</td>
<td>{$row['geslacht']}</td>
<td>{$row['geb_datum']}</td>
</tr>
";
};

?>
</table>