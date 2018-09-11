<?php 
	//Un metodo privado, solo puede ser accedido en el mimsa
	//clase donde fue creado, la mismo tiempo no puede ser usada
	//fuera o en instancia, debe manejarse dentro de un metodo de las //isma clase
	
	class clase1{

		private function saludar(){
			return "saludando";
		}

		public function mandarSaludo(){
			return self::saludar();
		}
	}

	//Aqui terminar la clase
	//Si queremos mandar a llamar un metodo privado fuera de la clase
	//nos marca un error
	//echo clase1::saludar();

	//Lo que hacemos es crear un metodo PUBLICO y dentro de ese metodo
	//mandamos a llamar el metodo privado (usado en base de datos principalmente)

	echo clase1::mandarSaludo();
 ?>
