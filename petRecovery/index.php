<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IngSoft2</title>
	<link href="https://fonts.googleapis.com/css?family=Mina" rel="stylesheet">
	<link rel="stylesheet" href="Assets/css/Estilos.css">
</head>
<body>
<form action = "validar.php" method="post">
<label for="caja1"><p>Nombre de Usuario</p>
 	<p><input type="text" id="caja1" name ="usuario" placeholder="Usuario"></p>
</label> 
<label for="caja2"><p>Contraseña</p>
 	<p><input type="password" id="caja2" name="password" placeholder="Contraseña" required></p>
</label>
<label for="caja3"><p>correo</p>
 	<p><input type="text" id="caja3" name ="correo" placeholder="Correo electronio"></p>
 	<input type="submit" value="Iniciar sesion">
</label> 
</form>
<p>puedes registrarte</p>

<button onclick="registrar()">Registrate</button>
	<script type="text/javascript">
	function registrar(){
		window.location="registro.php";
	}
	</script>
	
</body>
</html>
