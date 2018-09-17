<?php 

$num=$_GET['num'];

$miArray = array(2,3,4,5,6);

$miBandera = False;
$miIndice = 0;

for ($i=0; $i < sizeof($miArray); $i++) { 
	if ($miArray[$i]==$num) {
		$miBandera = True;
		$miIndice = $i;
	}
}

if ($miBandera) {
	echo "El numero {$num} existe en el indice {$miIndice}";
}else{
	echo "No existe";
}

 ?>
