<?php 

	$nombre=$_GET['nom'];
	$app=$_GET['app'];
	$apm=$_GET['apm'];

	echo"Tu nombre completo es: ".$nombre." ".$app." ".$apm;

	echo"Tu nombre completo es: {$nombre} {$app} {$apm}";	

?>