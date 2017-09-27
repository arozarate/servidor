<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	body{
		background-color: #EFF2FB;
	}
	.eko{
		font-size: 20px;
	}
	.center{
		text-align: center;
	}
	td {
    text-align: center;
    background-color: #2ECCFA;
    border: 3px solid #0040FF;
}
table {
	padding-left: 45em;
	padding-right: 45em;
	width: 100%;
	height: 30em;
}
</style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS Bin</title>
</head>
<body>
<?php
	echo "<h1 class='center'>";
	echo "Tabla de multiplicar del ".$_GET['numero'];
	echo "</h1>";
?>
<table>
<tr>
<td>
<?php
	$i = $_GET['numero'];
	for($x = 1; $x <= 10; $x++){
		$resultado = $i*$x;
		echo "<b class = 'eko'>";
		echo $i." * ".$x." = ".$resultado;
		echo "</b>";
		echo '<br>';
		echo '<br>';
	}
?>
</td>
</tr>
</table>
</body>
</html>