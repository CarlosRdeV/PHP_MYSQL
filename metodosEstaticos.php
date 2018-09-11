<?php 
//no puede acceder a ningun atributo
//pueden mandar a llamar uno o mas metodos dentro de un static
//sirve para crear procesos

class miClase{

public $mensaje = 1;


		public function hola(){
		return "hola";
		}

		public static function metodo(){
		return self::hola();

		}
	} 
		echo miClase::metodo();
 ?>
