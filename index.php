<pre>
<?php

$auto1 = ["Modelis"=>"Toyota", "Marke" =>"Corola", "Pag.metai" => "1982", "Spalva" => "zalia" ];
$auto2 = ["Modelis"=>"BMW", "Marke"  =>"X5", "Pag.metai" => "1999", "Spalva" => "juoda" ];
$auto3 = ["Modelis"=>"Citroen", "Marke" =>"Berlingo", "Pag.metai" => "2005", "Spalva" => "melyna" ];
$auto4 = ["Modelis"=>"Skoda", "Marke" =>"Octavia", "Pag.metai" => "2015", "Spalva" => "geltona" ];

$auto = [$auto1, $auto2, $auto3, $auto4];


$phone1 = ["Gamintojas"=> "Nokia", "Modelis"=> "3310", "Metai"=> "5"];
$phone2 = ["Gamintojas"=> "Iphone", "Modelis"=> "iphone7", "Metai"=> "2"];
$phone3 = ["Gamintojas"=> "Samsung", "Modelis"=> "Note6", "Metai"=> "1"];
$phone4 = ["Gamintojas"=> "Huway", "Modelis"=> "Suduva", "Metai"=> "20"];

$phones = [$phone1, $phone2, $phone3, $phone4];

?>


<table width="100%">
	<tr>
		<td>Modelis</td>
		<td>Marke</td>
		<td>pag.metai</td>
		<td>Spalva</td>
	</tr>
<?php

foreach ($auto as $car) {
	echo "<tr><td>" . $car["Modelis"] . "</td><td>" . $car["Marke"] . "</td><td>" . $car["Pag.metai"] . "</td><td>" . $car["Spalva"] . "</td></tr>";
}

?>


</table>
	<table width="100%">
	<tr>
		<td>Gamintojas</td>
		<td>Modelis</td>
		<td>Metai</td>
		
	</tr>
<?php

foreach ($phones as $tel) {
	echo "<tr><td>" . $tel["Gamintojas"] . "</td><td>" . $tel["Modelis"] . "</td><td>" . $tel["Metai"] . "</td></tr>";
}

?>


</table>