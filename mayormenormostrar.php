<?php 

	$num1=$_GET['num1'];
	$num2=$_GET['num2'];
	$num3=$_GET['num3'];
	
	if($num1==$num2){
		include 'error.html';
	}elseif($num1==$num3){
		include 'error.html';
	}elseif($num3==$num2){
		include 'error.html';
	}


	if($num1>$num2 && $num2>$num3){
		echo"El mayor es {$num1} despues {$num2} y el menor es {$num3}";
	}elseif($num1>$num3 && $num3>$num2){
		echo"El mayor es {$num1} despues {$num3} y el menor es {$num2}";
	}elseif($num2>$num1 && $num1>$num3){
		echo"El mayor es {$num2} despues {$num1} y el menor es {$num3}";
	}elseif($num2>$num3 && $num3>$num1){
		echo"El mayor es {$num2} despues {$num3} y el menor es {$num1}";
	}elseif($num3>$num1 && $num1>$num2){
		echo"El mayor es {$num3} despues {$num1} y el menor es {$num2}";
	}else{
		echo"El mayor es {$num3} despues {$num2} y el menor es {$num1}";
	}
	

?>