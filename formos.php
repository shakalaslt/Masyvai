<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
     <div class="container">
	     <h1>Formos</h1>
     	<div class="row">
     		<div class="col">
	     		<form method="POST">
	     			<input type="text" name="vardas">
	     			<input type="text" name="pavarde">
	     			<button>Go!</button>

	     		</form>


     			
     		</div>
     		<div class="col">

     		Rezultatas: <br/>
     		<?php
     		if (isset($_POST['vardas']) && isset($_POST['pavarde'])) {
     			
	     		echo $_POST['vardas'] . " " . $_POST['pavarde'];
	     		} else {
	     			echo "Nera nurodytas vardas arba pavarde";
	     		}



     		?>
     			
     		</div>
     	</div>
     </div>

   

</body>
</html>