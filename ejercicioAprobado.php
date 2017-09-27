<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS Bin</title>
</head>
<body>

<?php
	if($_GET['nota'] > 4){
		echo 'enhorabuena '.$_GET['nombre'].' has aprobado';
	}else{
		echo 'Lo siento '.$_GET['nombre'].' has suspendido';
	}


?>
</body>
</html>