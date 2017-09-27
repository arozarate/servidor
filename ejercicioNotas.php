<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS Bin</title>
</head>
<body>

<?php
	$notasCurso = array();


?>
</body>
</html>

<?php 

function mostrarForm(){
	global $self;
	echo <<<FORM
	
	<form action="$self">
	  <input type="submit" value="Submit" onclick="mostraRand()"><br>
	</form>


FORM;
}

function mostraRand(){
	$aleatorio = rand(1,11);
	echo $aleatorio;
}

?>