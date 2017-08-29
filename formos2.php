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
	     			<input type="text" name="arg1">
	     			<input type="text" name="arg2">
                         <select name="operation">
                              <option value="sum">Sudetis</option>
                              <option value="ded">Atimtis</option>
                              <option value="mult">Daugyba</option>
                              <option value="div">Dalyba</option>
                         </select>
	     			<button>Go!</button>

	     		</form>


     			
     		</div>
     		<div class="col">
               <?php print_r($_POST)
               ?>

     		Rezultatas: <br/>
     		<?php
     		if (isset($_POST['arg1']) && isset($_POST['arg2'])) {
                    //atliekam aritmetini veiksma prioklausomai nuo post {operation}
     			
	     		echo $_POST['arg1'] + $_POST['arg2'];
	     		} else {
	     			echo "Nera nurodytas vardas arba pavarde";
	     		}



     		?>
     			
     		</div>
     	</div>
     </div>

   

</body>
</html>