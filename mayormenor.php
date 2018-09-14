<?php 

	$num1=$_GET['num1'];
	$num2=$_GET['num2'];
	
	if($num1>$num2){
		echo"El num1 = {$num1} es mayor que num2 = {$num2}";
	}else{
		echo"El num2 = {$num2} es mayor que num1 = {$num1}";
	}

?>