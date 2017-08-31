<pre>
<?php

$troškinys = ["Jautiena"=>500, "Pupelės" =>500, "Vanduo" => 500, "Pomidorai" => 300, "Paprika" => 100  ];

foreach ($troškinys as $ingredientas => $kiekis) {

	echo $ingredientas . ":" . $kiekis . "<br/>";
}



echo array_sum($troškinys);