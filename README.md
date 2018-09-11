# PHP_MYSQL

Cambiamos nuestro puerto local(80) al 8080
XAMPP localhost y liston = 8080

localhost:8080

---------ejemplophp1.php-------------

<?php //Necesitamos este para declarar que usamos php

$edad=38;  //Usamos $ para declarar variables 
$nombre="Victor";  
$clave="84644";

//recuperamos el valor de nuestra primera pagina
$name=$_POST['nombre'];

echo ("El nombre es $nombre");

echo ("La edad es $edad");

//Usamos "" para lanzar el codigo automaticamente
echo("La clave es $clave");

echo("Bienvenido $name");
//Usamos comillas simples para compilar algo por ejemplo
//codigo de algo 
echo('<!DOCTYPE html>
<html>
<head>
</head>
<body>
</body>
</html>')

?>


--------------entrada.html-------------

<html>
<head>
	<title>Primer Practica</title>
</head>
<body>
<h1>Escribe tu nombre<h1>
<br>
	<form action="/ejemplophp1.php" method="POST"> 
  		<input type="text" name="nombre" value="Nombre">
  		<br>
    <input type="submit" value="Enviar">
</form>
</body>
</html>
