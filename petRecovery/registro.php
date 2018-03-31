<?php 
	session_start();

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>registro</title>
	<link href="https://fonts.googleapis.com/css?family=Mina" rel="stylesheet">
	<link rel="stylesheet" href="Assets/css/Estilos.css">
</head>
<body>
<form action="insertar.php" method="post" enctype="application/x-www-form-urlencoded">
	<label for="caja1"><p>Nombre de usuario</p>
		<p><input type="text" id="caja1" name"usuario" placeholder="Nombre" required autofocus></p>
	</label>
	<label for="caja2"><p>password</p>
		<p><input type="password" name="password" id="caja2" required placeholder="password"></p>
	</label>
	<label for="caja3"><p>confirmar password</p>
		<p><input type="password" name="confirmarPassword" id="caja3" required placeholder="confirmar contraseña"></p>
	</label>
	<label for="caja4"><p>Ciudad</p>
		<p><input type="text" id="caja4" name"ciudad" placeholder="ciudad"></p>
	</label>	
	<input type="submit" value="Registrar">
	</form>
</body>
</html>