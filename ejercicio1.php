<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS Bin</title>
</head>
<body>
<?php
	$temperaturas = array();
	$temperaturas['Caja_1'] = array(1,1,2,3,2,1,2,3,3,3,2,1,3,4);
	$temperaturas['Caja_2'] = array(0,0,3,2,4,3,2,0,1,2,3,4,2,1);
	$temperaturas['Caja_3'] = array(3,1,2,3,5,2,2,0,1,2,3,4,2,1);
	$temperaturas['Caja_4'] = array(2,2,2,3,5,2,3,2,0,1,2,3,0,1);
	$temperaturas['Caja_5'] = array(0,3,2,3,5,2,3,2,0,1,2,3,0,1);

	$index = 0;
	$resultado = array();
	for($i = 1; $i <= sizeof($temperaturas); $i++){
		$mayorCinco = false;
		$cajaConcreta = 'Caja_'.$i;
		for($x = 0; $x < sizeof($temperaturas[$cajaConcreta]); $x++){
			if($temperaturas[$cajaConcreta][$x] > 4){
				$mayorCinco = true;
			}
		}
		if($mayorCinco){
			$resultado[$index] = $temperaturas[$cajaConcreta];
			$index++;
		}
	}
	echo <<<EOD
	las cajas que han superado los 4º son: 
EOD;
imprimirArray($resultado);

function imprimirArray($array){
	foreach ($array as $value) {
		echo "\n[";
		foreach ($value as $val) {
			echo $val.", ";
		}
		echo "]";
	}
}
?>
</body>
</html>