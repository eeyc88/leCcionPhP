<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
		<title>Formulario</title>
		<meta name= "viewport" content= "width = device-width, initial-escale=1.0">
		<meta http-equiv= "Content-Type" content= "text/html; charset=UTF-8" />
		<link rel= "stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel= "stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div>
		<form action="mostrar.php" method="POST" name = "flogin" id = "flogin">
				<label>Nombre de Usuario:</label>
				<input type="text" name="nombre" id = "nombre" class="form-control">
				<label>Parcial:</label>
				<input type="text" name="parcial" id="parcial" class="form-control">
				<label>Final:</label>
                                <input type="text" name="final" id="final" class="form-control">
				<label>Mejoramiento:</label>
                                <input type="text" name="mejoramiento" id="mejoramiento" class="form-control"></br>
                                <input type="submit" value="Ingresar" class="btn btn-success" />
		</form>
	</div>
</body>
</html>
