<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS Bin</title>
</head>
<body>
<?php
	define('NUMTABLAS', '10');
	for($i = 1; $i <= NUMTABLAS; $i++){
		for($x = 1; $x <= 10; $x++){
			$resultado = $i*$x;
			echo $i." * ".$x." = ".$resultado;
			echo '<br>';
		}
	}
?>
</body>
</html>