
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	.body {
	background-color: orange
}

		.pix {
			width: 50px;
		    height: 50px;
		    border:1px solid gray;
		    float: left;
		}
		.J {
			background-color: black;

		}
		.B {
			background-color: white;
		}
	</style>
</head>
<body>
<div class="body"></div>


</body>
</html>

<?php

$img=["J","B","B","B","B","J","B","B","B","B","J","B","J","B","B","J",];

foreach ($img as $pixel) {
	echo '<div class="pix"></div>';
	# code...
}